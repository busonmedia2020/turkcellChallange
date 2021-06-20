@extends('layouts.master')
@section('content')

    <div class="container col-md-12 text-center">
        <hr>

        <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Department</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->gsm_no}}</td>
            <td>{{$customer->departments->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
        <a type="button" class="btn btn-primary" href="{{route('insert-customer')}}">Insert</a>
        <hr>

    </div>
@endsection
