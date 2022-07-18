<?php

namespace App\Http\Controllers;

use App\Models\StaffBranch;
use App\Models\Staff;
use App\Models\Branch;
use Illuminate\Http\Request;


class StaffBranchController extends Controller
{
    //
    public function index()
    {
        //select * from post;
        $StaffBranch = StaffBranch::all();
        $Staff = Staff::all();
        $Branch = Branch::all();
        return view('migration.index', compact('StaffBranch', 'Staff', 'Branch'));
    }
}
