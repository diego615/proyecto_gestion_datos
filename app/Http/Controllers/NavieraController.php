<?php

namespace App\Http\Controllers;

use App\Models\Naviera;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\NavieraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NavieraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $navieras = Naviera::paginate();

        return view('naviera.index', compact('navieras'))
            ->with('i', ($request->input('page', 1) - 1) * $navieras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $naviera = new Naviera();

        return view('naviera.create', compact('naviera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NavieraRequest $request): RedirectResponse
    {
        Naviera::create($request->validated());

        return Redirect::route('navieras.index')
            ->with('success', 'Naviera created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $naviera = Naviera::find($id);

        return view('naviera.show', compact('naviera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $naviera = Naviera::find($id);

        return view('naviera.edit', compact('naviera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NavieraRequest $request, Naviera $naviera): RedirectResponse
    {
        $naviera->update($request->validated());

        return Redirect::route('navieras.index')
            ->with('success', 'Naviera updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Naviera::find($id)->delete();

        return Redirect::route('navieras.index')
            ->with('success', 'Naviera deleted successfully');
    }
}
