<?php

namespace App\Http\Controllers;

use App\Models\Vacunadet;
use Illuminate\Http\Request;

/**
 * Class VacunadetController
 * @package App\Http\Controllers
 */
class VacunadetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacunadets = Vacunadet::paginate();

        return view('vacunadet.index', compact('vacunadets'))
            ->with('i', (request()->input('page', 1) - 1) * $vacunadets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacunadet = new Vacunadet();
        return view('vacunadet.create', compact('vacunadet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vacunadet::$rules);

        $vacunadet = Vacunadet::create($request->all());

        return redirect()->route('vacunadets.index')
            ->with('success', 'Vacunadet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacunadet = Vacunadet::find($id);

        return view('vacunadet.show', compact('vacunadet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacunadet = Vacunadet::find($id);

        return view('vacunadet.edit', compact('vacunadet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vacunadet $vacunadet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacunadet $vacunadet)
    {
        request()->validate(Vacunadet::$rules);

        $vacunadet->update($request->all());

        return redirect()->route('vacunadets.index')
            ->with('success', 'Vacunadet updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vacunadet = Vacunadet::find($id)->delete();

        return redirect()->route('vacunadets.index')
            ->with('success', 'Vacunadet deleted successfully');
    }
}
