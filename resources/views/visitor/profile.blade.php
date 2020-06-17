@extends('layouts.visitorLayout')
@section('title', 'My Profile')
@section('content')
<div class="card mh-80">
    <div class="card-content center">
        <h5 class="my-none secondary-text right"><b>{{ $visitor->point }} Hi-Coin</b></h5>
        <div class="row">
            <div class="mt-5"></div>
            <i class="large material-icons secondary-text mt-5">face</i>
            {{-- <div class="btn-floating btn-large waves-effect waves-light secondary">
                <h5>{{ $visitor->point }}</h5>
            </div> --}}
        </div>
        <div class="row mt-5">
            <div class="col s12">
                <h5 class="my-none secondary-text left"><b>{{ $visitor->name }}</b></h5>
            </div>
            <div class="col s12">
                <span class="mx-none mt-1 new badge left" data-badge-caption="">{{ $visitor->email }}</span>
            </div>
        </div>
    </div>
</div>
@endsection


