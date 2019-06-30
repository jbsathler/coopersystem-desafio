<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepedidosRequest;
use App\Http\Requests\UpdatepedidosRequest;
use App\Repositories\pedidosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pedidosController extends AppBaseController
{
    /** @var  pedidosRepository */
    private $pedidosRepository;

    public function __construct(pedidosRepository $pedidosRepo)
    {
        $this->pedidosRepository = $pedidosRepo;
    }

    /**
     * Display a listing of the pedidos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pedidos = $this->pedidosRepository->all();

        return view('pedidos.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new pedidos.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created pedidos in storage.
     *
     * @param CreatepedidosRequest $request
     *
     * @return Response
     */
    public function store(CreatepedidosRequest $request)
    {
        $input = $request->all();

        $pedidos = $this->pedidosRepository->create($input);

        Flash::success('Pedidos saved successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified pedidos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.show')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for editing the specified pedidos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.edit')->with('pedidos', $pedidos);
    }

    /**
     * Update the specified pedidos in storage.
     *
     * @param int $id
     * @param UpdatepedidosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepedidosRequest $request)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        $pedidos = $this->pedidosRepository->update($request->all(), $id);

        Flash::success('Pedidos updated successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified pedidos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        $this->pedidosRepository->delete($id);

        Flash::success('Pedidos deleted successfully.');

        return redirect(route('pedidos.index'));
    }
}
