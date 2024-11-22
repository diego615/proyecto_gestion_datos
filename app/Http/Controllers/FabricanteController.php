<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FabricanteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $fabricantes = Fabricante::paginate();

        return view('fabricante.index', compact('fabricantes'))
            ->with('i', ($request->input('page', 1) - 1) * $fabricantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $fabricante = new Fabricante();

        return view('fabricante.create', compact('fabricante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FabricanteRequest $request): RedirectResponse
    {
        Fabricante::create($request->validated());

        return Redirect::route('fabricantes.index')
            ->with('success', 'Fabricante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $fabricante = Fabricante::find($id);

        return view('fabricante.show', compact('fabricante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $fabricante = Fabricante::find($id);

        return view('fabricante.edit', compact('fabricante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FabricanteRequest $request, Fabricante $fabricante): RedirectResponse
    {
        $fabricante->update($request->validated());

        return Redirect::route('fabricantes.index')
            ->with('success', 'Fabricante updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Fabricante::find($id)->delete();

        return Redirect::route('fabricantes.index')
            ->with('success', 'Fabricante deleted successfully');
    }
}
