<?php 
namespace App\Models;
use CodeIgniter\Model;
class SeatModel extends Model
{
    protected $table = 'seats';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['flight_id', 'number', 'status'];
}