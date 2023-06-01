<?php

namespace App\Controllers;

use App\Models\SeatModel;
use App\Models\FlightModel;
use App\Models\TransactionModel;
use App\Controllers\BaseController;

class TransactionController extends BaseController
{
    public function bookingdetail($id, $people)
    {
        $flightModel = new FlightModel();
        $flight = $flightModel->find($id);

        $seatModel = new SeatModel();
        $seats = $seatModel->where('flight_id', $flight['id'])->findAll();
        
        $data['flight'] = $flight;
        $data['people'] = $people;
        $data['seats'] = $seats;
        return view('users/booking_detail', $data);
    }

    public function travellerdetail($id, $people)
    {
        $flightModel = new FlightModel();
        $query = $flightModel->select('*');
        $query->where('id', $id);
        $flight = $query->findAll();

        //hasil seats
        $seatkeys = array(); 

        foreach ($_POST as $key => $value) {
            $seatkeys[] = $key; 
        }
        
        $data['flight'] = $flight;
        $data['people'] = $people;
        $data['seats'] = $seatkeys;
        
        return view('users/traveller_details', $data);
    }

    
    public function payment($id, $people)
    {
        $flightModel = new FlightModel();
        $flight = $flightModel->find($id);

        $transactionModel = new TransactionModel();
        $transaction = $transactionModel->find($id);
        $db = db_connect();
        $query = $db->table($transactionModel->table)->select('MAX(id) as max_id');
        $result = $query->get()->getRow();
        $maxId = $result->max_id;

        $data['seats'] = $_POST['seats'];
        $data['bookId'] = $maxId+1;
        $data['flight'] = $flight;
        $data['people'] = $people;
        
        return view('users/payment', $data);
    }

    public function transaction($id, $people)
    {
        $flightModel = new FlightModel();
        $flight = $flightModel->find($id);

        $transactionModel = new TransactionModel();
        $transaction = $transactionModel->find($id);

        $db = db_connect();
        $query = $db->table($transactionModel->table)->select('MAX(id) as max_id');
        $result = $query->get()->getRow();
        $maxId = $result->max_id;


        $status = "lunas";
        $false = 0;
        $true = 1;
        $model = new TransactionModel();
        $data = [
            'user_id'       => $this->request->getVar('card1'),
            'flight_id'     => $id,
            'total_price'   => $flight['price']*$people + 64000+15000,
            'total_people'  => $people,
            'status'        => $status,
            'extra_bagage'  => $false,
            'rent'          => $true,
        ];
        $model->save($data);

        $data['seats'] = $_POST['seats'];

        // SAVE SEATS 
        $this->saveSeats($id, $data['seats']);


        $data['bookId'] = $_POST['bookId'];
        $data['flight'] = $flight;
        $data['people'] = $people;
        return view('users/completed', $data);
    }

    public function saveSeats($id, $data){
        $seatModel = new SeatModel();
        
        $explodedArray = explode(",", $data);
        $number = array_map('intval', $explodedArray);

        foreach($number as $numb){
            $seat = $seatModel->where('flight_id', $id)->where('number', $numb)->first();
            $seat['status'] = 1;
            $seatModel->update($seat['id'], $seat);
        }
    }
}
