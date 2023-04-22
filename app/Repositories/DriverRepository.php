<?php


namespace App\Repositories;


use App\Interfaces\IDriverRepository;
use App\Models\Driver;

class DriverRepository implements IDriverRepository
{
    public function __construct(private Driver $driver )
    {

    }
    public function getAllData()
    {
        return  $this->driver::where('user_id' , auth()->user()->id)->get();
    }
    public function add(array $data)
    {
        return $this->driver::create([
            'user_id'=> auth()->user()->id,
            'car_number'   => $data['car_number'],
            'desc'=> $data['desc'],
        ]);
    }
    public function updateDriverData(int $id, array $data )
    {

    }


}
