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
        $time_from = strtotime($request['time_from']);
        $time_to = strtotime($request['time_to']);

        $machines = $this->machine_repository->fetchMachinesByDate($request);
        
        $available_machines = array();

        foreach ($machines as $key => $machine) {
            $machine_is_available = true;
            foreach ($machine['schedules'] as $schedule) {
                $from = strtotime($schedule['time_from']);
                $to = strtotime($schedule['time_to']);

                if($time_from >= $from && $time_from < $to) {
                    $machine_is_available = false;
                    break;
                } else {
                    if($time_to > $from && $time_from < $from) {
                        $machine_is_available = false;
                        break;
                    }
                }
            }
            if($machine_is_available) {
                array_push($available_machines, $machine);
            }
        }
        return $available_machines;
    }

    
}