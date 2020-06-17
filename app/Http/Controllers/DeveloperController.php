<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\userControl;
use App\SfHfParticipant;
use App\participantsScore;
use App\Visitor;
use App\Plot;
use App\visitorTransactionLog;
use App\participantTransactionLog;

class DeveloperController extends Controller
{
    public function visitorInput() {
        return view('developer/index');
    }

    public function showScoring(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $visitor = Visitor::where('username', $request->username)->first();
        if ($visitor == null)
        {
            return redirect(url('/developer'))->with('status', 'invalid');
        }
        
        if ($visitor->state <= 5)
        {
            $plots = Plot::where('id', $visitor->state)->first();

            if ($visitor->plot == 1)
            {
                $plot = $plots->plot_a;
            }
            elseif ($visitor->plot == 2)
            {
                $plot = $plots->plot_b;
            }
            elseif ($visitor->plot == 3)
            {
                $plot = $plots->plot_c;
            }
            elseif ($visitor->plot == 4)
            {
                $plot = $plots->plot_d;
            }
            else
            {
                return redirect(url('/developer'));
            }

            $user_id = Auth::user()->id;
            $userControl = userControl::where('user_id', $user_id)->first();
            $developer_id = $userControl->control_id;
            $developer = SfHfParticipant::where('id', $developer_id)->first();
            
            $participant_log_check = participantTransactionLog::where('participant_id', $developer->id)->where('visitor_id', $visitor->id)->first();
        
            if ($participant_log_check)
            {
                return redirect(url('/developer'))->with('status', 'haveDone');
            }

            if ($developer->id == $plot)
            {
                return view('developer/rate')->with(compact('visitor'));
            }
            else
            {
                return redirect(url('/developer'))->with('status', 'notYet');
            }
        }
        else
        {
            $user_id = Auth::user()->id;
            $userControl = userControl::where('user_id', $user_id)->first();
            $developer_id = $userControl->control_id;
            $developer = SfHfParticipant::where('id', $developer_id)->first();
            
            $participant_log_check = participantTransactionLog::where('participant_id', $developer->id)->where('visitor_id', $visitor->id)->first();
        
            if ($participant_log_check)
            {
                return redirect(url('/developer'))->with('status', 'haveDone');
            }

            return view('developer/rate')->with(compact('visitor'));
        }
    }

    public function scoring($visitor_id, Request $request) {
        // $request->validate([
        //     'score' => 'required|min:30|max:100'
        //     ]);
        if ($request->score <50 || $request->score >100)
        {
            return back();
        }


        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $developer_id = $userControl->control_id;
        $developer = SfHfParticipant::where('id', $developer_id)->first();
        
        $visitor = Visitor::where('id', $visitor_id)->first();
        $participant_log_check = participantTransactionLog::where('participant_id', $developer->id)->where('visitor_id', $visitor->id)->first();
        
        if ($participant_log_check)
        {
            return redirect(url('/developer'))->with('status', 'haveDone');
        }

        $visitor->point += $request->score;
        $visitor->save();

        participantTransactionLog::create([
            'participant_id' => $developer->id,
            'visitor_id' => $visitor->id,
            'point' => $request->score
        ]);


        if ($developer->id == 8 ||
            $developer->id == 9 ||
            $developer->id == 10)
            {
                $scoring = participantsScore::where('participant_id', $developer->id)->first();
                // if ($scoring == null)
                // {
                //     return redirect('visitor');
                // }
                $scoring->visit_count += 1;
                $scoring->score_count = 0;
                $scoring->final_score = 0;
                $scoring->save();


                if ($visitor->state < 10) {
                    $visitor->state += 1;
                }
                $visitor->save();
        
                visitorTransactionLog::create([
                    'visitor_id' => $visitor->id,
                    'participant_id' => $developer->id,
                    'score' => 0
                ]);
            }


        return redirect(url('/developer'))->with('status', 'success');
    }




    public function showProfile() {
        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $developer_id = $userControl->control_id;
        $developer = SfHfParticipant::where('id', $developer_id)->first();
        $dev_score = participantsScore::where('participant_id', $developer->id)->first();

        return view('developer/profile')->with(compact('developer', 'dev_score'));
    }

    public function showGuidelines() {
        return view('developer/guidelines');
    }
}
