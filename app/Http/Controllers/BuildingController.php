<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();

        $data = [];

        foreach ($buildings as $building) {
            $data[] = [
                'address' => $building->address,
                'type' => $building->buildingType->name
            ];
        }

        return response()->json(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'building_type_id' => 'required|int',
            'address' => 'required|string|unique:buildings'
        ]);

        $building = Building::create($validated);

        return response()->json(['data' => $building]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        $building->type = $building->buildingType->name;

        unset($building->buildingType);

        return response()->json(['data' => $building]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Building $building)
    {
        $request->validate([
            'building_type_id' => 'required|int',
            'address' => [
                'required',
                'string',
                Rule::unique('buildings')->ignore($building->getKey())
            ]
        ]);

        $building->update([
            'building_type_id' => $request->get('building_type_id'),
            'address' => $request->get('address'),
        ]);

        return response()->json(['data' => $building]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Building $building)
    {
        $building->delete();

        return response()->json(['message' => 'Building deleted successfully.']);
    }
}
