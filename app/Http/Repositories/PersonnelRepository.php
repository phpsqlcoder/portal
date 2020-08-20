<?php

namespace App\Http\Repositories;

use App\Personnel;

class PersonnelRepository {
    private $personnel;

    public function __construct(Personnel $personnel)
    {
        $this->personnel = $personnel;
    }

    public function fetchPersonnel($personnel)
    {
        return $this->personnel->whereId($personnel['id'])->first();
    }

    public function fetchAllDoctors()
    {
        return $this->personnel->wherePersonnelType('Doctor')->orderBy('name')->get();
    }

    public function fetchAllNurses()
    {
        return $this->personnel->wherePersonnelType('Nurse')->orderBy('name')->get();
    }

    public function fetchPersonnelsThatHasSchedule()
    {
        return $this->personnel->with(['schedules', 'schedules.patients'])->whereHas('schedules', function ($query) {
            $query->where('date', 'Like', date('Y-m-d'));
        })->get();
    }
}