<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use App\Http\Resources\BreedResource;
use App\Models\Breed;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breeds = Breed::paginate(10)->withQueryString();

        return BreedResource::collection($breeds);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        $breed = Breed::create($request->validated());

        return BreedResource::make($breed);
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        return BreedResource::make($breed);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $breed->update($request->validated());

        return BreedResource::make($breed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        $breed->delete();

        return response()->noContent();
    }
}
