<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehicleRequest;
use App\Http\Requests\UpdatevehicleRequest;
use App\Repositories\vehicleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vehicleController extends AppBaseController
{
    /** @var vehicleRepository $vehicleRepository*/
    private $vehicleRepository;

    public function __construct(vehicleRepository $vehicleRepo)
    {
        $this->vehicleRepository = $vehicleRepo;
    }

    /**
     * Display a listing of the vehicle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehicles = $this->vehicleRepository->all();

        return view('vehicles.index')
            ->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new vehicle.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created vehicle in storage.
     *
     * @param CreatevehicleRequest $request
     *
     * @return Response
     */
    public function store(CreatevehicleRequest $request)
    {
        $input = $request->all();

        $vehicle = $this->vehicleRepository->create($input);

        Flash::success('Vehicle saved successfully.');

        return redirect(route('vehicles.index'));
    }

    /**
     * Display the specified vehicle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicle = $this->vehicleRepository->find($id);

        if (empty($vehicle)) {
            Flash::error('Vehicle not found');

            return redirect(route('vehicles.index'));
        }

        return view('vehicles.show')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified vehicle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicle = $this->vehicleRepository->find($id);

        if (empty($vehicle)) {
            Flash::error('Vehicle not found');

            return redirect(route('vehicles.index'));
        }

        return view('vehicles.edit')->with('vehicle', $vehicle);
    }

    /**
     * Update the specified vehicle in storage.
     *
     * @param int $id
     * @param UpdatevehicleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehicleRequest $request)
    {
        $vehicle = $this->vehicleRepository->find($id);

        if (empty($vehicle)) {
            Flash::error('Vehicle not found');

            return redirect(route('vehicles.index'));
        }

        $vehicle = $this->vehicleRepository->update($request->all(), $id);

        Flash::success('Vehicle updated successfully.');

        return redirect(route('vehicles.index'));
    }

    /**
     * Remove the specified vehicle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicle = $this->vehicleRepository->find($id);

        if (empty($vehicle)) {
            Flash::error('Vehicle not found');

            return redirect(route('vehicles.index'));
        }

        $this->vehicleRepository->delete($id);

        Flash::success('Vehicle deleted successfully.');

        return redirect(route('vehicles.index'));
    }
}
