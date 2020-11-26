<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $services = DB::table('services')->orderBy('id')->select('*')->get();

        return view('app', compact('services'));
    }
}
