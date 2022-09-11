<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empresa;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Empresa::all();

        return view('formulario.index',compact('data'));
    }


    public function create()
    {
        return view('formulario.create');

    }//


    public function store(Request $request)
    {
        Empresa::create($request->all());

    }

    public function show($id)
    {
    }


    public function edit($id)
    {
        $data=Empresa::find($id)->first();
        return view('formulario.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();
        unset($input['_method']);
        unset($input['_token']);
        Empresa::where('id',$id)->update($input);
        return redirect()->route('formulario.index');
    }


    public function destroy($id)
    {
       Empresa::destroy($id);
       return redirect()->route('formulario.index');
    }

}
