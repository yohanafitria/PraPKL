<?php

namespace App\Http\Controllers;
use App\Models\Branch;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function Branch()
    {
        //select * from post;
        $Branch = Branch::all();
        return view('migration1.Branch', compact('Branch'));
    }
}
