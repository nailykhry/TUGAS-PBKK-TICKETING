<?php 
namespace App\Models;
use CodeIgniter\Model;
class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['user_id', 'flight_id', 'total_price', 'total_people', 'status', 'extra_bagage', 'rent'];
}