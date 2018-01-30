<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Show the all notifications.
     *
     * @return Response
     */
    public function index(){

        $notification = new Notification();
        
        return view('notifications.index', [
            'notifications' => $notification->findAll(),
            'urlToAddNotification' => action('NotificationController@new')
        ]);
    }

    public function add(Request $request){

        $repeat = intval($request->input('repeat'));

        for ($x = 1; $x <= $repeat; $x++) {

            $notification = new Notification();

            $notification->setName($request->input('name'));
            $notification->setStatus(0);
            $notification->setRepeat($x);
            $notification->setDate($notification->addMonth($x,$request->input('date')));  
            $notification->save();
        }
    }

    /**
     * Add new notification.
     *
     * @return Response
     */
    public function new(){
        return view('notifications.new');
    }

    private function addMonth($numMonth, $date) {
        $date = strtotime($date);
        $date = date('Y-m-d', $date);
        return  date( "Y-m-d", strtotime( $date . " +" . $numMonth . " month" ) );
    }
}