<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesupplierRequest;
use App\Http\Requests\UpdatesupplierRequest;
use App\Repositories\supplierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class supplierController extends AppBaseController
{
    /** @var supplierRepository $supplierRepository*/
    private $supplierRepository;

    public function __construct(supplierRepository $supplierRepo)
    {
        $this->supplierRepository = $supplierRepo;
    }

    /**
     * Display a listing of the supplier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suppliers = $this->supplierRepository->all();

        return view('suppliers.index')
            ->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new supplier.
     *
     * @return Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created supplier in storage.
     *
     * @param CreatesupplierRequest $request
     *
     * @return Response
     */
    public function store(CreatesupplierRequest $request)
    {
        $input = $request->all();

        $supplier = $this->supplierRepository->create($input);

        Flash::success('Supplier saved successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Display the specified supplier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error('Supplier not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.show')->with('supplier', $supplier);
    }

    /**
     * Show the form for editing the specified supplier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error('Supplier not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified supplier in storage.
     *
     * @param int $id
     * @param UpdatesupplierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesupplierRequest $request)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error('Supplier not found');

            return redirect(route('suppliers.index'));
        }

        $supplier = $this->supplierRepository->update($request->all(), $id);

        Flash::success('Supplier updated successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Remove the specified supplier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supplier = $this->supplierRepository->find($id);

        if (empty($supplier)) {
            Flash::error('Supplier not found');

            return redirect(route('suppliers.index'));
        }

        $this->supplierRepository->delete($id);

        Flash::success('Supplier deleted successfully.');

        return redirect(route('suppliers.index'));
    }
}
