<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebranchRequest;
use App\Http\Requests\UpdatebranchRequest;
use App\Repositories\branchRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class branchController extends AppBaseController
{
    /** @var branchRepository $branchRepository*/
    private $branchRepository;

    public function __construct(branchRepository $branchRepo)
    {
        $this->branchRepository = $branchRepo;
    }

    /**
     * Display a listing of the branch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $branches = $this->branchRepository->all();

        return view('branches.index')
            ->with('branches', $branches);
    }

    /**
     * Show the form for creating a new branch.
     *
     * @return Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created branch in storage.
     *
     * @param CreatebranchRequest $request
     *
     * @return Response
     */
    public function store(CreatebranchRequest $request)
    {
        $input = $request->all();

        $branch = $this->branchRepository->create($input);

        Flash::success('Branch saved successfully.');

        return redirect(route('branches.index'));
    }

    /**
     * Display the specified branch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $branch = $this->branchRepository->find($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('branches.index'));
        }

        return view('branches.show')->with('branch', $branch);
    }

    /**
     * Show the form for editing the specified branch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $branch = $this->branchRepository->find($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('branches.index'));
        }

        return view('branches.edit')->with('branch', $branch);
    }

    /**
     * Update the specified branch in storage.
     *
     * @param int $id
     * @param UpdatebranchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebranchRequest $request)
    {
        $branch = $this->branchRepository->find($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('branches.index'));
        }

        $branch = $this->branchRepository->update($request->all(), $id);

        Flash::success('Branch updated successfully.');

        return redirect(route('branches.index'));
    }

    /**
     * Remove the specified branch from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $branch = $this->branchRepository->find($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('branches.index'));
        }

        $this->branchRepository->delete($id);

        Flash::success('Branch deleted successfully.');

        return redirect(route('branches.index'));
    }
}
