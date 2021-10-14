<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
class StudentController extends Controller
{
    public function student()
   
    {
        return view('student');
        
    }
    function student(Request $req)
    {
        $form= new form;
        $form->name=$req->first_name;
        $form->name=$req->last_name;
        $form->name=$req->subject;
        $form->name=$req->contact_number;
        $form->name=$req->message;
    }
}
