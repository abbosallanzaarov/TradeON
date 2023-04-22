<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use App\Http\Resources\AddressResourse;
use App\Interfaces\IAddressRepository;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function __construct(protected IAddressRepository $addressRepository)
    {
        $this->middleware('auth:sanctum' );
    }

    public function index()
    {
        return api_response(AddressResourse::collection($this->addressRepository->getAllAddress()), true , 200);
    }

    public function store(StoreAdressRequest $request)
    {
    return api_response($this->addressRepository->createAddress($request->all()) , true , 200);
    }

    public function update(Request $request, Adress $address)
    {
        return api_response($this->addressRepository->updateAddress($address->id , $request->all()) , true, 201);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adress $address)
    {
        api_response($this->addressRepository->deleteAddress($address->id) , true , 204);
        return delete_response();
    }
}

