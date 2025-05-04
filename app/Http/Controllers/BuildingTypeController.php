<?php

namespace App\Http\Controllers;

use App\Models\BuildingType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BuildingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => BuildingType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:building_types|max:255'
        ]);

        $buildingType = BuildingType::create($validated);

        return response()->json(['data' => $buildingType]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BuildingType $buildingType)
    {
        return response()->json(['data' => $buildingType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BuildingType $buildingType)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('building_types')->ignore($buildingType->getKey())
            ]
        ]);

        $buildingType->name = $request->get('name');
        $buildingType->save();

        return response()->json(['data' => $buildingType]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuildingType $buildingType)
    {
        $buildingType->delete();

        return response()->json(['message' => 'Building Type deleted successfully.']);
    }
}
