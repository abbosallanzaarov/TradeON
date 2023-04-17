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
        return response()->json([
            'success'=> true,
            'data' => AddressResourse::collection($this->addressRepository->getAllAddress())
        ]);
    }

    public function store(StoreAdressRequest $request)
    {
        try {
            return response()->json([
                'success'=> true,
                'data' =>  $this->addressRepository->createAddress($request->all())
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Adress $adress)
    {
        //
    }


    public function update(Request $request, Adress $address)
    {
        try {
            return response()->json([
                'success'=> true,
                'data' =>  $this->addressRepository->updateAddress( $address->id , $request->all())
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage()
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adress $address)
    {
        try {
            $this->addressRepository->deleteAddress( $address->id );
            return response()->json([
                'success'=> true,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage()
            ]);
        }
    }
}

