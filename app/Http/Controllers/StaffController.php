<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index()
    {
        //select * from post;
        $staff = Staff::all();
        return view('migration2.Staff', compact('staff'));
    }
}
