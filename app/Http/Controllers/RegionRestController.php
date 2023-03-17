<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\RegionPostRequest;

class RegionRestController extends Controller
{
    public function index(){
        $regions=region::all();
        return response()->json($regions,Response::HTTP_OK);
    }

    public function store(RegionPostRequest $request){
        $region=region::create($request->all());
        return response()->json([
            'message'=>'Registro creado satisfactoriamente',
            'region'=>$region
        ],Response::HTTP_CREATED);
    }
    public function update(RegionPostRequest $request, $region){
        $region=region::find($region);
        $region->update($request->only('name'));
        return response()->json([
            'message'=>'Registro actualizado satisfactoriamente',
            'region'=>$region
        ],Response::HTTP_CREATED);
    }
    public function destroy($region){
        $region=region::find($region);
        $region->delete();
        return response()->json([
            'message'=>'Registro eliminado satisfactoriamente'
        ],Response::HTTP_OK);
    }
}
