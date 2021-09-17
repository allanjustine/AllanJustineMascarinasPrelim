<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHotelsRequest;
use App\Http\Requests\UpdateHotelsRequest;
use App\Repositories\HotelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HotelsController extends AppBaseController
{
    /** @var  HotelsRepository */
    private $hotelsRepository;

    public function __construct(HotelsRepository $hotelsRepo)
    {
        $this->hotelsRepository = $hotelsRepo;
    }

    /**
     * Display a listing of the Hotels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hotels = $this->hotelsRepository->all();

        return view('hotels.index')
            ->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new Hotels.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created Hotels in storage.
     *
     * @param CreateHotelsRequest $request
     *
     * @return Response
     */
    public function store(CreateHotelsRequest $request)
    {
        $input = $request->all();

        $hotels = $this->hotelsRepository->create($input);

        Flash::success('Hotels saved successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Display the specified Hotels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotels = $this->hotelsRepository->find($id);

        if (empty($hotels)) {
            Flash::error('Hotels not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.show')->with('hotels', $hotels);
    }

    /**
     * Show the form for editing the specified Hotels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotels = $this->hotelsRepository->find($id);

        if (empty($hotels)) {
            Flash::error('Hotels not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.edit')->with('hotels', $hotels);
    }

    /**
     * Update the specified Hotels in storage.
     *
     * @param int $id
     * @param UpdateHotelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHotelsRequest $request)
    {
        $hotels = $this->hotelsRepository->find($id);

        if (empty($hotels)) {
            Flash::error('Hotels not found');

            return redirect(route('hotels.index'));
        }

        $hotels = $this->hotelsRepository->update($request->all(), $id);

        Flash::success('Hotels updated successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Remove the specified Hotels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotels = $this->hotelsRepository->find($id);

        if (empty($hotels)) {
            Flash::error('Hotels not found');

            return redirect(route('hotels.index'));
        }

        $this->hotelsRepository->delete($id);

        Flash::success('Hotels deleted successfully.');

        return redirect(route('hotels.index'));
    }
}
