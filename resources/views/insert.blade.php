@extends('layouts.master')
@section('content')

    <div class="container col-md-6">
        <hr>
        <form action="{{route('insert-customer-action')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">CUSTOMER :</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter Customer">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">EMAIL :</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">GSM NO :</label>
                <input type="tel" class="form-control" name="gsm_no" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter GSM">
            </div>

            <select name="department_id">
                @foreach($departments as $department)
                    <option value="{{$department->id}}"> {{$department->name}}</option>
                @endforeach
            </select>

            <input type="hidden" name="insert" value="1">

            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a type="button" class="btn btn-primary" href="{{route('index')}}">To List</a>

        </form>

    </div>
@endsection
