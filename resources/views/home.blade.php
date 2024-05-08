@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
@foreach ($courses as $course)
    @if ($course['status'] == 'active')
        <h1>Course {{$course['name']}}</h1>
        <p>The course is {{$course['status'] == 'active' ? 'active': 'inactive'}}</p>
        <p>Course Description : {{$course['description']}}</p>

    @endif
@endforeach
@foreach ($courses as $course)
    @if ($course['status'] == 'inactive')
        <h1>Course {{$course['name']}}</h1>
        <p>The course is {{$course['status'] == 'inactive' ? 'inactive': 'active'}}</p>
        <p>Course Description : {{$course['description']}}</p>

    @endif
@endforeach

@endsection