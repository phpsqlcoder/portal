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

    public function store($data, $id = null)
    {
        try {
            return $this->schedule->updateOrCreate(
                ['id' => $id],
                [
                    'patient_id' => $data['patient']['id'],
                    'date' => $data['date'],
                    'time_from' => $data['time_from'],
                    'time_to' => $data['time_to'],
                    'procedure' => $data['procedure'],
                    'is_editing' => 0
                ]
            );
        } catch (Exception $exception) {
            DB::rollBack();

            return $exception;
        }
    }

    public function fetchTodaySchedule()
    {
        try {
            return $this->schedule->with('personnels')->where('date', 'LIKE', date('Y-m-d'))->whereIsCancelled(0)->get();
        } catch (Exception $exception) {
            return $exception;
        }
    }

    public function cancelSchedule($id)
    {
        try {
            return $this->schedule->findorfail($id)->update(['is_cancelled' => 1]);
        } catch (Exception $exception) {
            return $exception;
        }
    }

    public function disableEditing()
    {
        try {
            return $this->schedule->whereIsEditing(1)->update(['is_editing' => 0]);
        } catch (Exception $exception) {
            return $exception;
        }
    }

    public function editingSchedule($id)
    {
        try {
            return $this->schedule->findorfail($id);
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }
}