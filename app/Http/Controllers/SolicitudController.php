<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function lista_disponibles(){
        return view('solicitudes.disponibles');
    }

    public function lista_en_proceso(){
        return view('solicitudes.en-proceso');
    }

    public function lista_finalizados(){
        return view('solicitudes.finalizados');
    }

    public function lista(){
        return view('solicitudes.lista');
    }

    public function solicitudes_asignadas(){
        return view('solicitudes.solicitudes-asignadas');
    }

    public function cambiar_estado(Solicitud $solicitud){
        return view('solicitudes.cambiar-estado',[
            'solicitud' =>$solicitud
        ]);
    }
    

    public function asignar(Solicitud $solicitud){
        return view('solicitudes.asignar',[
            'solicitud' =>$solicitud
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Solicitud $solicitud)
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Solicitud $solicitud)
    {
        return view('solicitudes.index',[
           'solicitudes' => $solicitud,
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        $this->authorize('update',$solicitud);
        return view('solicitudes.edit',[
            'solicitud' =>$solicitud
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
