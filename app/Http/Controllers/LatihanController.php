<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LatihanController extends Controller
{
public function home()
{
return "Oke ini Latihan Controller";
}

public function beranda()
{
$data = array('nama' => 'Muhamad Muhajirin');
return view('beranda', $data);
}
}
