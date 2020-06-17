@extends('layouts.adminLayout')
@section('title', "Developer's Score Statistic")
@section('content')
<div class="card mh-80 center-align pt-3">
    <div class="card-content center">
        <table class="responsive-table centered highlight">
            <thead>
              <tr>
                <th>@sortablelink('participant_id', 'No')</th>
                <th>@sortablelink('visit_count', 'Kunjungan')</th>
                <th>@sortablelink('final_score', 'Nilai Akhir')</th>
              </tr>
            </thead>
      
            <tbody>
              @foreach ($developers as $key => $developer)
              <tr>
                <td>{{ $developer->participant_id }}</td>
                <td>{{ $developer->visit_count }}</td>
                <td>{{ $developer->final_score }}</td>
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