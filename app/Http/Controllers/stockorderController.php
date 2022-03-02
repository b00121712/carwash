<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestockorderRequest;
use App\Http\Requests\UpdatestockorderRequest;
use App\Repositories\stockorderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class stockorderController extends AppBaseController
{
    /** @var stockorderRepository $stockorderRepository*/
    private $stockorderRepository;

    public function __construct(stockorderRepository $stockorderRepo)
    {
        $this->stockorderRepository = $stockorderRepo;
    }

    /**
     * Display a listing of the stockorder.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stockorders = $this->stockorderRepository->all();

        return view('stockorders.index')
            ->with('stockorders', $stockorders);
    }

    /**
     * Show the form for creating a new stockorder.
     *
     * @return Response
     */
    public function create()
    {
        return view('stockorders.create');
    }

    /**
     * Store a newly created stockorder in storage.
     *
     * @param CreatestockorderRequest $request
     *
     * @return Response
     */
    public function store(CreatestockorderRequest $request)
    {
        $input = $request->all();

        $stockorder = $this->stockorderRepository->create($input);

        Flash::success('Stockorder saved successfully.');

        return redirect(route('stockorders.index'));
    }

    /**
     * Display the specified stockorder.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stockorder = $this->stockorderRepository->find($id);

        if (empty($stockorder)) {
            Flash::error('Stockorder not found');

            return redirect(route('stockorders.index'));
        }

        return view('stockorders.show')->with('stockorder', $stockorder);
    }

    /**
     * Show the form for editing the specified stockorder.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stockorder = $this->stockorderRepository->find($id);

        if (empty($stockorder)) {
            Flash::error('Stockorder not found');

            return redirect(route('stockorders.index'));
        }

        return view('stockorders.edit')->with('stockorder', $stockorder);
    }

    /**
     * Update the specified stockorder in storage.
     *
     * @param int $id
     * @param UpdatestockorderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestockorderRequest $request)
    {
        $stockorder = $this->stockorderRepository->find($id);

        if (empty($stockorder)) {
            Flash::error('Stockorder not found');

            return redirect(route('stockorders.index'));
        }

        $stockorder = $this->stockorderRepository->update($request->all(), $id);

        Flash::success('Stockorder updated successfully.');

        return redirect(route('stockorders.index'));
    }

    /**
     * Remove the specified stockorder from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stockorder = $this->stockorderRepository->find($id);

        if (empty($stockorder)) {
            Flash::error('Stockorder not found');

            return redirect(route('stockorders.index'));
        }

        $this->stockorderRepository->delete($id);

        Flash::success('Stockorder deleted successfully.');

        return redirect(route('stockorders.index'));
    }
}
