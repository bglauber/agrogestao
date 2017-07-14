<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fabricante;
use Illuminate\Http\Request;
use Session;

class FabricanteController extends Controller
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
            $fabricante = Fabricante::where('nome_fabricante', 'LIKE', "%$keyword%")
				->orWhere('obs_fabricante', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $fabricante = Fabricante::paginate($perPage);
        }

        return view('admin.fabricante.index', compact('fabricante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fabricante.create');
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
			'nome_fabricante' => 'required|max:120'
		]);
        $requestData = $request->all();
        
        Fabricante::create($requestData);

        Session::flash('flash_message', 'Fabricante added!');

        return redirect('admin/fabricante');
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
        $fabricante = Fabricante::findOrFail($id);

        return view('admin.fabricante.show', compact('fabricante'));
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
        $fabricante = Fabricante::findOrFail($id);

        return view('admin.fabricante.edit', compact('fabricante'));
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
			'nome_fabricante' => 'required|max:120'
		]);
        $requestData = $request->all();
        
        $fabricante = Fabricante::findOrFail($id);
        $fabricante->update($requestData);

        Session::flash('flash_message', 'Fabricante updated!');

        return redirect('admin/fabricante');
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
        Fabricante::destroy($id);

        Session::flash('flash_message', 'Fabricante deleted!');

        return redirect('admin/fabricante');
    }
}
