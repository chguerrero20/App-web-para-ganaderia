<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\Request;

/**
 * Class VacunaController
 * @package App\Http\Controllers
 */
class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunas = Vacuna::paginate();

        return view('vacuna.index', compact('vacunas'))
            ->with('i', (request()->input('page', 1) - 1) * $vacunas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacuna = new Vacuna();
        return view('vacuna.create', compact('vacuna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vacuna::$rules);

        $vacuna = Vacuna::create($request->all());

        return redirect()->route('vacunas.index')
            ->with('success', 'Vacuna created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacuna = Vacuna::find($id);

        return view('vacuna.show', compact('vacuna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacuna = Vacuna::find($id);

        return view('vacuna.edit', compact('vacuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vacuna $vacuna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacuna $vacuna)
    {
        request()->validate(Vacuna::$rules);

        $vacuna->update($request->all());

        return redirect()->route('vacunas.index')
            ->with('success', 'Vacuna updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vacuna = Vacuna::find($id)->delete();

        return redirect()->route('vacunas.index')
            ->with('success', 'Vacuna deleted successfully');
    }
}
