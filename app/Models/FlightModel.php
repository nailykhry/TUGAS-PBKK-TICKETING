<?php 
namespace App\Models;
use CodeIgniter\Model;
class FlightModel extends Model
{
    protected $table = 'flights';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['logo', 'name', 'rute_from', 'rute_to', 'depart_at', 'arrive_at', 'date', 'seat_qty', 'type', 'status', 'price'];

    public function seats()
    {
        return $this->hasMany('App\Models\SeatModel', 'flight_id');
    }
}