<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CombustibleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CombustibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $combustibles = Combustible::paginate();

        return view('combustible.index', compact('combustibles'))
            ->with('i', ($request->input('page', 1) - 1) * $combustibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $combustible = new Combustible();

        return view('combustible.create', compact('combustible'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CombustibleRequest $request): RedirectResponse
    {
        Combustible::create($request->validated());

        return Redirect::route('combustibles.index')
            ->with('success', 'Combustible created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $combustible = Combustible::find($id);

        return view('combustible.show', compact('combustible'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $combustible = Combustible::find($id);

        return view('combustible.edit', compact('combustible'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CombustibleRequest $request, Combustible $combustible): RedirectResponse
    {
        $combustible->update($request->validated());

        return Redirect::route('combustibles.index')
            ->with('success', 'Combustible updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Combustible::find($id)->delete();

        return Redirect::route('combustibles.index')
            ->with('success', 'Combustible deleted successfully');
    }
}
