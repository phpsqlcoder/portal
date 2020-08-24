<?php

namespace App\Http\Repositories;

use App\Schedule;
use Exception;
use Illuminate\Support\Facades\DB;

class ScheduleRepository {
    
    private $schedule;
    
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function store($data)
    {
        try {
            return Schedule::create([
                'patient_id' => $data['patient']->id,
                'date' => $data['date'],
                'time_from' => $data['time_from'],
                'time_to' => $data['time_to'],
                'procedure' => $data['procedure']
            ]);
        } catch (Exception $exception) {
            DB::rollBack();

            return $exception;
        }
    }

    public function fetchTodaySchedule()
    {
        try {
            return $this->schedule->with('personnels')->where('date', 'LIKE', date('Y-m-d'))->get();
        } catch (Exception $exception) {
            return $exception;
        }
    }
}