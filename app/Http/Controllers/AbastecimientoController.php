<?php

namespace App\Http\Controllers;

use App\Models\Abastecimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AbastecimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AbastecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $abastecimientos = Abastecimiento::paginate();

        return view('abastecimiento.index', compact('abastecimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $abastecimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $abastecimiento = new Abastecimiento();

        return view('abastecimiento.create', compact('abastecimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AbastecimientoRequest $request): RedirectResponse
    {
        Abastecimiento::create($request->validated());

        return Redirect::route('abastecimientos.index')
            ->with('success', 'Abastecimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $abastecimiento = Abastecimiento::find($id);

        return view('abastecimiento.show', compact('abastecimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $abastecimiento = Abastecimiento::find($id);

        return view('abastecimiento.edit', compact('abastecimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AbastecimientoRequest $request, Abastecimiento $abastecimiento): RedirectResponse
    {
        $abastecimiento->update($request->validated());

        return Redirect::route('abastecimientos.index')
            ->with('success', 'Abastecimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Abastecimiento::find($id)->delete();

        return Redirect::route('abastecimientos.index')
            ->with('success', 'Abastecimiento deleted successfully');
    }
}
