<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Offices;
use App\Models\User;
use Illuminate\Http\Request;

class UserOfficeController extends Controller
{
    //
    //Show office names
    public function index()
    {
        $office = Offices::all();
        //dd(Office::all());
        return view('auth.register')->with('officeName', $office);
    }
    
    //assign office name into user when they register
    public function store(Offices $office)
    {

        Offices::create([
            'assignedOffice' => request('officeName'),
        ]);

        return redirect('auth.register');
    }
   
}
