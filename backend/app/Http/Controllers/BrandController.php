<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return ['hello' => 'world'];

        $brandName = $request->query('brand_name', '');
        $brandDescription = $request->query('brand_description', '');
        $brandCountry = $request->query('brand_country', '');
        $brandImageUrl = $request->query('brand_image_url', '');

        $query = Brand::query();

        if (!empty($brandName)) {
            $query->where('brand_name', 'like', '%' . $brandName . '%');
        }

        if (!empty($brandDescription)) {
            $query->where('brand_description', 'like', '%' . $brandDescription . '%');
        }

        if (!empty($brandCountry)) {
            $query->where('brand_country', 'like', '%' . $brandCountry . '%');
        }

        if (!empty($brandImageUrl)) {
            $query->where('brand_country', 'like', '%' . $brandImageUrl . '%');
        }

        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $brand_name = $request->input('brand_name', null);

        $brand = Brand::make([
            'brand_name' => $request->input('brand_name'),
            'brand_description' => $request->input('brand_description'),
            'brand_country' => $request->input('brand_country'),
            'brand_image_url' => $request->input('brand_image_url'),
        ]);

        $brand->save();

        return $brand;
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return $brand;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        if ($request->has('brand_name')) { 
            $brand->brand_name = $request->input('brand_name');
            }

        if ($request->has('brand_description')) { 
                $brand->brand_description = $request->input('brand_description');
            }

        if ($request->has('brand_country')) { 
                $brand->brand_country = $request->input('brand_country');
            }

        if ($request->has('brand_image_url')) { 
                $brand->brand_country = $request->input('brand_image_url');
            }

        $brand->save();

        return $brand;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
    }
}
