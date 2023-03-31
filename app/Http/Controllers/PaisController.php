<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $paises = Pais::all();
         $paises = DB::table('tb_pais')
         ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
         ->select('tb_pais.*', 'tb_municipio.muni_nomb')
         ->get();

        //   dd($paises);
        return view('paises.index', ['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      
    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
