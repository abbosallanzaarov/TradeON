<?php

namespace App\Interfaces;
interface ISellerRepository
{
    public function getAllData();

    public function add(array $data);

    public function updateSeller(int $id , array $data);

}
