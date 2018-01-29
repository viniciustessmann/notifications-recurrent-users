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

    public function findAll() {
        return $this::all();
    }

}
