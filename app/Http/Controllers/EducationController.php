<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationController extends BaseController
{
    public function get()
    { 
    	return Education::get();
    }
}
