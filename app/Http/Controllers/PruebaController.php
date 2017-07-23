<?php

namespace Cinema\Http\Controllers;

class PruebaController extends Controller
{
	public function index()
	{
		return "Hola desde Controller";
	}

	public function name($nombre)
	{
		return "Hola mi nombre es: ".$nombre;
	}

}
