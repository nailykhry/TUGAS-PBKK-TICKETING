<?php 
namespace App\Controllers;
use App\Models\SeatModel;
use App\Models\FlightModel;
use CodeIgniter\Controller;

class FlightController extends Controller
{
    
    // hasil setelah click submit pencarian flight
    public function index($filterRuteFrom = null, $filterRuteTo = null, $filterDate = null){
        $flightModel = new FlightModel();
        $query = $flightModel->select('*');
        
        // NANTI GET/POST SESUAIKAN SAMA FORM
        $filterRuteFrom = $_GET['rute_from'] ?? null;
        $filterRuteTo = $_GET['rute_to'] ?? null;
        $filterDate = $_GET['date'] ?? null;
        
        if ($filterRuteFrom) {
            $query->where('rute_from', $filterRuteFrom);
        }
        
        if ($filterRuteTo) {
            $query->where('rute_to', $filterRuteTo);
        }
        
        if ($filterDate) {
            $filterDate = date('Y-m-d', strtotime($filterDate));
            $query->where("DATE_FORMAT(date, '%Y-%m-%d') =", $filterDate);
        }
        
        $flights = $query->findAll();
        $data['flights'] = $flights;
        
        var_dump($data['flights']);
    }
    
    // show flight detail
    public function show($id){
        $flightModel = new FlightModel();
        $data['flight'] = $flightModel->where('id', $id)->first();
        var_dump($data['flight']);
    }

    // insert data
    public function store() {
        $validationRules = [
            'name' => 'required', 
            'rute_from' => 'required', 
            'rute_to' => 'required', 
            'depart_at' => 'required', 
            'arrive_at' => 'required', 
            'date' => 'required', 
            'seat_qty' => 'required', 
            'type' => 'required', 
            'status' => 'required', 
            'price' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan response dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Jika validasi sukses, dapatkan data dari permintaan POST
        $flightData = [];
        $fields = ['name', 'rute_from', 'rute_to', 'depart_at', 'arrive_at', 'date', 'seat_qty', 'type', 'status', 'price'];

        foreach ($fields as $field) {
            $flightData[$field] = $this->request->getPost($field);
        }
        
         // Lakukan penyimpanan data ke dalam database menggunakan model
        $flightModel = new FlightModel();
        $flightModel->insert($flightData);
        $lastInsertedId = $flightModel->insertID();

        // Looping seats
        for($i=1; $i<=$flightData['seat_qty']; $i++){
            $seatData['flight_id'] = $lastInsertedId;
            $seatData['number'] = $i;
            $seatData['status'] = 0;

            $seatModel = new SeatModel();
            $seatModel->insert($seatData);
        }
        return redirect()->to(route_to('dashboard'));
    }
    
    // update user data
    public function update($id){
        $flightModel = new FlightModel();
        
        $flightData = [];
        $fields = ['name', 'rute_from', 'rute_to', 'depart_at', 'arrive_at', 'date', 'seat_qty', 'type', 'status', 'price'];

        foreach ($fields as $field) {
            $flightData[$field] = $this->request->getVar($field);
        }
        $flightModel->update($id, $flightData);
        var_dump($flightModel);
    }
 
    // delete flight
    public function delete($id = null){
        $flightModel = new FlightModel();
        $data['flight'] = $flightModel->where('id', $id)->delete($id);
        return redirect()->to(route_to('dashboard'));
    }    
}