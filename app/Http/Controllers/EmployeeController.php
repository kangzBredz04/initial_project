<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Function index yang mengembalikan nilai berupa string
    public function index()
    {
        // return "Ini adalah method index yang ada di dalam EmpolyeeController";
        $nama = 'Wahyu Jebredz';
        $ngoding = ['Java', 'React JS', 'PHP'];
        return view('biodata', ['nama' => $nama, 'ngoding' => $ngoding]);
    }
}
