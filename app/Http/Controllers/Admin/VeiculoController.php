<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Veiculo;
use App\TipoVeiculo;
use App\Fabricante;

class VeiculoController extends Controller
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
            $veiculo = Veiculo::where('nome_veiculo', 'LIKE', "%$keyword%")
				->orWhere('id_tipo_veiculo', 'LIKE', "%$keyword%")
				->orWhere('id_fabricante_veiculo', 'LIKE', "%$keyword%")
				->orWhere('modelo_veiculo', 'LIKE', "%$keyword%")
				->orWhere('chassi_veiculo', 'LIKE', "%$keyword%")
				->orWhere('renavam_veiculo', 'LIKE', "%$keyword%")
				->orWhere('ano_fabricacao_veiculo', 'LIKE', "%$keyword%")
				->orWhere('ano_modelo_veiculo', 'LIKE', "%$keyword%")
				->orWhere('valor_aquisicao_veiculo', 'LIKE', "%$keyword%")
				->orWhere('valor_atual_veiculo', 'LIKE', "%$keyword%")
				->orWhere('dsc_veiculo', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $veiculo = Veiculo::paginate($perPage);
        }

        return view('admin.veiculo.index', compact('veiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $fabricantes = Fabricante::pluck('nome_fabricante', 'id')->toArray();
        $tiposVeiculos = TipoVeiculo::pluck('nome_tipo_veiculo', 'id')->toArray();
        return view('admin.veiculo.create', compact('fabricantes', 'tiposVeiculos'));
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
			'nome_veiculo' => 'required|max:120',
			'ano_fabricacao_veiculo' => 'required|max:4|min:4',
			'ano_modelo_veiculo' => 'required|max:4|min:4'
		]);
        $requestData = $request->all();
        
        Veiculo::create($requestData);

        Session::flash('flash_message', 'Veiculo added!');

        return redirect('admin/veiculo');
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
        $veiculo = Veiculo::findOrFail($id);

        return view('admin.veiculo.show', compact('veiculo'));
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
        $veiculo = Veiculo::findOrFail($id);
        $fabricantes = Fabricante::pluck('nome_fabricante', 'id')->toArray();
        $tiposVeiculos = TipoVeiculo::pluck('nome_tipo_veiculo', 'id')->toArray();
        return view('admin.veiculo.edit', compact('veiculo','fabricantes', 'tiposVeiculos'));
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
			'nome_veiculo' => 'required|max:120',
			'ano_fabricacao_veiculo' => 'required|max:4|min:4',
			'ano_modelo_veiculo' => 'required|max:4|min:4'
		]);
        $requestData = $request->all();
        
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($requestData);

        Session::flash('flash_message', 'Veiculo updated!');

        return redirect('admin/veiculo');
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
        Veiculo::destroy($id);

        Session::flash('flash_message', 'Veiculo deleted!');

        return redirect('admin/veiculo');
    }
}
