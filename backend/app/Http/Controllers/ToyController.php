<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Brand;
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

        $toys = $query->get();

        return $toys->map(function ($toy) {
            return [
                'id'              => $toy->id,
                'brand_name'      => optional($toy->brand)->brand_name,
                'toy_name'        => $toy->toy_name,
                'toy_description' => $toy->toy_description,
                'toy_price'       => $toy->toy_price,
            ];
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Toy $toy)
    {
        $toy->load('brand');
        return [
        'brand_name' => optional($toy->brand)->brand_name,
        'toy_name' => $toy->toy_name,
        'toy_description' => $toy->toy_description,
        'toy_price' => $toy->toy_price,
        'm_image_url' => $toy->m_image_url,
    ];
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $brand = Brand::where('brand_name', $request->input('brand_name'))->first();

        if (!$brand) {
            return response()->json(['error' => 'Brand not found'], 404);
        }

        $toy = Toy::create([
            'toy_name' => $request->input('toy_name'),
            'brand_name' => $brand->id,
            'toy_description' => $request->input('toy_description'),
            'toy_price' => $request->input('toy_price'),
        ]);

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

        if ($request->has('brand_name')) { 
                $toy->toy_brand = $request->input('brand_name');
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
