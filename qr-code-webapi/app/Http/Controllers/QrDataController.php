<?php

namespace App\Http\Controllers;

use App\Models\QrData;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrDataController extends Controller
{
    /* logic for the app from the controller*/


    /*  index function to display the data from the database */
    public function index(){
        $data = QrData::all();
        return view ('welcome', ['data' => $data]);
    }


    /* store function to add new data into db*/
    public function store(Request $request){
        $data = new QrData;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return back();
    }

    /* generate function to generate the qr code */
    public function generate ($id)
    {
        $data = QrData::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($data->name);
        return view('qrcode',compact('qrcode'));
    }
}
