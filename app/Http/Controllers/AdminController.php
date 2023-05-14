<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{InformationPassport,Room};
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class AdminController extends Controller
{

    public function informationOrder()
    {
        $informations=InformationPassport::all();
        return view('dasboard.information_order',compact('informations'));
    }


    public function eligibleStay()
    {
        $rooms = Room::join('users', 'users.id', '=', 'rooms.id_user')
            ->get();
        return view('dasboard.eligible_stay',compact('rooms'));
    }


    public function extraNight()
    {
        $rooms = Room::join('users', 'users.id', '=', 'rooms.id_user')
        ->get();
        return view('dasboard.extra_night',compact('rooms'));
    }

    public function getSendMail()
    {
        return view('dasboard.send_mail');

    }
    public function postSendMail(Request $request)
    {

        Mail::to($request->email)->send(new SendMail());
        return back()->with('message',"You send email");
    }


}
