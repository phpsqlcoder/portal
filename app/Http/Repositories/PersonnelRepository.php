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

    public function updateImage($personnel, $image)
    {
        try {
            return $personnel->update([
                'image' => $image->store('profiles', 'public')
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

    public function toggleStatus($personnel)
    {
        try {
            $personnel->is_active = ($personnel->is_active == 'Active') ? 0 : 1;
            $personnel->save();

            return $personnel;
        } catch (Exception $exception) {
            DB::rollBack();

            return $exception;
        }
    }

    public function updateData ($request, $personnel)
    {
        try {
            return $personnel->update([
                'name' => $request['name'],
                'personnel_type' => $request['personnel_type'],
                'is_active' => ($request['is_active'] == 'Active') ? 1 : 0
            ]);
        } catch (Exception $exception) {
            DB::rollBack();

            return $exception;
        }
    }
}