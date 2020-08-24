<?php

namespace App\Http\Repositories;

use App\Machine;

class MachineRepository {
    private $machine;

    public function __construct(Machine $machine)
    {
        $this->machine = $machine;
    }

    public function fetchAll()
    {
        return $this->machine->all();
    }

    public function fetchMachine($machine)
    {
        return $this->machine->whereId($machine['id'])->first();
    }

    public function fetchAvailableMachines($from, $to)
    {
        $machines = $this->machine->with('schedules')->get();
        return $machines;
    }
}