<?php

namespace App\Http\Services;

use App\Http\Repositories\PersonnelRepository;

class PersonnelService {
    private $personnel_repository;

    public function __construct(PersonnelRepository $personnel_repository)
    {
        $this->personnel_repository = $personnel_repository;
    }

    public function fetchAvailablePersonnels($date)
    {
        $date['date'] = date("Y-m-d", strtotime($date['date']));
        $date['time_from'] = date("H:i", strtotime($date['time_from']));
        $date['time_to'] = date("H:i", strtotime($date['time_to']));

        return $this->personnel_repository->fetchAvailablePersonnels($date);
    }
}