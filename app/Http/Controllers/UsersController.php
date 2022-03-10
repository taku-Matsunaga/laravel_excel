<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    // public function export()
    // {

    //     Excel::store(new UsersExport, 'public/users.xlsx');
    //     return Excel::download(new UsersExport, 'users.csv');
    // }

    public function index()
    {

        return view('index');
    }

    public function store(Request $request)
    {

        $file = $request->file('file');

        Excel::import(new UsersImport, $file);
    }
}
