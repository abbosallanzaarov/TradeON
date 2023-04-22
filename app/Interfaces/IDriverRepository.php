<?php

namespace App\Interfaces;
interface IDriverRepository
{
    public function getAllData();

    public function add(array $data);

    public function updateDriverData(int $id , array $data);

}
