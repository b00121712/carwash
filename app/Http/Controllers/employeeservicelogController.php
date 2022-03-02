<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateemployeeservicelogRequest;
use App\Http\Requests\UpdateemployeeservicelogRequest;
use App\Repositories\employeeservicelogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class employeeservicelogController extends AppBaseController
{
    /** @var employeeservicelogRepository $employeeservicelogRepository*/
    private $employeeservicelogRepository;

    public function __construct(employeeservicelogRepository $employeeservicelogRepo)
    {
        $this->employeeservicelogRepository = $employeeservicelogRepo;
    }

    /**
     * Display a listing of the employeeservicelog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeeservicelogs = $this->employeeservicelogRepository->all();

        return view('employeeservicelogs.index')
            ->with('employeeservicelogs', $employeeservicelogs);
    }

    /**
     * Show the form for creating a new employeeservicelog.
     *
     * @return Response
     */
    public function create()
    {
        return view('employeeservicelogs.create');
    }

    /**
     * Store a newly created employeeservicelog in storage.
     *
     * @param CreateemployeeservicelogRequest $request
     *
     * @return Response
     */
    public function store(CreateemployeeservicelogRequest $request)
    {
        $input = $request->all();

        $employeeservicelog = $this->employeeservicelogRepository->create($input);

        Flash::success('Employeeservicelog saved successfully.');

        return redirect(route('employeeservicelogs.index'));
    }

    /**
     * Display the specified employeeservicelog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeeservicelog = $this->employeeservicelogRepository->find($id);

        if (empty($employeeservicelog)) {
            Flash::error('Employeeservicelog not found');

            return redirect(route('employeeservicelogs.index'));
        }

        return view('employeeservicelogs.show')->with('employeeservicelog', $employeeservicelog);
    }

    /**
     * Show the form for editing the specified employeeservicelog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeeservicelog = $this->employeeservicelogRepository->find($id);

        if (empty($employeeservicelog)) {
            Flash::error('Employeeservicelog not found');

            return redirect(route('employeeservicelogs.index'));
        }

        return view('employeeservicelogs.edit')->with('employeeservicelog', $employeeservicelog);
    }

    /**
     * Update the specified employeeservicelog in storage.
     *
     * @param int $id
     * @param UpdateemployeeservicelogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateemployeeservicelogRequest $request)
    {
        $employeeservicelog = $this->employeeservicelogRepository->find($id);

        if (empty($employeeservicelog)) {
            Flash::error('Employeeservicelog not found');

            return redirect(route('employeeservicelogs.index'));
        }

        $employeeservicelog = $this->employeeservicelogRepository->update($request->all(), $id);

        Flash::success('Employeeservicelog updated successfully.');

        return redirect(route('employeeservicelogs.index'));
    }

    /**
     * Remove the specified employeeservicelog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeeservicelog = $this->employeeservicelogRepository->find($id);

        if (empty($employeeservicelog)) {
            Flash::error('Employeeservicelog not found');

            return redirect(route('employeeservicelogs.index'));
        }

        $this->employeeservicelogRepository->delete($id);

        Flash::success('Employeeservicelog deleted successfully.');

        return redirect(route('employeeservicelogs.index'));
    }
}
