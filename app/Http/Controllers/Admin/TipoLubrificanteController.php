<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TipoLubrificante;
use Illuminate\Http\Request;
use Session;

class TipoLubrificanteController extends Controller
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
            $tipolubrificante = TipoLubrificante::where('tipo_lubrificante', 'LIKE', "%$keyword%")
				->orWhere('dsc_tipo_lubrificante', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $tipolubrificante = TipoLubrificante::paginate($perPage);
        }

        return view('admin.tipo-lubrificante.index', compact('tipolubrificante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tipo-lubrificante.create');
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
        
        $requestData = $request->all();
        
        TipoLubrificante::create($requestData);

        Session::flash('flash_message', 'TipoLubrificante added!');

        return redirect('admin/tipo-lubrificante');
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
        $tipolubrificante = TipoLubrificante::findOrFail($id);

        return view('admin.tipo-lubrificante.show', compact('tipolubrificante'));
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
        $tipolubrificante = TipoLubrificante::findOrFail($id);

        return view('admin.tipo-lubrificante.edit', compact('tipolubrificante'));
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
        
        $requestData = $request->all();
        
        $tipolubrificante = TipoLubrificante::findOrFail($id);
        $tipolubrificante->update($requestData);

        Session::flash('flash_message', 'TipoLubrificante updated!');

        return redirect('admin/tipo-lubrificante');
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
        TipoLubrificante::destroy($id);

        Session::flash('flash_message', 'TipoLubrificante deleted!');

        return redirect('admin/tipo-lubrificante');
    }
}
