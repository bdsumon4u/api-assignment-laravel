<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;
use App\Http\Resources\DogResource;
use App\Models\Dog;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::with('breed')->paginate(10);

        return DogResource::collection($dogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDogRequest $request)
    {
        $dog = Dog::create($request->validated());

        return DogResource::make($dog->load('breed'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        return DogResource::make($dog->load('breed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        $dog->update($request->validated());

        return DogResource::make($dog->load('breed'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();

        return response()->noContent();
    }
}
