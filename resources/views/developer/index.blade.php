@extends('layouts.developerLayout')
@section('title', 'Visitor Check')
@section('content')
<div class="card mh-50 center-align mt-5">
    <div class="card-content center">
        <div class="row">
            <form action="{{ url('developer/rate') }}" method="get">
                <div class="input-field col s12 mr-1">
                    <input name="username" id="username" type="text" class="validate">
                    <p class="left-align">Masukkan nama pengunjung untuk diberi nilai.</p>
                    <label for="username">visitor username</label>
                    @error('username')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                    @enderror
                    <p id="info" class="right"></p>
                </div>
                <div class="col s12">
                    <button class="btn waves-effect waves-light">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection