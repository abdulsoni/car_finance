<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaintsProcedures;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class complaintsProceduresController extends Controller
{
    public function displayRecord(){
        $complaints_procedures=complaintsProcedures::first();
        return view('complaintsProcedures.complaintsProcedures',['complaints_procedures'=>$complaints_procedures]);
    }
}