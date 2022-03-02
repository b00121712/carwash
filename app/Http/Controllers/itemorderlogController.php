<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateitemorderlogRequest;
use App\Http\Requests\UpdateitemorderlogRequest;
use App\Repositories\itemorderlogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class itemorderlogController extends AppBaseController
{
    /** @var itemorderlogRepository $itemorderlogRepository*/
    private $itemorderlogRepository;

    public function __construct(itemorderlogRepository $itemorderlogRepo)
    {
        $this->itemorderlogRepository = $itemorderlogRepo;
    }

    /**
     * Display a listing of the itemorderlog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $itemorderlogs = $this->itemorderlogRepository->all();

        return view('itemorderlogs.index')
            ->with('itemorderlogs', $itemorderlogs);
    }

    /**
     * Show the form for creating a new itemorderlog.
     *
     * @return Response
     */
    public function create()
    {
        return view('itemorderlogs.create');
    }

    /**
     * Store a newly created itemorderlog in storage.
     *
     * @param CreateitemorderlogRequest $request
     *
     * @return Response
     */
    public function store(CreateitemorderlogRequest $request)
    {
        $input = $request->all();

        $itemorderlog = $this->itemorderlogRepository->create($input);

        Flash::success('Itemorderlog saved successfully.');

        return redirect(route('itemorderlogs.index'));
    }

    /**
     * Display the specified itemorderlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemorderlog = $this->itemorderlogRepository->find($id);

        if (empty($itemorderlog)) {
            Flash::error('Itemorderlog not found');

            return redirect(route('itemorderlogs.index'));
        }

        return view('itemorderlogs.show')->with('itemorderlog', $itemorderlog);
    }

    /**
     * Show the form for editing the specified itemorderlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemorderlog = $this->itemorderlogRepository->find($id);

        if (empty($itemorderlog)) {
            Flash::error('Itemorderlog not found');

            return redirect(route('itemorderlogs.index'));
        }

        return view('itemorderlogs.edit')->with('itemorderlog', $itemorderlog);
    }

    /**
     * Update the specified itemorderlog in storage.
     *
     * @param int $id
     * @param UpdateitemorderlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateitemorderlogRequest $request)
    {
        $itemorderlog = $this->itemorderlogRepository->find($id);

        if (empty($itemorderlog)) {
            Flash::error('Itemorderlog not found');

            return redirect(route('itemorderlogs.index'));
        }

        $itemorderlog = $this->itemorderlogRepository->update($request->all(), $id);

        Flash::success('Itemorderlog updated successfully.');

        return redirect(route('itemorderlogs.index'));
    }

    /**
     * Remove the specified itemorderlog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemorderlog = $this->itemorderlogRepository->find($id);

        if (empty($itemorderlog)) {
            Flash::error('Itemorderlog not found');

            return redirect(route('itemorderlogs.index'));
        }

        $this->itemorderlogRepository->delete($id);

        Flash::success('Itemorderlog deleted successfully.');

        return redirect(route('itemorderlogs.index'));
    }
}
