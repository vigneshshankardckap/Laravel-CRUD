
@extends('layouts.app') 
 @section('content')
 @if(session()->has('message'))
 <div class="alert alert-success">
    {{session()->get('message')}}
 </div>
 @endif
        <div class="card">
            <a  classs="text-light" href="{{route('employee.index')}}">back to List</a>
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Update Employee</p>
                <form action="{{route('employee.update',$employee->id)}}" class="was-validated" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control ($errors->has('name')?'is_invalid':'')" value="{{$employee->name}}" required> 
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('name')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control ($errors->has('email')?'is_invalid':'')" value="{{$employee->email}}" required>
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('email')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation   ">
                        <label for="joining_date">Joining date</label>
                        <input type="date" name="joining_date" id="joining_date" class="form-control ($errors->has('joining_date')?'is_invalid':'')" value="{{$employee->joining_date}}" required>
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('joining_date')}} 
                            </strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group has-validation">
                        <label for="joining_salary">Joining salary</label>
                        <input type="number" name="joining_salary" id="joining_salary ($errors->has('joining_salary')?'is_invalid':'')" class="form-control" value="{{$employee->salary}}" required>
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('joining_salary')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="is_active">phone</label><br>
                        <input type="text" name="phone" id="phone" class="form-control ($errors->has('phone')?'is_invalid':'')"  value="{{$employee->phone}}" required>
                        @if($errors->has('phone'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('phone')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
        </div>

        @endsection