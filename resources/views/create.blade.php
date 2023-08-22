      
 @extends('layouts.app') 
 @section('content')

      <div class="card">
 <a  classs="text-light" href="{{route('employee.index')}}">back to List</a>

            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
                <form action="{{route('employee.store')}}" class="was-validated" method="POST" novalidate>
                    <div class="form-group has-validation">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control ($errors->has('name')?'is_invalid':'') " required value="{{old('name')}}">  
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
                        <input type="email" name="email" id="email" class="form-control  ($errors->has('email')?'is_invalid':'')" required value="{{old('email')}}">
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('email')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">phone</label>
                        <input type="text" name="phone" id="phone" class="form-control  ($errors->has('phone')?'is_invalid':'')" required value="{{old('phone')}}">
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('phone')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_date">Joining date</label>
                        <input type="date" name="joining_date" id="joining_date" class="form-control  ($errors->has('joining_date')?'is_invalid':'')" required value="{{old('joining_date')}}">
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
                        <input type="number" name="salary" id="joining_salary" class="form-control  ($errors->has('salary')?'is_invalid':'')" required value="{{old('salary')}}">
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>   
                                {{$errors->first('salary')}} 
                            </strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create Employee</button>
                </form>
            </div>
        </div>
@endsection