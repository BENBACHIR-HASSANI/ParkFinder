<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Notifications;
use App\Notifications\ReservationNotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class ReservationController extends Controller
{
    public function reservation(Request $request){
        $validated = $request->validate([
            'dateTime_start_reservation' => 'required',
            'dateTime_end_reservation' => 'required',
            'Matricule' => 'required|max:20',
        ]);

        $reservation = new Reservation;
        $reservation->dateTime_start_reservation=$request->dateTime_start_reservation;
        $reservation->dateTime_end_reservation=$request->dateTime_end_reservation;
        $reservation->Matricule=$request->Matricule;
        $reservation->save();


        $notification = new Notifications;
        $notification->title='Confirmation of reservation';
        $notification->content='Your place has been reserved successfully.Thank you for choosing ParkFinder';
        $date = Carbon::now()->toDateTimeString();
        $notification->date=$date;
        $notification->username=Auth::user()->username;
        $notification->save();
        return view('qr');

        //$reservation->notify(new ReservationNotification());

    }
}
