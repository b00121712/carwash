<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecorporatecustomerRequest;
use App\Http\Requests\UpdatecorporatecustomerRequest;
use App\Repositories\corporatecustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class corporatecustomerController extends AppBaseController
{
    /** @var corporatecustomerRepository $corporatecustomerRepository*/
    private $corporatecustomerRepository;

    public function __construct(corporatecustomerRepository $corporatecustomerRepo)
    {
        $this->corporatecustomerRepository = $corporatecustomerRepo;
    }

    /**
     * Display a listing of the corporatecustomer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $corporatecustomers = $this->corporatecustomerRepository->all();

        return view('corporatecustomers.index')
            ->with('corporatecustomers', $corporatecustomers);
    }

    /**
     * Show the form for creating a new corporatecustomer.
     *
     * @return Response
     */
    public function create()
    {
        return view('corporatecustomers.create');
    }

    /**
     * Store a newly created corporatecustomer in storage.
     *
     * @param CreatecorporatecustomerRequest $request
     *
     * @return Response
     */
    public function store(CreatecorporatecustomerRequest $request)
    {
        $input = $request->all();

        $corporatecustomer = $this->corporatecustomerRepository->create($input);

        Flash::success('Corporatecustomer saved successfully.');

        return redirect(route('corporatecustomers.index'));
    }

    /**
     * Display the specified corporatecustomer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $corporatecustomer = $this->corporatecustomerRepository->find($id);

        if (empty($corporatecustomer)) {
            Flash::error('Corporatecustomer not found');

            return redirect(route('corporatecustomers.index'));
        }

        return view('corporatecustomers.show')->with('corporatecustomer', $corporatecustomer);
    }

    /**
     * Show the form for editing the specified corporatecustomer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $corporatecustomer = $this->corporatecustomerRepository->find($id);

        if (empty($corporatecustomer)) {
            Flash::error('Corporatecustomer not found');

            return redirect(route('corporatecustomers.index'));
        }

        return view('corporatecustomers.edit')->with('corporatecustomer', $corporatecustomer);
    }

    /**
     * Update the specified corporatecustomer in storage.
     *
     * @param int $id
     * @param UpdatecorporatecustomerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecorporatecustomerRequest $request)
    {
        $corporatecustomer = $this->corporatecustomerRepository->find($id);

        if (empty($corporatecustomer)) {
            Flash::error('Corporatecustomer not found');

            return redirect(route('corporatecustomers.index'));
        }

        $corporatecustomer = $this->corporatecustomerRepository->update($request->all(), $id);

        Flash::success('Corporatecustomer updated successfully.');

        return redirect(route('corporatecustomers.index'));
    }

    /**
     * Remove the specified corporatecustomer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $corporatecustomer = $this->corporatecustomerRepository->find($id);

        if (empty($corporatecustomer)) {
            Flash::error('Corporatecustomer not found');

            return redirect(route('corporatecustomers.index'));
        }

        $this->corporatecustomerRepository->delete($id);

        Flash::success('Corporatecustomer deleted successfully.');

        return redirect(route('corporatecustomers.index'));
    }
}
