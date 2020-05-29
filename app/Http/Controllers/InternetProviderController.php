<?php

namespace App\Http\Controllers;

use App\InternetProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InternetProviderController extends Controller
{
    public function index()
    {
        return InternetProvider::all();
    }

    public function show(InternetProvider $internetProvider)
    {
        return $internetProvider->users()
//                         ->where('created_at', '>=', Carbon::today())
                         ->get();
        return $internetProvider;
    }
}
