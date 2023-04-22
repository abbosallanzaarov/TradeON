<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use App\Http\Resources\SellerResource;
use App\Interfaces\ISellerRepository;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct(protected ISellerRepository $sellerRepository)
    {
        $this->middleware('auth:sanctum');
    }
    public function index()
    {

        return api_response(SellerResource::collection($this->sellerRepository->getAllData()), true ,200);
    }

    public function store(Request $request)
    {
        return api_response($this->sellerRepository->add($request->all()), true ,200);
    }

    public function update(UpdateSellerRequest $request, Seller $seller)
    {
        //
    }

    public function destroy(Seller $seller)
    {
        //
    }
}
