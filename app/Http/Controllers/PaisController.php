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
        $municipios = DB::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();
        return view('paises.new', ['municipios'=>$municipios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $pais = new Pais();
       $pais->pais_codi=$request->idCountry;
       $pais->pais_nomb=$request->nameCountry;
       $pais->pais_capi=$request->countryNationality;   
       $pais->save();

       $paises = DB::table('tb_pais')
       ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
       ->select('tb_pais.*',"tb_municipio.muni_nomb")
       ->get();
       return view('paises.index', ['paises' => $paises]);
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
        $pais=Pais::find($id);

        $municipios=DB::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();
        return view('paises.edit',['pais' => $pais, 'municipios' => $municipios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);

        $pais->pais_nomb = $request->nameCountry;
        $pais->pais_capi = $request->municipality;
        $pais->save();

        $paises = DB::table('tb_pais')
        ->join('tb_municipio', 'tb_pais.pais_capi', '=' ,'tb_municipio.muni_codi')
        ->select('tb_pais.*', "tb_municipio.muni_nomb")
        ->get();

        return view('paises.index',['paises' => $paises]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
}
