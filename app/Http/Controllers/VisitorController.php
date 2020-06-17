<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Arr;
use App\userControl;
use App\SfHfParticipant;
use App\participantsScore;
use App\Visitor;
use App\Plot;
use App\visitorTransactionLog;
use App\participantTransactionLog;

class VisitorController extends Controller
{
    public function home(){
        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $visitor_id = $userControl->control_id;
        $visitor = Visitor::where('id', $visitor_id)->first();
        $plots = Plot::all();
        $participants = array();

        /** 
         * X = kondisi visitor belum mendatangi stand dan mengikuti mini games dari developer     ==> $first
         * rate_review = kondisi visitor sudah mengikuti mini games tetapi belum menginput nilai  ==> $mid
         * V = kondisi visitor sudah mengikuti mini games dan menginput nilai ke developer (done) ==> $finale
        */

        $first = array();
        $mid = array();
        $finale = array();
        $i = 0;
        foreach($plots as $plot)
        {
            if ($visitor->plot == 1)
            {
                $participantss = SfHfParticipant::where('id', $plot->plot_a)->get();
                $participantss = Arr::flatten($participantss);
                $participants = array_merge($participants, $participantss);
            }
            elseif ($visitor->plot == 2)
            {
                $participantss = SfHfParticipant::where('id', $plot->plot_b)->get();
                $participantss = Arr::flatten($participantss);
                $participants = array_merge($participants, $participantss);
            }
            elseif ($visitor->plot == 3)
            {
                $participantss = SfHfParticipant::where('id', $plot->plot_c)->get();
                $participantss = Arr::flatten($participantss);
                $participants = array_merge($participants, $participantss);
            }
            elseif ($visitor->plot == 4)
            {
                $participantss = SfHfParticipant::where('id', $plot->plot_d)->get();
                $participantss = Arr::flatten($participantss);
                $participants = array_merge($participants, $participantss);
            }
            else{
            break;
            }
            ///log developer memberi point ke visitor
            $participant_log_check = participantTransactionLog::where('participant_id', $participants[$i]->id)->where('visitor_id', $visitor->id)->first();

            ///log visitor memberi nilai ke developer
            $visitor_log_check = visitorTransactionLog::where('visitor_id', $visitor->id)->where('participant_id', $participants[$i]->id)->first();

            ///check kondisi first
            ///visitor belum ikut mini games developer
            if (!$participant_log_check && !$visitor_log_check)
            {
                $first[$i] = 1;
                $mid[$i] = 0;
                $finale[$i] = 0;
            }
            ///check kondisi mid
            ///visitor sudah ikut mini games & visitor belum input nilai
            elseif ($participant_log_check && !$visitor_log_check)
            {
                $first[$i] = 0;
                $mid[$i] = 1;
                $finale[$i] = 0;
            }
            ///check kondisi finale
            ///visitor sudah ikut mini games & visitor sudah input nilai
            elseif ($participant_log_check && $visitor_log_check)
            {
                $first[$i] = 0;
                $mid[$i] = 0;
                $finale[$i] = 1;
            }
            ///kondisi upnormal
            ///visitor mencoba mengacaukan alur
            else
            {
                abort(403);
            }
            
            $i += 1;
        }
        return view('visitor/index')->with(compact('participants', 'visitor', 'first', 'mid', 'finale'));
    }

    public function showScoring($participant_id){
        $participant = SfHfParticipant::where('id', $participant_id)->first();
        if ($participant == null) {
            return redirect('visitor');
        }

        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $visitor_id = $userControl->control_id;
        $visitor = Visitor::where('id', $visitor_id)->first();

        ///log developer memberi point ke visitor
        $participant_log_check = participantTransactionLog::where('participant_id', $participant->id)->where('visitor_id', $visitor->id)->first();

        ///log visitor memberi nilai ke developer
        $visitor_log_check = visitorTransactionLog::where('visitor_id', $visitor->id)->where('participant_id', $participant->id)->first();        

        ///check kondisi first
        ///visitor belum ikut mini games developer
        if (!$participant_log_check && !$visitor_log_check)
        {
            return redirect(url('/visitor'))->with('status', 'notYet');
        }
        ///check kondisi mid
        ///visitor sudah ikut mini games & visitor belum input nilai
        elseif ($participant_log_check && !$visitor_log_check)
        {
            return view('/visitor/rate')->with('status', 'mid_state')->with(compact('participant'));
        }
        ///check kondisi finale
        ///visitor sudah ikut mini games & visitor sudah input nilai
        elseif ($participant_log_check && $visitor_log_check)
        {
            return redirect(url('/visitor'))->with('status', 'haveDone');
        }
        ///kondisi upnormal
        ///visitor mencoba mengacaukan alur
        else
        {
            return redirect(url('/visitor'))->with('status', 'invalid');
        }
    }

    public function scoring($participant_id, Request $request){
        if ($request->score <50 || $request->score >100)
        {
            return back();
        }

        $participant = SfHfParticipant::where('id', $participant_id)->first();
        // if ($participant == null) {
        //     return redirect('visitor');
        // }

        $scoring = participantsScore::where('participant_id', $participant->id)->first();
        // if ($scoring == null)
        // {
        //     return redirect('visitor');
        // }
        $scoring->visit_count += 1;
        $scoring->score_count += $request->score;
        $scoring->final_score = $scoring->score_count/$scoring->visit_count;
        $scoring->save();


        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $visitor_id = $userControl->control_id;
        $visitor = Visitor::where('id', $visitor_id)->first();

        ///ganti maksimalnya
        if ($visitor->state < 18) {
            $visitor->state += 1;
        }
        $visitor->save();

        visitorTransactionLog::create([
            'visitor_id' => $visitor->id,
            'participant_id' => $participant->id,
            'score' => $request->score
        ]);
        
        return redirect(url('/visitor'))->with('status', 'success');
    }


    public function showProfile() {
        $user_id = Auth::user()->id;
        $userControl = userControl::where('user_id', $user_id)->first();
        $visitor_id = $userControl->control_id;
        $visitor = Visitor::where('id', $visitor_id)->first();

        return view('visitor/profile')->with(compact('visitor'));
    }

    public function showGuidelines() {
        return view('visitor/guidelines');
    }
}
