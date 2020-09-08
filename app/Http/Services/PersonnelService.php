<?php

namespace App\Http\Services;

use App\Http\Repositories\PersonnelRepository;
use Illuminate\Support\Facades\Storage;

class PersonnelService {
    private $personnel_repository;

    public function __construct(PersonnelRepository $personnel_repository)
    {
        $this->personnel_repository = $personnel_repository;
    }

    public function fetchAvailablePersonnels($date)
    {       
        $time_from = strtotime($date['time_from']);
        $time_to = strtotime($date['time_to']);

        $personnels = $this->personnel_repository->ScheduleByDate($date);

        $available_personnels = array();
        
        foreach ($personnels as $key => $personnel) {
            $personnel_is_available = true;
            foreach ($personnel['schedules'] as $schedule) {
                $from = strtotime($schedule['time_from']);
                $to = strtotime($schedule['time_to']);

                if($time_from >= $from && $time_from < $to) {
                    $personnel_is_available = false;
                    break;
                } else {
                    if($time_to > $from && $time_from < $from) {
                        $personnel_is_available = false;
                        break;
                    }
                }
            }
            if($personnel_is_available) {
                array_push($available_personnels, $personnel);
            }
        }
       return $available_personnels;
    }

    public function store($parameters)
    {
        $personnel = $this->personnel_repository->store($parameters);
        
        $this->storeImage($parameters, $personnel);

        return $personnel;
    }

    public function updateData($parameters, $personnel)
    {
        $this->personnel_repository->updateData($parameters, $personnel);
        return $this->storeImage($parameters, $personnel);
    }

    public function storeImage($parameters, $personnel)
    {
        if(is_uploaded_file($parameters['image'])) {
            return $personnel->update([
                'image' => $parameters['image']->store('profiles', 'public')
            ]);
        }
    }
}