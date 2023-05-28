<?php 
namespace App\Controllers;
use App\Models\SeatModel;
use App\Models\FlightModel;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index(){
        $flightModel = new FlightModel();
        $data['flights'] = $flightModel->orderBy('date', 'DESC')->findAll();
        return view('admin/dashboard', $data);
    } 

    public function create(){
        return view('admin/createflight');
    } 

    public function edit($id){
        $flightModel = new FlightModel();
        $data['flight'] = $flightModel->where('id', $id)->first();
        return view('admin/editflight', $data);
    } 
}