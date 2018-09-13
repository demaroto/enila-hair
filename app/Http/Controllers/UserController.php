<?php 
namespace App\Http\Controllers;

class UserController extends Controller{
	public function index(){
		return view('usuario.home');
	}
}
