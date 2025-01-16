<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    function users(){
        $students = Students::all();
        return view('readstudents',compact('students'));

    }
    function parents(){
        $students = Students::all();
        return view('parents',compact('students'));

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
        $data = $request->all();
        Students::create([
            "firstName"=>$data['firstName'],
            "lastName"=>$data['lastName'],
            "dob"=>$data['dob'],
            "gender"=>$data['gender'],
            "classSelect"=>$data['classSelect'],
            "nation"=>$data['nation'],
            "religion"=>$data['religion'],
            "caste"=>$data['caste'],
            "scaste"=>$data['scaste'],
            "email"=>$data['email'],
            "phone"=>$data['phone'],
            "address"=>$data['address'],
            "fname"=>$data['fname'],
            "mname"=>$data['mname'],
            "photo"=>$data['photo'],
            
        ]);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Students::find($id);
        return view('update',compact('students'));
        //from readstud it will open the update page
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //it will update here
        $students = Students::find($id);
        $students->firstName = $request->input('firstName');
        $students->lastName = $request->input('lastName');
        $students->dob = $request->input('dob');
        $students->gender = $request->input('gender');
        $students->classSelect = $request->input('classSelect');
        $students->nation = $request->input('nation');
        $students->religion = $request->input('religion');
        $students->caste = $request->input('caste');
        $students->scaste = $request->input('scaste');
        $students->email = $request->input('email');
        $students->phone = $request->input('phone');
        $students->address = $request->input('address');
        $students->fname = $request->input('fname');
        $students->mname = $request->input('mname');
        $students->update();
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::destroy($id);
        return view('dashboard');
    }
}
