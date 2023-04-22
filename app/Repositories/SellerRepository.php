<?php

namespace App\Repositories;

use App\Interfaces\ISellerRepository;
use App\Models\Seller;

class SellerRepository implements ISellerRepository
{
    public function __construct(private Seller $sellerModel)
    {

    }
    public function getAllData()
    {
        return $this->sellerModel::where('user_id' , auth()->user()->id)->get();
    }
    public function add(array $data)
    {
        return $this->sellerModel::create([
            'user_id'=> auth()->user()->id,
            'organization_name'=> $data['organization_name'],
            'store_type'   => $data['store_type']
        ]);
    }
    public function updateSeller(int $id, array $data )
    {

    }
}
