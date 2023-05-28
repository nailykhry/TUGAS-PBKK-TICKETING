<?php 
namespace App\Models;
use CodeIgniter\Model;
class ExtraFacilitiesModel extends Model
{
    protected $table = 'extrafacilities';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'desc_short', 'description', 'price'];
}