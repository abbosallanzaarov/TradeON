<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use App\Interfaces\IAddressRepository;

class AdressController extends Controller
{
    public function __construct(protected IAddressRepository $addressRepository)
    {
    $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return response()->json([
            'success'=> true,
            'data' => $this->addressRepository->getAllAddress()
        ]);
    }

    public function store(StoreAdressRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Adress $adress)
    {
        //
    }


    public function update(UpdateAdressRequest $request, Adress $adress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adress $adress)
    {
        //
    }
}
