<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
{
		/* Cara 1 */
    $data ['username']        = 'Heroku';
    $data ['last_login']      = date('Y-m-d H:i:s');
    $data ['list_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];									    
    return view('home', $data );
}
}
