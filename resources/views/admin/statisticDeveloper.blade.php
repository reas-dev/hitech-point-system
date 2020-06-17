@extends('layouts.adminLayout')
@section('title', 'Developer Statistic')
@section('content')
<div class="card mh-80 center-align pt-3">
    <div class="card-content center">
        <table class="responsive-table centered highlight">
            <thead>
              <tr>
                <th>@sortablelink('id', 'No')</th>
                <th>@sortablelink('project_title', 'Judul Project')</th>
                <th>@sortablelink('phone', 'Phone')</th>
                <th>@sortablelink('email', 'Email')</th>
              </tr>
            </thead>
      
            <tbody>
              @foreach ($developers as $key => $developer)
              <tr>
                <td>{{ $developer->id }}</td>
                <td>{{ $developer->project_title }}</td>
                <td>{{ $developer->phone }}</td>
                <td>{{ $developer->email }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="mt-3">
            {{$developers->links()}}
          </div>
    </div>
</div>
@endsection