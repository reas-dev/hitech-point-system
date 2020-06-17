@extends('layouts.visitorLayout')
@section('title', 'Developer List')
@section('content')
<div class="card">
    <div class="card-content center">
        <div class="row">
            @if ($status == 'first_state')
            <p class="flow-text secondary-text">Ups!<br>Kamu melewati tahap sebelumnya.<br>Kamu belum mengikuti event dari developer ini.<br>Silahkan kembali lagi nanti.</p>
            <i class="large material-icons mt-3 secondary-text">info_outline</i>
            <a class="btn waves-effect waves-light mt-3 btn-maxwidth" href="/visitor">back</a>
            @elseif ($status == 'mid_state')
            <div class="col s12">
                <h5 class="left secondary-text">{{$participant->project_title}}</h5>
            </div>
            <div class="col s12">
                <p class="left-align">Beri nilai untuk project developer.</p>
            </div>
            <form action="{{ url('visitor/rate') ."/". $participant->id }}" method="post">
                @csrf
                    <div class="input-field col s12">
                    <p class="range-field">
                        <input type="range" id="score" name="score" min="50" max="100"/>
                    </p>
                    <p id="info" class="left secondary-text">nilai : 75</p>
                </div>
                <div class="col s11">
                    <a class="btn waves-effect waves-light btn-secondary col s6" href="/visitor">back</a>
                    <button class="btn waves-effect waves-light col s6 push-s1">submit</button>
                </div>
            </form>
            @elseif ($status == 'finale_state')
            <p class="flow-text secondary-text">Ups!<br>Kamu sudah melalui tahap ini<br>Kamu sudah memberi menilai kepada developer ini.<br>Silahkan kembali.</p>
            <i class="large material-icons mt-3 secondary-text">info_outline</i>
            <a class="btn waves-effect waves-light mt-3 btn-maxwidth" href="/visitor">back</a>
            @endif
        </div>
    </div>
</div>
@endsection


