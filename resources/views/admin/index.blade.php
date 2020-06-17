@extends('layouts.adminLayout')
@section('title', 'Rewards List')
@section('content')
<div class="card mh-80 center-align pt-3">
    <div class="card-content center">
        <ul class="collapsible">
            <li class="active">
              <div class="collapsible-header white-text indigo darken-3">
                <i class="material-icons">games</i>
                FUN REWARD</div>
              <div class="collapsible-body">
                <ul class="collection">
                    <li class="collection-item"><a href="{{ url('admin/FunReward/LuckyPong') }}" class="waves-effect btn btn-maxwidth white-text"><i
                        class="material-icons mr-2 white-text">bubble_chart</i>Lucky Pong</a></li>
                    <li class="collection-item"><a href="{{ url('admin/FunReward/GetSticker') }}" class="waves-effect btn btn-maxwidth white-text"><i
                        class="material-icons mr-2 white-text">confirmation_number</i>Get Sticker</a></li>
                </ul>
                <div class="divider"></div>
              </div>
            </li>
            <li>
              <div class="collapsible-header white-text indigo darken-3">
                <i class="material-icons">device_hub</i>
                POINT CHALLENGE</div>
              <div class="collapsible-body">
                <ul class="collection">
                    <li class="collection-item"><a class="waves-effect btn btn-maxwidth white-text" href="{{ url('admin/PointChallenge/Ui-Ux') }}"><i
                        class="material-icons mr-2 white-text">insert_chart</i>Game UI/UX</a></li>
                    <li class="collection-item"><a class="waves-effect btn btn-maxwidth white-text" href="{{ url('admin/PointChallenge/Photobooth') }}"><i
                        class="material-icons mr-2 white-text">camera</i>Photobooth</a></li>
                    {{-- <li class="collection-item"><a class="waves-effect btn btn-maxwidth white-text" href="{{ url('admin/PointChallenge/SingASong') }}"><i
                        class="material-icons mr-2 white-text">album</i>Sing a Song</a></li> --}}
                    <li class="collection-item"><a class="waves-effect btn btn-maxwidth white-text" href="{{ url('admin/PointChallenge/Follow-IG') }}"><i
                        class="material-icons mr-2 white-text">check_circle</i>Follow IG</a></li>
                </ul>
                <div class="divider"></div>
              </div>
            </li>
          </ul>
    </div>
</div>
@endsection