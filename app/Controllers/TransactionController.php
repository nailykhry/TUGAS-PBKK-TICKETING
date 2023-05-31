<?php

namespace App\Controllers;

use App\Models\FlightModel;
use App\Controllers\BaseController;

class TransactionController extends BaseController
{
    public function bookingdetail($id, $people)
    {
        $flightModel = new FlightModel();
        $query = $flightModel->select('*');
        $query->where('id', $id);
        $flight = $query->findAll();
        $data['flight'] = $flight;
        $data['people'] = $people;
        return view('users/booking_detail', $data);
    }

    public function travellerdetail($id, $people)
    {
        $flightModel = new FlightModel();
        $query = $flightModel->select('*');
        $query->where('id', $id);
        $flight = $query->findAll();
        $data['flight'] = $flight;
        $data['people'] = $people;
        return view('users/traveller_details', $data);
    }

    
    public function payment($id, $people)
    {
        $flightModel = new FlightModel();
        $flight = $flightModel->find($id);

        $data['flight'] = $flight;
        $data['people'] = $people;

        return view('index', $data);
    }
}
