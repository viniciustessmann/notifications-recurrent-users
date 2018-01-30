<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notification extends Model
{
    
    protected $table = 'notifications';

    public function setName($name) {
        $this->attributes['name'] = $name;
    }

    public function getName() {
        return $this->atttributes['name'];
    }

    public function setStatus($status) {
        $this->attributes['status'] = $status;
    }

    public function getStatus() {
        return $this->atttributes['status'];
    }

    public function setDate($date) {
        $this->attributes['date'] = $date;
    }

    public function getDate() {
        return $this->atttributes['date'];
    }

    public function setRepeat($repeat) {
        $this->attributes['repeat'] = $repeat;
    }

    public function getRepeat() {
        return $this->atttributes['repeat'];
    }

    public function setNotified($id) {
        $this::where('id', $id)
          ->update(['status' => 1]);
    }

    public function findAll() {
        return $this::all();
    }

    public function addMonth($numMonth, $date) {
        $date = strtotime($date);
        $date = date('Y-m-d', $date);
        return  date( "Y-m-d", strtotime( $date . " +" . $numMonth . " month" ) );
    }

    public function addDay($numDay, $date) {
        $date = strtotime($date);
        $date = date('Y-m-d', $date);
        return  date( "Y-m-d", strtotime( $date . " +" . $numDay . " day" ) );
    }

    public function getPendingOfDay() {

        $today = date('Y-m-d');
        $todayNext = $this->addDay(1, $today);

        return $this::where('status', 0)
               ->where('date', '>=', $today . ' 00:00:00')
               ->where('date', '<' , $todayNext . ' 00:00:00')
               ->get();
    }
}
