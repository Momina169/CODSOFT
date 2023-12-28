<?php

namespace App\Http\Controllers;

use App\Models\Deppartment;
use App\Models\DocterData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DeppartmentController extends Controller
{
    public function getDeppartmentBreakdown()
    {
        // $deppartmentBreakdown = Deppartment::select('Departmentname', DB::raw('count(*) as count'))
        // ->groupBy('Departmentname')
        // ->get();
        
        $deppartmentBreakdown = Deppartment::get();
        return view('/appoint.create', compact('deppartmentBreakdown'));
    }
    
    // index function
    public function index()
    {
        $departments = Deppartment::with('DocterData')->get();
        return view('/finddoctors.findDoctor', compact('departments'));
    }

    // show
    public function showDepartments(){
       
        $departments = Deppartment::all();
        $doctor = DocterData::with('deppartments')->get();
        return view('/finddoctors.findDoctor', compact('doctor','departments'));
       
    }
   
    public function store(Request $request)
    {
        //
    }

    public function show(Deppartment $deppartment)
    {
        //
    }

    public function edit(Deppartment $deppartment)
    {
        //
    }

    public function update(Request $request, Deppartment $deppartment)
    {
        //
    }

    public function destroy(Deppartment $deppartment)
    {
        //
    }
}