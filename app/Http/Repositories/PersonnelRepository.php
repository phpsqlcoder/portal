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
            $query->with('machines')->where('date', '=', date('Y-m-d'));
        }, 'schedules.patients'])->whereHas('schedules', function($query) {
            $query->where('date', '=', date('Y-m-d'));
        })->get();
    }

    public function fetchPersonnelsThatHasScheduleByDate($request)
    {
        return $this->personnel->with(['schedules' => function($query) use ($request) {
            $query->with('machines')->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        }, 'schedules.patients'])->whereHas('schedules', function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        })->get();
    }

    public function fetchAvailablePersonnels($date)
    {
        $time_from = strtotime($date['time_from']);
        $time_to = strtotime($date['time_to']);
        $end = 17;
        $test = $this->personnel->with('schedules')->get();
        $available_personnels = array();
        foreach ($test as $key => $personnel) {
            $is_available = false;
            
            $count_schedules = count($personnel['schedules']);
            if($count_schedules == 0) {
                array_push($available_personnels, $personnel);
            } else {
                foreach ($personnel['schedules'] as $schedule) {
                

                    $from = strtotime($schedule['time_from']);
                    $to = strtotime($schedule['time_to']);

                    
    
                    // $a = $time_from < $to; // meaning naa ni schedule nga mas taas pa sa alas 9
                    // $b = $time_from <= $from; // true
                    // $c = $time_to <= $to;
                    // $d = 
                    
                    // if($c) {
                    //     $is_available = false;
                    //     break;
                    // }

                    // if(!$b && $a) {
                    //     $is_available = false;
                        
                    // } else {
                    //     // dd('available');
                    //     $is_available = true;
                    // }
    
    
    
    
                    // $test1 = $time_from >= strtotime($schedule['time_from']);
                    // $test = $time_from < strtotime($schedule['time_to']);
                    // $test2 = $time_to > strtotime($schedule['time_to']);
                    // // dd($test1, $test);
                    // if($test1 && $test && $test2) {
                    //     $is_available = false;
                    // } else {
                    //     dd($personnel);
                    //     $is_available = true;
                    // }
                    // $test1 = strtotime($time_to) >= strtotime($schedule['time_from']); // true
                    // $test2 = strtotime($time_from) >= strtotime($schedule['time_from']); // true
                    // $test3 = strtotime($time_to) >= strtotime($schedule['time_to']); // true
                    // $test4 = strtotime($time_from) < strtotime($schedule['time_to']); // true
    
                    // if(!$test1 || !$test2 || !$test3 || !$test4) {
    
                    // }
                    
    
                    // $result = strtotime($time_from) >= strtotime($schedule['time_from']); //true
                    // $result2 = strtotime($time_to) >= strtotime($schedule['time_to']); //true
                    // $result3 = strtotime($time_from) < strtotime($schedule['time_to']); //true
                    // dd($result2);
                }
                if($is_available) {
                    array_push($available_personnels, $personnel);
                }
            }
            
        }
        dd($available_personnels);

        // dd($available_personnels);
        // return $this->personnel->whereNotIn('id', function($query) use ($date) {
        //     $query->select('personnel_id')->from('personnel_schedule')
        //     ->whereIn('schedule_id', function($schedule) use ($date) {
        //         $schedule->select('id')->from('schedules')
        //         ->where('date', date('Y-m-d', strtotime($date)))
        //         ->where('time_from', '>=', $date['time_from'])
        //         ->where('time_to', '<=', $date['time_to']);
        //     });
        // })->get();
        // select * from personnels
        // where id not in (select personnel_id from personnel_schedule
        // where schedule_id in (select id from schedules
        // where time_from >= '8:00'
        // and time_to <= '11:00'
        // and date = '2020-08-23'))
    }
}