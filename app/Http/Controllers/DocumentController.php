<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\Offices;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    //Show office names
    public function index()
    {
        $office = Offices::all();
        //dd(Office::all());
        return view('documents.uploaddoc')->with('officeName', $office);
    }

    //assign office name into user when they register
    public function store(Documents $office)
    {

        Documents::create([
            'sender_name' => request('sender_name'),
            'receiver_name' => request('receiver_name'),
            'from_office' => request('from_office'),
            'to_office' => request('to_office'),
        ]);

        return redirect('uploaddoc');
    }

    public function refNumber()
    {
        $docs = Documents::all();
        return view('documents.uploaddoc')->with('id', $docs);
    }

    public function getRefNumber(Documents $docs)
    {
        Documents::create([
            'reference_no' => $docs->id,
        ]);
    }
}
