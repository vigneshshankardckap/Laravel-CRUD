<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


        // all the datas from db
        // $employees=employee::all();

        // getting from desc order from db
        // $employees=employee::orderBy('id','desc')->get();


        // paginate method datas from db
        $employees=employee::orderBy('id','desc')->paginate(4);


       
        return view('index',compact('employees'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
	$request->validate([
	'name' => 'required',
    'email' => 'required',
    'phone' => 'required',
    'joining_date' => 'required|',
    'salary' => 'required' 
	]);


       $data= $request->except('_token');
            // mass aassigment
            
            employee::create($data);
            return redirect()->route('employee.index')
            ->withMessage('employee datas has been created !!');
   
    //    insert single role
        //  $employee=new employee;
        //  $employee->name=$data['name'];
        //  $employee->name=$data['email'];
        //  $employee->name=$data['phone'];
        //  $employee->name=$data['joining_date'];
        //  $employee->name=$data['salary'];
        //  $employee->save();
        //  dd('success');

        
   
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
  

        return view('show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee=employee::find($id);
        return view('edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
   
        
        $data=$request->all();
    //    $employee= employee::find($id);
       $employee->update($data);
       return redirect()->route('employee.index',$employee->id)
       ->withMessage('employee dats has been updated successfully !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //

        $employee->delete();
        return redirect()->route('employee.index',)
        ->withMessage('employee dats has been deleted successfully !!');
    }
}
