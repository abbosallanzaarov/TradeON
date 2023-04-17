<?php

namespace App\Interfaces;
interface IAddressRepository
{
    public function getAllAddress();

    public function createAddress(array $address);

    public function updateAddress(int $addressId , array $data);


    public function deleteAddress(int $addressId);
}
