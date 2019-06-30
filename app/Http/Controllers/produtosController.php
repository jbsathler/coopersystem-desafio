<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprodutosRequest;
use App\Http\Requests\UpdateprodutosRequest;
use App\Repositories\produtosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class produtosController extends AppBaseController
{
    /** @var  produtosRepository */
    private $produtosRepository;

    public function __construct(produtosRepository $produtosRepo)
    {
        $this->produtosRepository = $produtosRepo;
    }

    /**
     * Display a listing of the produtos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produtos = $this->produtosRepository->all();

        return view('produtos.index')
            ->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new produtos.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created produtos in storage.
     *
     * @param CreateprodutosRequest $request
     *
     * @return Response
     */
    public function store(CreateprodutosRequest $request)
    {
        $input = $request->all();

        $produtos = $this->produtosRepository->create($input);

        Flash::success('Produtos saved successfully.');

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified produtos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produtos = $this->produtosRepository->find($id);

        if (empty($produtos)) {
            Flash::error('Produtos not found');

            return redirect(route('produtos.index'));
        }

        return view('produtos.show')->with('produtos', $produtos);
    }

    /**
     * Show the form for editing the specified produtos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produtos = $this->produtosRepository->find($id);

        if (empty($produtos)) {
            Flash::error('Produtos not found');

            return redirect(route('produtos.index'));
        }

        return view('produtos.edit')->with('produtos', $produtos);
    }

    /**
     * Update the specified produtos in storage.
     *
     * @param int $id
     * @param UpdateprodutosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprodutosRequest $request)
    {
        $produtos = $this->produtosRepository->find($id);

        if (empty($produtos)) {
            Flash::error('Produtos not found');

            return redirect(route('produtos.index'));
        }

        $produtos = $this->produtosRepository->update($request->all(), $id);

        Flash::success('Produtos updated successfully.');

        return redirect(route('produtos.index'));
    }

    /**
     * Remove the specified produtos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produtos = $this->produtosRepository->find($id);

        if (empty($produtos)) {
            Flash::error('Produtos not found');

            return redirect(route('produtos.index'));
        }

        $this->produtosRepository->delete($id);

        Flash::success('Produtos deleted successfully.');

        return redirect(route('produtos.index'));
    }
}
