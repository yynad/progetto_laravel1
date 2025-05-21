<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePlatformRequest;
use App\Http\Requests\UpdatePlatformRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;


namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePlatformRequest;
use App\Http\Requests\UpdatePlatformRequest;

class PlatformController extends Controller
{
    public function __construct()
    {
        // Applica il middleware 'auth' solo alle azioni create, edit, update, destroy
        $this->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
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
        'logo' => $request->file('logo')->store('logos', 'public'),
        'user_id' => auth()->id(), 
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
    return view('platform.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlatformRequest $request, Platform $platform)
    {
       $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    if ($request->hasFile('logo')) {
        if ($platform->logo) {
            Storage::delete($platform->logo);
        }

        $path = $request->file('logo')->store('platform_logos', 'public');
        $validatedData['logo'] = $path;
    }

    $platform->update($validatedData);

    return redirect()->route('platform.index')->with('message', 'Piattaforma aggiornata con successo!');
    }


    public function destroy(Platform $platform)
    {
        //
    }
}
