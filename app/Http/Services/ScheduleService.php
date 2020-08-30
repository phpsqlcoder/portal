<?php

namespace App\Http\Services;

use App\Http\Repositories\MachineRepository;
use App\Http\Repositories\PatientRepository;
use App\Http\Repositories\PersonnelRepository;
use App\Http\Repositories\ScheduleRepository;

class ScheduleService {
    private $schedule_repository;
    private $patient_repository;
    private $personnel_repository;
    private $machine_repository;

    public function __construct(
        ScheduleRepository $schedule_repository, 
        PatientRepository $patient_repository,
        PersonnelRepository $personnel_repository,
        MachineRepository $machine_repository
        )
    {
        $this->schedule_repository = $schedule_repository;
        $this->patient_repository = $patient_repository;
        $this->personnel_repository = $personnel_repository;
        $this->machine_repository = $machine_repository;
    }

    public function store($data, $id = null)
    {
        // $patient = $this->patient_repository->getPatientsByName($data['patient']);
        // dd($id);
        $data['time_from'] = date("H:i", strtotime($data['time_from']));
        $data['time_to'] = date("H:i", strtotime($data['time_to']));
        
        // $data['patient'] = $patient[0];
        // dd($data);

        $schedule = $this->schedule_repository->store($data, $id);

        $schedule->personnels()->detach();

        $schedule->machines()->detach();

        foreach ($data['doctors'] as $key => $doctor) {
            $personnel = $this->personnel_repository->fetchPersonnel($doctor);

            $personnel->schedules()->attach($schedule);
        }

        foreach ($data['nurses'] as $key => $nurse) {
            $personnel = $this->personnel_repository->fetchPersonnel($nurse);

            $personnel->schedules()->attach($schedule);
        }

        foreach ($data['machines'] as $key => $machine) {
            $machine = $this->machine_repository->fetchMachine($machine);

            $machine->schedules()->attach($schedule);
        }

        return $schedule;
    }

    public function cancelSchedule($id)
    {
        return $this->schedule_repository->cancelSchedule($id);
    }

    public function editingSchedule($editing, $id)
    {
        $schedule = $this->schedule_repository->editingSchedule($id);

        if($editing) { 
            $schedule->is_editing = true;
        } else {
            $schedule->is_editing = false;
        }
        $schedule->save();
        return $schedule;
    }
}