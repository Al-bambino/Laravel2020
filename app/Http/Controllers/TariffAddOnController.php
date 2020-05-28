<?php

namespace App\Http\Controllers;

use App\TariffAddOn;
use Illuminate\Http\Request;

class TariffAddOnController extends Controller
{

    public function index()
    {
        $tariffAddOns = TariffAddOn::all();
        return view('tariffAddOn.index', ['tariffAddOns' => $tariffAddOns]);
    }


    public function create()
    {
        return view('tariffAddOn.create');
    }


    public function store()
    {
        //request
        //validate
        //save
        dd(request());

        return redirect('/tariff-add-ons');
    }
}
