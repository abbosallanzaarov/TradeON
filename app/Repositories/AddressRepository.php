<?php


namespace App\Repositories;
use App\Interfaces\IAddressRepository;
use App\Models\Adress;

class AddressRepository implements IAddressRepository
{
    public function getAllAddress()
    {
        return Adress::where('user_id' , auth()->user()->id)->get();
    }
    public function createAddress(array $address)
    {

    }
    public function updateAddress(int $addressId)
    {

    }
    public function deleteAddress(int $addressId)
    {

    }

}
