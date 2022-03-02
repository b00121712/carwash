<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadministratorRequest;
use App\Http\Requests\UpdateadministratorRequest;
use App\Repositories\administratorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class administratorController extends AppBaseController
{
    /** @var administratorRepository $administratorRepository*/
    private $administratorRepository;

    public function __construct(administratorRepository $administratorRepo)
    {
        $this->administratorRepository = $administratorRepo;
    }

    /**
     * Display a listing of the administrator.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $administrators = $this->administratorRepository->all();

        return view('administrators.index')
            ->with('administrators', $administrators);
    }

    /**
     * Show the form for creating a new administrator.
     *
     * @return Response
     */
    public function create()
    {
        return view('administrators.create');
    }

    /**
     * Store a newly created administrator in storage.
     *
     * @param CreateadministratorRequest $request
     *
     * @return Response
     */
    public function store(CreateadministratorRequest $request)
    {
        $input = $request->all();

        $administrator = $this->administratorRepository->create($input);

        Flash::success('Administrator saved successfully.');

        return redirect(route('administrators.index'));
    }

    /**
     * Display the specified administrator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $administrator = $this->administratorRepository->find($id);

        if (empty($administrator)) {
            Flash::error('Administrator not found');

            return redirect(route('administrators.index'));
        }

        return view('administrators.show')->with('administrator', $administrator);
    }

    /**
     * Show the form for editing the specified administrator.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $administrator = $this->administratorRepository->find($id);

        if (empty($administrator)) {
            Flash::error('Administrator not found');

            return redirect(route('administrators.index'));
        }

        return view('administrators.edit')->with('administrator', $administrator);
    }

    /**
     * Update the specified administrator in storage.
     *
     * @param int $id
     * @param UpdateadministratorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadministratorRequest $request)
    {
        $administrator = $this->administratorRepository->find($id);

        if (empty($administrator)) {
            Flash::error('Administrator not found');

            return redirect(route('administrators.index'));
        }

        $administrator = $this->administratorRepository->update($request->all(), $id);

        Flash::success('Administrator updated successfully.');

        return redirect(route('administrators.index'));
    }

    /**
     * Remove the specified administrator from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $administrator = $this->administratorRepository->find($id);

        if (empty($administrator)) {
            Flash::error('Administrator not found');

            return redirect(route('administrators.index'));
        }

        $this->administratorRepository->delete($id);

        Flash::success('Administrator deleted successfully.');

        return redirect(route('administrators.index'));
    }
}
