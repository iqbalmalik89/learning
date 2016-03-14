<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Company extends Controller
{
	
/*	public function home()
	{
    	return view('Company');
	}

*/

public function index()
    {
        $companies = Company::all();

        return view('Company', ['companies' => $companies]);
    }
    
/*public function index()
    {
        $flights = Flight::all();

        return view('flight.index', ['flights' => $flights]);
    }
*/
	
  }