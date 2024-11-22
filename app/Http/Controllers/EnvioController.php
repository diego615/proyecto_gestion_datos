<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EnvioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $envios = Envio::paginate();

        return view('envio.index', compact('envios'))
            ->with('i', ($request->input('page', 1) - 1) * $envios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $envio = new Envio();

        return view('envio.create', compact('envio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnvioRequest $request): RedirectResponse
    {
        Envio::create($request->validated());

        return Redirect::route('envios.index')
            ->with('success', 'Envio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $envio = Envio::find($id);

        return view('envio.show', compact('envio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $envio = Envio::find($id);

        return view('envio.edit', compact('envio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnvioRequest $request, Envio $envio): RedirectResponse
    {
        $envio->update($request->validated());

        return Redirect::route('envios.index')
            ->with('success', 'Envio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Envio::find($id)->delete();

        return Redirect::route('envios.index')
            ->with('success', 'Envio deleted successfully');
    }
}
