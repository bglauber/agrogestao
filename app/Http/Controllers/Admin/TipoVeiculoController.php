<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TipoVeiculo;
use Illuminate\Http\Request;
use Session;

class TipoVeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tipoveiculo = TipoVeiculo::where('nome_tipo_veiculo', 'LIKE', "%$keyword%")
				->orWhere('dsc_tipo_veiculo', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $tipoveiculo = TipoVeiculo::paginate($perPage);
        }

        return view('admin.tipo-veiculo.index', compact('tipoveiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tipo-veiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nome_tipo_veiculo' => 'required|max:100'
		]);
        $requestData = $request->all();
        
        TipoVeiculo::create($requestData);

        Session::flash('flash_message', 'TipoVeiculo added!');

        return redirect('admin/tipo-veiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tipoveiculo = TipoVeiculo::findOrFail($id);

        return view('admin.tipo-veiculo.show', compact('tipoveiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tipoveiculo = TipoVeiculo::findOrFail($id);

        return view('admin.tipo-veiculo.edit', compact('tipoveiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'nome_tipo_veiculo' => 'required|max:100'
		]);
        $requestData = $request->all();
        
        $tipoveiculo = TipoVeiculo::findOrFail($id);
        $tipoveiculo->update($requestData);

        Session::flash('flash_message', 'TipoVeiculo updated!');

        return redirect('admin/tipo-veiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        TipoVeiculo::destroy($id);

        Session::flash('flash_message', 'TipoVeiculo deleted!');

        return redirect('admin/tipo-veiculo');
    }
}

