<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\names;
use App\time;
use DateTime;
use Carbon\Carbon;

class time_tracker_controller extends Controller
{
    public function retrieve_names(){
        $names = names::all();
        return view('timetracker' , compact('names'));
    }

    public function getuserID(Request $request){
        $id = names::get('id')->where('name',$request->name);
        return $id;
    }

    public function clockin(){
        // $now = new DateTime();
        // dd($now);
        // $time = $now->getTimestamp();
        // return view('timetracker', compact('time'));

        $timein = Carbon::now();
        // dd($timein);
        $diff = $timein->created_at->diffForHumans(null, true, true, 2);
        // dd($diff);
        echo str_replace(['h', 'm'], ['hrs', 'mins'], $diff);
    }

    public function clockout(){
        $now = new DateTime();
        $time = $now->getTimestamp();
        return view('timetracker', compact('time'));
    }

    public function start_break(){
        $now = new DateTime();
        $time = $now->getTimestamp();
        return view('timetracker', compact('time'));
    }

    public function end_break(){
        $now = new DateTime();
        $time = $now->getTimestamp();
        return view('timetracker', compact('time'));
    }

    public function insertTime(){
        $userId = $this->getUserID($request->name);
        $clockIn = $this->clockin();
        $start_break = $this->start_break();
        $end_break = $this->end_break();
        $clockout = $this->clockout();
        time::create([
            'name_id' => $userId,
            'clock_in' => $clockIn,
            'start_break' => $start_break,
            'start_break' => $end_break,
            'clockout' => $clockout,
        ]);
    }
   
}
