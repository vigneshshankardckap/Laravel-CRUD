@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <strong>Employee List</strong>
                <a href="{{route('employee.create')}}" class="btn btn-primary btn-xs float-end py-0">Create Employee</a>
                <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($employees as $key => $employee)
                            <td>{{$key+1}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td> {{$employee->joining_date}} </td>

                            <td>
                                <div class="d-flext">
                                    <a href="{{route('employee.show',$employee->id)}}" class="btn btn-primary btn-xs py-0">Show</a>
                                    <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-warning btn-xs py-0">Edit</a>
                             <form action=""></form>
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$employees->links()}}
            </div>
        </div>
    </div>
</div>
@endsection