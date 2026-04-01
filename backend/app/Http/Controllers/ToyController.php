<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $toy_brand = $request->input('toy_name', '');
        $brandName = $request->input('brand_name', '');

        $toysQuery = Toy::query();

        if ($brandName !== null) {
            $toysQuery->where('toy_brand', '=', $brandName);
        }

        if (! empty($toy_b)) {
            $toysQuery->whereHas('brand', function ($brandQuery) use ($toy_brand) {
                $brandQuery->where('name', 'LIKE', '%' . $toy_brand . '%');
            });
        }
        $toysQuery->with('brand');
        $toys = $toysQuery->get();
        return $toys;
    }

    /**
     * Display the specified resource.
     */
    public function show(Toy $toy)
    {
        $toy->load('brand');
        return $toy;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $toy = $request->input('toy_name');
        $toy_brand = $request->input('brand_name', null);

        $toy = Toy::make([
            'toy_name' => $request->input('toy_name'),
            'toy_description' => $request->input('toy_description'),
            'toy_price' => $request->input('toy_price'),
            'toy_brand' => $request->input('toy_brand'),
        ]);

        $toy->brand()->associate($toy_brand);
        $toy->save();

        return $toy;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toy $toy)
    {
        if ($request->has('toy_name')) { 
            $toy->toy_name = $request->input('toy_name');
            }

        if ($request->has('toy_description')) { 
                $toy->toy_description = $request->input('toy_description');
            }

        if ($request->has('toy_price')) { 
                $toy->toy_price = $request->input('toy_price');
            }

        if ($request->has('toy_brand')) { 
                $toy->toy_brand = $request->input('toy_brand');
            }

        $toy->save();

        return $toy;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toy $toy)
    {
        $toy->delete();
    }
}
