@extends('layouts.adminLayout')
@section('title', 'Follow IG')
@section('content')
<div class="card mh-80 center-align pt-3">
    <div class="card-content center">
        <div class="row">
            <form action="{{ url('admin/PointChallenge/Follow-IG') }}" method="post">
                @csrf
                <div class="input-field col s12 mr-1">
                    <input name="username" id="username" type="text" class="validate">
                    <label for="username">visitor username</label>
                    @error('username')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                    @enderror
                    <p id="info" class="right"></p>
                </div>
                <div class="col s12">
                    <button class="btn waves-effect waves-light">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection