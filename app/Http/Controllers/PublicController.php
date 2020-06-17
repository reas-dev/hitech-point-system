<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OpenTalkParticipant;
use App\SfHfParticipant;

class PublicController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
    public function createSoftwareFairParticipant(Request $request)
    {
        return redirect(url('/'))->with('status', 'closed');
        
        // $request->validate([
        //     'app_cat' => 'required|min:3|max:7',
        //     'project_title' => 'required|min:2|max:50',
        //     'school' => 'required|min:2|max:100',
        //     'lead_name' => 'required|min:2|max:50',
        //     'lead_student_id' => 'required|min:2|max:30',
        //     'member_name' => 'required|min:2|max:50',
        //     'member_student_id' => 'required|min:2|max:30',
        //     'phone' => 'required|min:8|max:14',
        //     'email' => 'required|min:10|max:50|email:rfc'
        // ]);

        // $participant = new SfHfParticipant;
        // $participant->event_cat = 'sf';
        // $participant->app_cat = $request->app_cat;
        // $participant->project_title = $request->project_title;
        // $participant->school = $request->school;
        // $participant->lead_name = $request->lead_name;
        // $participant->lead_student_id = $request->lead_student_id;
        // $participant->member_name = $request->member_name;
        // $participant->member_student_id = $request->member_student_id;
        // $participant->phone = $request->phone;
        // $participant->email = $request->email;

        // if ($participant->save()) {
        //     return redirect(url('/'))->with('status', 'success');
        // } else {
        //     return redirect(back())->withInput()->with('status', 'error');
        // }
    }
    public function createHardwareFairParticipant(Request $request)
    {
        return redirect(url('/'))->with('status', 'closed');
        
        // $request->validate([
        //     'hf_project_title' => 'required|min:2|max:50',
        //     'hf_school' => 'required|min:2|max:100',
        //     'hf_lead_name' => 'required|min:2|max:50',
        //     'hf_lead_student_id' => 'required|min:2|max:30',
        //     'hf_member_name' => 'required|min:2|max:50',
        //     'hf_member_student_id' => 'required|min:2|max:30',
        //     'hf_phone' => 'required|min:8|max:14',
        //     'hf_email' => 'required|min:10|max:50|email:rfc'
        // ]);

        // $participant = new SfHfParticipant;
        // $participant->event_cat = 'hf';
        // $participant->project_title = $request->hf_project_title;
        // $participant->school = $request->hf_school;
        // $participant->lead_name = $request->hf_lead_name;
        // $participant->lead_student_id = $request->hf_lead_student_id;
        // $participant->member_name = $request->hf_member_name;
        // $participant->member_student_id = $request->hf_member_student_id;
        // $participant->phone = $request->hf_phone;
        // $participant->email = $request->hf_email;

        // if ($participant->save()) {
        //     return redirect(url('/'))->with('status', 'success');
        // } else {
        //     return redirect(back())->withInput()->with('status', 'error');
        // }
    }
    public function createOpenTalkParticipant(Request $request)
    {
        // $last = OpenTalkParticipant::all()->last();
        // if ($last->id >= 139)
        // {
                return redirect(url('/'))->with('status', 'closed');
        // }
        // $request->validate([
        //     'ot_category' => 'required|min:3|max:10',
        //     'ot_name' => 'required|min:2|max:50',
        //     'ot_school' => 'nullable|min:2|max:100',
        //     'ot_student_id' => 'nullable|min:5|max:30',
        //     'ot_phone' => 'required|min:8|max:14',
        //     'ot_email' => 'required|min:10|max:50|email:rfc'
        // ]);

        // $participant = new OpenTalkParticipant;
        // $participant->category = $request->ot_category;
        // $participant->name = $request->ot_name;
        // $participant->school = $request->ot_school;
        // $participant->student_id = $request->ot_student_id;
        // $participant->phone = $request->ot_phone;
        // $participant->email = $request->ot_email;

        // if ($participant->save()) {
        //     return redirect(url('/'))->with('status', 'success');
        // } else {
        //     return redirect(back())->withInput()->with('status', 'error');
        // }
    }
}
