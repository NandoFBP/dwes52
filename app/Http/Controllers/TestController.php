<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function __construct(){

        $this->middleware('TestMiddleware');
    }

    public function index(){
        echo "Hola, estoy en Test";
    }

    public function create($id){
        echo 'Voy a crear el usuario ' . $id;
    }
}
