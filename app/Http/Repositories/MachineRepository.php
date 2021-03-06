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
    
    public function store($data)
    {
        try {
            return $this->machine->create($data);
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
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

    public function fetchMachinesByDate($request)
    {
        return $this->machine->with(['schedules' => function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])))->whereIsCancelled(0)->whereIsEditing(0);
        }])->get();
    }

    public function fetchMachinesThatHasSchedule()
    {
        return $this->machine->with(['schedules' => function($query) {
            $query->where('date', '=', date('Y-m-d'));
        }, 'schedules.patients'])->whereHas('schedules', function($query) {
            $query->where('date', '=', date('Y-m-d'));
        })->get();
    }

    public function fetchMachinesThatHasScheduleByDate($request)
    {
        return $this->machine->with(['schedules' => function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        }, 'schedules.patients'])->whereHas('schedules', function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        })->get();
    }
}