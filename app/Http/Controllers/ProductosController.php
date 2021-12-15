<?php

namespace App\Http\Controllers;

use App\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {

        return view('producto.articulos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function mostrar(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function editar(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function eliminar(productos $productos)
    {
        //
    }

    public function categoria_listar()
    {
        return view('categoria.categorias');
    }

    public function categoria_crear()
    {

    }

    public function categoria_eliminar()
    {

    }

    public function categoria_editar()
    {

    }

    public function categoria_guardar()
    {

    }

    public function categoria_actualizar()
    {

    }
    public function categoria_mostrar()
    {

    }
}
