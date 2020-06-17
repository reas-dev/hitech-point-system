@extends('layouts.visitorLayout')
@section('title', 'Developer List')
@section('content')
{{-- @foreach ($participants as $participant) --}}
@if ($visitor->state < 10)
@for ($i = 0; $i < $visitor->state; $i++)
<div class="card waves-effect waves-red btn-block">
    <div class="card-content">
        <div class="row">
            <div class="col s12">
                @if ($participants[$i]->id == 8 ||
                    $participants[$i]->id == 9 ||
                    $participants[$i]->id == 10)
                    <div class="btn-floating btn-large waves-effect waves-light purple darken-4">
                        <h5>{{ $participants[$i]->id }}</h5>
                    </div>
                @else
                <div class="btn-floating btn-large waves-effect waves-light secondary">
                    <h5>{{ $participants[$i]->id }}</h5>
                </div>
                @endif
                @if ($first[$i] == 1)
                <i class="medium right mr-1 red-text material-icons">clear</i>
                @endif
                @if ($mid[$i] == 1)
                {{-- <form action="{{ url('visitor/rate') ."/". $participant->id }}" method="get" class="right mr-1 orange-text">
                        @csrf
                        <button class="btn waves-effect waves-light">submit</button>
                </form> --}}
                <a class="right mr-1 orange-text" href="{{ url('visitor/rate') ."/". $participants[$i]->id }}"><i class="medium material-icons">rate_review</i></a>
                @endif
                @if ($finale[$i] == 1)
                <i class="medium right mr-1 green-text material-icons">done</i>
                @endif
                
                
            </div>
            @if ($participants[$i]->id == 8 ||
            $participants[$i]->id == 9 ||
            $participants[$i]->id == 10)
            <div class="col s12 mt-1">
                <h5 class="my-none purple-text text-darken-4"><b>{{ $participants[$i]->project_title }}</b></h5>
                <span class="mx-none mt-1 new badge left purple darken-4" data-badge-caption="">{{ $participants[$i]->lead_name }} - {{ $participants[$i]->school }}</span>
            </div>
            @else
            <div class="col s12 mt-1">
                <h5 class="my-none secondary-text"><b>{{ $participants[$i]->project_title }}</b></h5>
                <span class="mx-none mt-1 new badge left" data-badge-caption="">{{ $participants[$i]->lead_name }} - {{ $participants[$i]->school }}</span>
            </div>
            @endif
            
            {{-- <div class="col s12 mt-1">
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">First state : {{ $first[$i] }}</span>
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">Mid state : {{ $mid[$i] }}</span>
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">Final state : {{ $finale[$i] }}</span>
            </div> --}}
        </div>
    </div>
</div>
@endfor
@else
{{-- ganti $visitor->state ke nilai maksimal --}}
    @for ($i = 0; $i < 18; $i++)
<div class="card waves-effect waves-red btn-block">
    <div class="card-content">
        <div class="row">
            <div class="col s12">
                @if ($participants[$i]->id == 8 ||
                    $participants[$i]->id == 9 ||
                    $participants[$i]->id == 10)
                    <div class="btn-floating btn-large waves-effect waves-light purple darken-4">
                        <h5>{{ $participants[$i]->id }}</h5>
                    </div>
                @else
                <div class="btn-floating btn-large waves-effect waves-light secondary">
                    <h5>{{ $participants[$i]->id }}</h5>
                </div>
                @endif
                @if ($first[$i] == 1)
                <i class="medium right mr-1 red-text material-icons">clear</i>
                @endif
                @if ($mid[$i] == 1)
                {{-- <form action="{{ url('visitor/rate') ."/". $participant->id }}" method="get" class="right mr-1 orange-text">
                        @csrf
                        <button class="btn waves-effect waves-light">submit</button>
                </form> --}}
                <a class="right mr-1 orange-text" href="{{ url('visitor/rate') ."/". $participants[$i]->id }}"><i class="medium material-icons">rate_review</i></a>
                @endif
                @if ($finale[$i] == 1)
                <i class="medium right mr-1 green-text material-icons">done</i>
                @endif
                
                
            </div>
            @if ($participants[$i]->id == 8 ||
            $participants[$i]->id == 9 ||
            $participants[$i]->id == 10)
            <div class="col s12 mt-1">
                <h5 class="my-none purple-text text-darken-4"><b>{{ $participants[$i]->project_title }}</b></h5>
                <span class="mx-none mt-1 new badge left purple darken-4" data-badge-caption="">{{ $participants[$i]->lead_name }} - {{ $participants[$i]->school }}</span>
            </div>
            @else
            <div class="col s12 mt-1">
                <h5 class="my-none secondary-text"><b>{{ $participants[$i]->project_title }}</b></h5>
                <span class="mx-none mt-1 new badge left" data-badge-caption="">{{ $participants[$i]->lead_name }} - {{ $participants[$i]->school }}</span>
            </div>
            @endif
            {{-- <div class="col s12 mt-1">
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">First state : {{ $first[$i] }}</span>
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">Mid state : {{ $mid[$i] }}</span>
                <span class="mx-none mt-1 new badge left deep-purple accent-1" data-badge-caption="">Final state : {{ $finale[$i] }}</span>
            </div> --}}
        </div>
    </div>
</div>
@endfor
@endif

{{-- @endforeach --}}
@endsection
