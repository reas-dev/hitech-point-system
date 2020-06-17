@extends('layouts.adminLayout')
@section('title', 'Visitor Statistic')
@section('content')
<div class="card mh-80 center-align pt-3">
    <div class="card-content center">
        <table class="responsive-table centered highlight">
            <thead>
              <tr>
                <th>@sortablelink('id', 'No')</th>
                <th>@sortablelink('name', 'Nama')</th>
                <th>@sortablelink('email', 'Email')</th>
                <th>@sortablelink('phone', 'Nomor WA')</th>
                <th>@sortablelink('username', 'Username')</th>
                <th>@sortablelink('state', 'Jumlah Kunjungan')</th>
                <th>@sortablelink('plot', 'Plot')</th>
                <th>@sortablelink('point', 'Hi-Coint')</th>
                <th>@sortablelink('updated_at', 'Time')</th>
              </tr>
            </thead>
      
            <tbody>
              @foreach ($visitors as $key => $visitor)
              <tr>
                <td>{{ $visitor->id }}</td>
                <td>{{ $visitor->name }}</td>
                <td>{{ $visitor->email }}</td>
                <td>{{ $visitor->phone }}</td>
                <td>{{ $visitor->username }}</td>
                <td>{{ $visitor->state }}</td>
                <td>{{ $visitor->plot }}</td>
                <td>{{ $visitor->point }}</td>
                <td>{{ $visitor->updated_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="mt-3">
            {{$visitors->links()}}
          </div>
    </div>
</div>
@endsection