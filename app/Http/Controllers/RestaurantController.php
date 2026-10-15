<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $query = Restaurant::query();

        $allowedFields = ['Customer_name', 'Order'];

        foreach ($allowedFields as $field) {
            if ($request->has($field)) {
                $query->where($field, 'like', '%' . $request->input($field) . '%');
            }
        }

        return response()->json($query->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Customer_ID'   => 'required|integer',
            'Customer_name' => 'required|string|max:255',
            'Order'         => 'required|string|max:255',
            'Payment'       => 'numeric', // optional or required based on your preference
        ]);

        $restaurant = Restaurant::create($validated);

        return response()->json($restaurant, 201); // Returns 201 Created as required for #5
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($restaurant, 200);
    }

    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $validated = $request->validate([
            'Customer_ID'   => 'sometimes|integer',
            'Customer_name' => 'sometimes|string|max:255',
            'Order'         => 'sometimes|string|max:255',
            'Payment'       => 'sometimes|numeric',
        ]);

        $restaurant->update($validated);

        return response()->json($restaurant, 200);
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $restaurant->delete();

        return response()->json(null, 204); // Returns 204 No Content as required for #10
    }
}