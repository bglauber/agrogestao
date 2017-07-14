<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Veiculo;
use App\User;

use Illuminate\Http\Request;
use Session;

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
      ->orWhere('dsc_veiculo', 'LIKE', "%$keyword%")
      ->orWhere('tipo_veiculo', 'LIKE', "%$keyword%")
      ->orWhere('user_id', 'LIKE', "%$keyword%")
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
    $usuarios = User::pluck('name', 'id')->toArray();
    return view('admin.veiculo.create')->with('usuarios', $usuarios);
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
      'nome_veiculo' => 'required|max:20'
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
    $usuarios = User::pluck('name', 'id')->toArray();
    return view('admin.veiculo.edit', compact('usuarios', 'veiculo'));
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
      'nome_veiculo' => 'required|max:20'
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
