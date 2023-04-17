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
    public function updateAddress(int $addressId , array $data)
    {
        $update = Adress::find($addressId);
        return $update->update([
            'region' => $data['region'],
            'home'  => $data['home'],
            'street' => $data['street'],
            'district'=> $data['district'],
        ]);
    }
    public function deleteAddress(int $addressId)
    {
        $delete = Adress::find($addressId)->delete();
    }

}
