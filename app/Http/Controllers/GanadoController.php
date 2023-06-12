<?php

namespace App\Http\Controllers;

use App\Models\Ganado;
use Illuminate\Http\Request;

/**
 * Class GanadoController
 * @package App\Http\Controllers
 */
class GanadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ganados = Ganado::paginate();

        return view('ganado.index', compact('ganados'))
            ->with('i', (request()->input('page', 1) - 1) * $ganados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ganado = new Ganado();
        return view('ganado.create', compact('ganado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ganado::$rules);

        $ganado = Ganado::create($request->all());

        return redirect()->route('ganados.index')
            ->with('success', 'Ganado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ganado = Ganado::find($id);

        return view('ganado.show', compact('ganado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ganado = Ganado::find($id);

        return view('ganado.edit', compact('ganado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ganado $ganado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ganado $ganado)
    {
        request()->validate(Ganado::$rules);

        $ganado->update($request->all());

        return redirect()->route('ganados.index')
            ->with('success', 'Ganado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ganado = Ganado::find($id)->delete();

        return redirect()->route('ganados.index')
            ->with('success', 'Ganado deleted successfully');
    }
}
