<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateemployeevehiclelogRequest;
use App\Http\Requests\UpdateemployeevehiclelogRequest;
use App\Repositories\employeevehiclelogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class employeevehiclelogController extends AppBaseController
{
    /** @var employeevehiclelogRepository $employeevehiclelogRepository*/
    private $employeevehiclelogRepository;

    public function __construct(employeevehiclelogRepository $employeevehiclelogRepo)
    {
        $this->employeevehiclelogRepository = $employeevehiclelogRepo;
    }

    /**
     * Display a listing of the employeevehiclelog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeevehiclelogs = $this->employeevehiclelogRepository->all();

        return view('employeevehiclelogs.index')
            ->with('employeevehiclelogs', $employeevehiclelogs);
    }

    /**
     * Show the form for creating a new employeevehiclelog.
     *
     * @return Response
     */
    public function create()
    {
        return view('employeevehiclelogs.create');
    }

    /**
     * Store a newly created employeevehiclelog in storage.
     *
     * @param CreateemployeevehiclelogRequest $request
     *
     * @return Response
     */
    public function store(CreateemployeevehiclelogRequest $request)
    {
        $input = $request->all();

        $employeevehiclelog = $this->employeevehiclelogRepository->create($input);

        Flash::success('Employeevehiclelog saved successfully.');

        return redirect(route('employeevehiclelogs.index'));
    }

    /**
     * Display the specified employeevehiclelog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeevehiclelog = $this->employeevehiclelogRepository->find($id);

        if (empty($employeevehiclelog)) {
            Flash::error('Employeevehiclelog not found');

            return redirect(route('employeevehiclelogs.index'));
        }

        return view('employeevehiclelogs.show')->with('employeevehiclelog', $employeevehiclelog);
    }

    /**
     * Show the form for editing the specified employeevehiclelog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeevehiclelog = $this->employeevehiclelogRepository->find($id);

        if (empty($employeevehiclelog)) {
            Flash::error('Employeevehiclelog not found');

            return redirect(route('employeevehiclelogs.index'));
        }

        return view('employeevehiclelogs.edit')->with('employeevehiclelog', $employeevehiclelog);
    }

    /**
     * Update the specified employeevehiclelog in storage.
     *
     * @param int $id
     * @param UpdateemployeevehiclelogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateemployeevehiclelogRequest $request)
    {
        $employeevehiclelog = $this->employeevehiclelogRepository->find($id);

        if (empty($employeevehiclelog)) {
            Flash::error('Employeevehiclelog not found');

            return redirect(route('employeevehiclelogs.index'));
        }

        $employeevehiclelog = $this->employeevehiclelogRepository->update($request->all(), $id);

        Flash::success('Employeevehiclelog updated successfully.');

        return redirect(route('employeevehiclelogs.index'));
    }

    /**
     * Remove the specified employeevehiclelog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeevehiclelog = $this->employeevehiclelogRepository->find($id);

        if (empty($employeevehiclelog)) {
            Flash::error('Employeevehiclelog not found');

            return redirect(route('employeevehiclelogs.index'));
        }

        $this->employeevehiclelogRepository->delete($id);

        Flash::success('Employeevehiclelog deleted successfully.');

        return redirect(route('employeevehiclelogs.index'));
    }
}
