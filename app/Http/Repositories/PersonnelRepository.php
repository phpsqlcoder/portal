<?php

namespace App\Http\Repositories;

use App\Personnel;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class PersonnelRepository {
    private $personnel;

    public function __construct(Personnel $personnel)
    {
        $this->personnel = $personnel;
    }

    public function fetchAll()
    {
        return $this->personnel->all();
    }

    public function store($data)
    {
        try {
            return $this->personnel->create([
                'name' => $data['name'],
                'personnel_type' => $data['personnel_type'],
                'biometric_id' => 100
            ]);
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
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
        return $this->personnel->with(['schedules' => function($query) {
            $query->with(['machines', 'personnels'])->where('date', '=', date('Y-m-d'))->whereIsCancelled(0);
        }, 'schedules.patients'])->whereHas('schedules', function($query) {
            $query->where('date', '=', date('Y-m-d'))->whereIsCancelled(0);
        })->get();
    }

    public function fetchPersonnelsThatHasScheduleByDate($request)
    {
        return $this->personnel->with(['schedules' => function($query) use ($request) {
            $query->with('machines', 'personnels')->where('date', '=', date('Y-m-d', strtotime($request['date'])))->whereIsCancelled(0);
        }, 'schedules.patients'])->whereHas('schedules', function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])))->whereIsCancelled(0);
        })->get();
    }

    public function ScheduleByDate($request)
    {
        return $this->personnel->with(['schedules' => function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])))->whereIsCancelled(0)->whereIsEditing(0);
        }])->get();
    }

    public function fetchAvailablePersonnels($date)
    {
        $time_from = strtotime($date['time_from']);
        $time_to = strtotime($date['time_to']);

        $personnels = $this->ScheduleByDate($date);

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
}