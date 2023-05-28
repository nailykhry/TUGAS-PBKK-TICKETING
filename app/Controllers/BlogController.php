<?php 
namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    public function index(){
        $blogModel = new BlogModel();
        $data['blogs'] = $blogModel->orderBy('id', 'DESC')->findAll();
        return $data;
    } 

}