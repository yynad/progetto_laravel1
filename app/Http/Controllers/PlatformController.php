<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Http\Requests\StorePlatformRequest;
use App\Http\Requests\UpdatePlatformRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PlatformController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return [
            new Middleware('auth', only: ['create'])
        ];
    }
    public function index()
    {
        $platforms = Platform::all();
        return view('platform.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('platform.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlatformRequest $request)
    {
    $platform = Platform::create([
        'name' => $request->name,
        'description' => $request->description,
        'logo' => $request->file('logo')->store('logos', 'public')
    ]);
    return redirect()->route('platform.index')->with('success', 'Piattaforma aggiunta con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        return view('platform.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlatformRequest $request, Platform $platform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        //
    }
}
