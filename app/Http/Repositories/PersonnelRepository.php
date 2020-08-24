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
            $query->where('date', '=', date('Y-m-d'));
        }, 'schedules.patients'])->whereHas('schedules', function($query) {
            $query->where('date', '=', date('Y-m-d'));
        })->get();
    }

    public function fetchPersonnelsThatHasScheduleByDate($request)
    {
        return $this->personnel->with(['schedules' => function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        }, 'schedules.patients'])->whereHas('schedules', function($query) use ($request) {
            $query->where('date', '=', date('Y-m-d', strtotime($request['date'])));
        })->get();
    }

    public function fetchAvailablePersonnels($date)
    {
        return $this->personnel->whereNotIn('id', function($query) use ($date) {
            $query->select('personnel_id')->from('personnel_schedule')
            ->whereIn('schedule_id', function($schedule) use ($date) {
                $schedule->select('id')->from('schedules')
                ->where('date', date('Y-m-d', strtotime($date)))
                ->where('time_from', '>=', $date['time_from'])
                ->where('time_to', '<=', $date['time_to']);
            });
        })->get();
        // select * from personnels
        // where id not in (select personnel_id from personnel_schedule
        // where schedule_id in (select id from schedules
        // where time_from >= '8:00'
        // and time_to <= '11:00'
        // and date = '2020-08-23'))
    }
}