<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ClientePostRequest;


class ClienteRestController extends Controller
{
    public function index(){
        $clientes=cliente::all();
        return response()->json($clientes,Response::HTTP_OK);
    }

    public function store(ClientePostRequest $request){
        $cliente=cliente::create($request->all());
        return response()->json([
            'message'=>'Registro creado satisfactoriamente',
            'cliente'=>$cliente
        ],Response::HTTP_CREATED);
    }
    public function update(ClientePostRequest $request, $cliente){
        $cliente=cliente::find($cliente);
        $cliente->update($request->only('id_Region','firstName','LastName','dni','email','telefono','date_at','status'));
        return response()->json([
            'message'=>'Registro actualizado satisfactoriamente',
            'cliente'=>$cliente
        ],Response::HTTP_CREATED);
    }
    public function destroy($cliente){
        $cliente=cliente::find($cliente);
        $cliente->delete();
        return response()->json([
            'message'=>'Registro eliminado satisfactoriamente'
        ],Response::HTTP_OK);
    }
}
