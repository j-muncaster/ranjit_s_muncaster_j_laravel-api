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

        $toyName = $request->input('toy_name', '');
        $brandName = $request->input('brand_name', '');

        $query = Toy::with('brand');

        if ($toyName !== null) {
        $query->where('toy_name', 'like', '%' . $toyName . '%');
        }

        if (! empty($brandName)) {
            $query->whereHas('brand', function ($q) use ($brandName) {
                $q->where('brand_name', 'LIKE', '%' . $brandName . '%');
            });
        }
        
        return $query->get();
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

        return $toy->load('brand');
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

        return $toy->load('brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toy $toy)
    {
        $toy->delete();
    }
}
