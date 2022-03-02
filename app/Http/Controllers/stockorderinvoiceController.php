<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestockorderinvoiceRequest;
use App\Http\Requests\UpdatestockorderinvoiceRequest;
use App\Repositories\stockorderinvoiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class stockorderinvoiceController extends AppBaseController
{
    /** @var stockorderinvoiceRepository $stockorderinvoiceRepository*/
    private $stockorderinvoiceRepository;

    public function __construct(stockorderinvoiceRepository $stockorderinvoiceRepo)
    {
        $this->stockorderinvoiceRepository = $stockorderinvoiceRepo;
    }

    /**
     * Display a listing of the stockorderinvoice.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stockorderinvoices = $this->stockorderinvoiceRepository->all();

        return view('stockorderinvoices.index')
            ->with('stockorderinvoices', $stockorderinvoices);
    }

    /**
     * Show the form for creating a new stockorderinvoice.
     *
     * @return Response
     */
    public function create()
    {
        return view('stockorderinvoices.create');
    }

    /**
     * Store a newly created stockorderinvoice in storage.
     *
     * @param CreatestockorderinvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreatestockorderinvoiceRequest $request)
    {
        $input = $request->all();

        $stockorderinvoice = $this->stockorderinvoiceRepository->create($input);

        Flash::success('Stockorderinvoice saved successfully.');

        return redirect(route('stockorderinvoices.index'));
    }

    /**
     * Display the specified stockorderinvoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stockorderinvoice = $this->stockorderinvoiceRepository->find($id);

        if (empty($stockorderinvoice)) {
            Flash::error('Stockorderinvoice not found');

            return redirect(route('stockorderinvoices.index'));
        }

        return view('stockorderinvoices.show')->with('stockorderinvoice', $stockorderinvoice);
    }

    /**
     * Show the form for editing the specified stockorderinvoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stockorderinvoice = $this->stockorderinvoiceRepository->find($id);

        if (empty($stockorderinvoice)) {
            Flash::error('Stockorderinvoice not found');

            return redirect(route('stockorderinvoices.index'));
        }

        return view('stockorderinvoices.edit')->with('stockorderinvoice', $stockorderinvoice);
    }

    /**
     * Update the specified stockorderinvoice in storage.
     *
     * @param int $id
     * @param UpdatestockorderinvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestockorderinvoiceRequest $request)
    {
        $stockorderinvoice = $this->stockorderinvoiceRepository->find($id);

        if (empty($stockorderinvoice)) {
            Flash::error('Stockorderinvoice not found');

            return redirect(route('stockorderinvoices.index'));
        }

        $stockorderinvoice = $this->stockorderinvoiceRepository->update($request->all(), $id);

        Flash::success('Stockorderinvoice updated successfully.');

        return redirect(route('stockorderinvoices.index'));
    }

    /**
     * Remove the specified stockorderinvoice from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stockorderinvoice = $this->stockorderinvoiceRepository->find($id);

        if (empty($stockorderinvoice)) {
            Flash::error('Stockorderinvoice not found');

            return redirect(route('stockorderinvoices.index'));
        }

        $this->stockorderinvoiceRepository->delete($id);

        Flash::success('Stockorderinvoice deleted successfully.');

        return redirect(route('stockorderinvoices.index'));
    }
}
