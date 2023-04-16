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
        return Adress::create([
            'user_id'=>auth()->user()->id,
            'home' => $address['home'],
            'region' => $address['region'],
            'district' => $address['district'],
            'street' => $address['street']
        ]);
    }
    public function updateAddress(int $addressId)
    {

    }
    public function deleteAddress(int $addressId)
    {

    }

}
