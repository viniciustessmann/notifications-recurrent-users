<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /**
     * Show the all notifications.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}