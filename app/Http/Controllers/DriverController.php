<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use App\Interfaces\IDriverRepository;

class DriverController extends Controller
{

    public function __construct(protected IDriverRepository $driverRepository)
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return api_response($this->driverRepository->getAllData() , true , 200);
    }

    public function store(StoreDriverRequest $request)
    {
        dd('ddd');
        return api_response($this->driverRepository->add($request->all()) , true, 200);
    }
    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        //
    }
    public function destroy(Driver $driver)
    {
        //
    }
}
