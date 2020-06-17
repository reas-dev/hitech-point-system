@extends('layouts.developerLayout')
@section('title', 'Visitor Scoring')
@section('content')
<div class="card mh-50 center-align mt-5">
    <div class="card-content center">
        <div class="row">
            <div class="col s12">
                <h5 class="left secondary-text">{{ $visitor->name }}</h5>
            </div>
            <div class="col s12">
                <p class="left-align">Beri nilai pengunjung dari quiz yang telah diverikan.</p>
            </div>
            <form action="{{ url('developer/rate') . "/" . $visitor->id }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <p class="range-field">
                            <input type="range" id="score" name="score" min="50" max="100"/>
                        </p>
                        <p id="info" class="left secondary-text">nilai : 75</p>
                    </div>
                    <div class="col s11">
                        <a class="btn waves-effect waves-light btn-secondary col s6" href="/developer">back</a>
                        <button class="btn waves-effect waves-light col s6 push-s1">submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
