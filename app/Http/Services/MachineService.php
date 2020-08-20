<?php

namespace App\Http\Services;

use App\Http\Repositories\MachineRepository;

class MachineService {
    private $machine_repository;

    public function __construct(MachineRepository $machine_repository)
    {
        $this->machine_repository = $machine_repository;
    }

    public function fetchAvailableMachines($request)
    {
        // dd(date("H:M", $request['time_from']));
        // dd($request);
        $new_time_from = strtotime($request['time_from']);
        $new_time_to = strtotime($request['time_to']);
        // dd(date("H", $new_time_from));
        $machines = $this->machine_repository->fetchAvailableMachines($new_time_from, $new_time_to);
    }
}