<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Visitor;
use App\participantsScore;
use App\SfHfParticipant;
use App\adminTransactionLog;

class AdminController extends Controller
{
    public function home() {
        return view('admin/index');
    }

    public function showStatisticScoreDeveloper() {
        $developers = participantsScore::sortable()->paginate(999);
        return view('admin/statisticScoreDeveloper')->with(compact('developers'));
    }

    public function showStatisticDeveloper() {
        $developers = SfHfParticipant::sortable()->paginate(999);
        return view('admin/statisticDeveloper')->with(compact('developers'));
    }

    public function showStatisticVisitor() {
        $visitors = Visitor::sortable()->paginate(999);
        return view('admin/statisticVisitor')->with(compact('visitors'));
    }

    public function showProfile() {
        $admin = Auth::user()->id;

        return view('admin/profile')->with(compact('admin'));
    }

    public function showGuidelines() {
        return view('admin/guidelines');
    }

    ///fun reward - Pong
    public function showPong() {
        return view('admin/funreward/pong');
    }

    public function pong(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $user_id = Auth::user()->id;
        $visitor = Visitor::where('username', $request->username)->first();

        if ($visitor == null)
        {
            return back()->with('status', 'invalid');
        }

        if ($visitor->point < 350)
        {
            return back()->with('status', 'notYet');
        }

        $visitor->point -= 350;
        $visitor->save();

        adminTransactionLog::create([
            'admin_id' => $user_id,
            'visitor_id' => $visitor->id,
            'point' => '-350',
            'event_name' => 'LuckyPong'
        ]);

        return back()->with('status', 'success');
    }
    
    ///sticker
    public function showSticker() {
        return view('admin/funreward/sticker');
    }

    public function sticker(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $user_id = Auth::user()->id;
        $visitor = Visitor::where('username', $request->username)->first();

        if ($visitor == null)
        {
            return back()->with('status', 'invalid');
        }

         ///ganti event_name
         $visitor_log_check = adminTransactionLog::where('visitor_id', $visitor->id)->where('event_name', 'GetSticker')->first();

         if ($visitor_log_check)
         {
             return back()->with('status', 'haveDone');
         }
        
        if ($visitor->point < 350)
        {
            return back()->with('status', 'notYet');
        }

        $visitor->point -= 350;
        $visitor->save();

        adminTransactionLog::create([
            'admin_id' => $user_id,
            'visitor_id' => $visitor->id,
            'point' => '-350',
            'event_name' => 'GetSticker'
        ]);

        return back()->with('status', 'success3');
    }

    ///point challenge
    //gameUi
    public function showGameUi() {
        return view('admin/pointchallenge/gameUi');
    }

    public function gameUi(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $user_id = Auth::user()->id;
        $visitor = Visitor::where('username', $request->username)->first();

        if ($visitor == null)
        {
            return back()->with('status', 'invalid');
        }

        ///ganti event_name
        $visitor_log_check = adminTransactionLog::where('visitor_id', $visitor->id)->where('event_name', 'GameUi')->first();

        if ($visitor_log_check)
        {
            return back()->with('status', 'haveDone');
        }

        ///ganti point
        $visitor->point += 100;
        $visitor->save();

        ///ganti point, event_name
        adminTransactionLog::create([
            'admin_id' => $user_id,
            'visitor_id' => $visitor->id,
            'point' => '+100',
            'event_name' => 'GameUi'
        ]);

        return back()->with('status', 'success2');
    }

    //ig
    public function showIG() {
        return view('admin/pointchallenge/ig');
    }

    public function ig(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $user_id = Auth::user()->id;
        $visitor = Visitor::where('username', $request->username)->first();

        if ($visitor == null)
        {
            return back()->with('status', 'invalid');
        }

        ///ganti event_name
        $visitor_log_check = adminTransactionLog::where('visitor_id', $visitor->id)->where('event_name', 'FollowIG')->first();

        if ($visitor_log_check)
        {
            return back()->with('status', 'haveDone');
        }

        ///ganti point
        $visitor->point += 100;
        $visitor->save();

        ///ganti point, event_name
        adminTransactionLog::create([
            'admin_id' => $user_id,
            'visitor_id' => $visitor->id,
            'point' => '+100',
            'event_name' => 'FollowIG'
        ]);

        return back()->with('status', 'success2');
    }

    //photobooth
    public function showPhotobooth() {
        return view('admin/pointchallenge/photobooth');
    }

    public function photobooth(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:12|string'
        ]);

        $user_id = Auth::user()->id;
        $visitor = Visitor::where('username', $request->username)->first();

        if ($visitor == null)
        {
            return back()->with('status', 'invalid');
        }

        ///ganti event_name
        $visitor_log_check = adminTransactionLog::where('visitor_id', $visitor->id)->where('event_name', 'Photobooth')->first();

        if ($visitor_log_check)
        {
            return back()->with('status', 'haveDone');
        }

        ///ganti point
        $visitor->point += 50;
        $visitor->save();

        ///ganti point, event_name
        adminTransactionLog::create([
            'admin_id' => $user_id,
            'visitor_id' => $visitor->id,
            'point' => '+50',
            'event_name' => 'Photobooth'
        ]);

        return back()->with('status', 'success2');
    }

    //sing
    // public function showSing() {
    //     return view('admin/pointchallenge/sing');
    // }

    // public function sing(Request $request) {
    //     $request->validate([
    //         'username' => 'required|min:5|max:12|string'
    //     ]);

    //     $user_id = Auth::user()->id;
    //     $visitor = Visitor::where('username', $request->username)->first();

    //     if ($visitor == null)
    //     {
    //         return back()->with('status', 'invalid');
    //     }

    //     ///ganti event_name
    //     $visitor_log_check = adminTransactionLog::where('visitor_id', $visitor->id)->where('event_name', 'Sing')->first();

    //     if ($visitor_log_check)
    //     {
    //         return back()->with('status', 'haveDone');
    //     }

    //     ///ganti point
    //     $visitor->point += 150;
    //     $visitor->save();

    //     ///ganti point, event_name
    //     adminTransactionLog::create([
    //         'admin_id' => $user_id,
    //         'visitor_id' => $visitor->id,
    //         'point' => '+150',
    //         'event_name' => 'Sing'
    //     ]);

    //     return back()->with('status', 'success2');
    // }
}
