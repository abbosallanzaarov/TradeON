<?php

namespace App\Http\Controllers;

use App\Models\ProductCount;
use App\Http\Requests\StoreProductCountRequest;
use App\Http\Requests\UpdateProductCountRequest;

class ProductCountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCount $productCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCount $productCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCountRequest $request, ProductCount $productCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCount $productCount)
    {
        //
    }
}
