<?php namespace App\Models\Database;
use Illuminate\Database\Eloquent\Model;

class user extends Model{

    public $table = 'users';

    public function event(){
      return $this->belongsToMany('App\Models\Database\event','assignment');
    }

    public function assign($date){
      return $this->belongsToMany('App\Models\Database\event','assignment')->where('event_date', '=', $date);
    }

    public function assignbetween($start,$end){
      return $this->belongsToMany('App\Models\Database\event','assignment')
                  ->whereBetween('event_date', array($start, $end));
    }

}
