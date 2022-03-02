<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestockitemRequest;
use App\Http\Requests\UpdatestockitemRequest;
use App\Repositories\stockitemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class stockitemController extends AppBaseController
{
    /** @var stockitemRepository $stockitemRepository*/
    private $stockitemRepository;

    public function __construct(stockitemRepository $stockitemRepo)
    {
        $this->stockitemRepository = $stockitemRepo;
    }

    /**
     * Display a listing of the stockitem.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stockitems = $this->stockitemRepository->all();

        return view('stockitems.index')
            ->with('stockitems', $stockitems);
    }

    /**
     * Show the form for creating a new stockitem.
     *
     * @return Response
     */
    public function create()
    {
        return view('stockitems.create');
    }

    /**
     * Store a newly created stockitem in storage.
     *
     * @param CreatestockitemRequest $request
     *
     * @return Response
     */
    public function store(CreatestockitemRequest $request)
    {
        $input = $request->all();

        $stockitem = $this->stockitemRepository->create($input);

        Flash::success('Stockitem saved successfully.');

        return redirect(route('stockitems.index'));
    }

    /**
     * Display the specified stockitem.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stockitem = $this->stockitemRepository->find($id);

        if (empty($stockitem)) {
            Flash::error('Stockitem not found');

            return redirect(route('stockitems.index'));
        }

        return view('stockitems.show')->with('stockitem', $stockitem);
    }

    /**
     * Show the form for editing the specified stockitem.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stockitem = $this->stockitemRepository->find($id);

        if (empty($stockitem)) {
            Flash::error('Stockitem not found');

            return redirect(route('stockitems.index'));
        }

        return view('stockitems.edit')->with('stockitem', $stockitem);
    }

    /**
     * Update the specified stockitem in storage.
     *
     * @param int $id
     * @param UpdatestockitemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestockitemRequest $request)
    {
        $stockitem = $this->stockitemRepository->find($id);

        if (empty($stockitem)) {
            Flash::error('Stockitem not found');

            return redirect(route('stockitems.index'));
        }

        $stockitem = $this->stockitemRepository->update($request->all(), $id);

        Flash::success('Stockitem updated successfully.');

        return redirect(route('stockitems.index'));
    }

    /**
     * Remove the specified stockitem from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stockitem = $this->stockitemRepository->find($id);

        if (empty($stockitem)) {
            Flash::error('Stockitem not found');

            return redirect(route('stockitems.index'));
        }

        $this->stockitemRepository->delete($id);

        Flash::success('Stockitem deleted successfully.');

        return redirect(route('stockitems.index'));
    }
}
