<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicetypeRequest;
use App\Http\Requests\UpdateservicetypeRequest;
use App\Repositories\servicetypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class servicetypeController extends AppBaseController
{
    /** @var servicetypeRepository $servicetypeRepository*/
    private $servicetypeRepository;

    public function __construct(servicetypeRepository $servicetypeRepo)
    {
        $this->servicetypeRepository = $servicetypeRepo;
    }

    /**
     * Display a listing of the servicetype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicetypes = $this->servicetypeRepository->all();

        return view('servicetypes.index')
            ->with('servicetypes', $servicetypes);
    }

    /**
     * Show the form for creating a new servicetype.
     *
     * @return Response
     */
    public function create()
    {
        return view('servicetypes.create');
    }

    /**
     * Store a newly created servicetype in storage.
     *
     * @param CreateservicetypeRequest $request
     *
     * @return Response
     */
    public function store(CreateservicetypeRequest $request)
    {
        $input = $request->all();

        $servicetype = $this->servicetypeRepository->create($input);

        Flash::success('Servicetype saved successfully.');

        return redirect(route('servicetypes.index'));
    }

    /**
     * Display the specified servicetype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicetype = $this->servicetypeRepository->find($id);

        if (empty($servicetype)) {
            Flash::error('Servicetype not found');

            return redirect(route('servicetypes.index'));
        }

        return view('servicetypes.show')->with('servicetype', $servicetype);
    }

    /**
     * Show the form for editing the specified servicetype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicetype = $this->servicetypeRepository->find($id);

        if (empty($servicetype)) {
            Flash::error('Servicetype not found');

            return redirect(route('servicetypes.index'));
        }

        return view('servicetypes.edit')->with('servicetype', $servicetype);
    }

    /**
     * Update the specified servicetype in storage.
     *
     * @param int $id
     * @param UpdateservicetypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicetypeRequest $request)
    {
        $servicetype = $this->servicetypeRepository->find($id);

        if (empty($servicetype)) {
            Flash::error('Servicetype not found');

            return redirect(route('servicetypes.index'));
        }

        $servicetype = $this->servicetypeRepository->update($request->all(), $id);

        Flash::success('Servicetype updated successfully.');

        return redirect(route('servicetypes.index'));
    }

    /**
     * Remove the specified servicetype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicetype = $this->servicetypeRepository->find($id);

        if (empty($servicetype)) {
            Flash::error('Servicetype not found');

            return redirect(route('servicetypes.index'));
        }

        $this->servicetypeRepository->delete($id);

        Flash::success('Servicetype deleted successfully.');

        return redirect(route('servicetypes.index'));
    }
}
