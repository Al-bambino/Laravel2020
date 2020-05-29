<?php

namespace App\Http\Controllers;

use App\Http\Requests\TariffAddOnRequest;
use App\TariffAddOn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TariffAddOnController extends Controller
{

    public function index()
    {

        dd(Auth::user()->name);
        // first
        // get
        // all
        // find
//        return TariffAddOn::findOrFail(26);
        return TariffAddOn::all(['price', 'type']);
//        return TariffAddOn::where('price', ">", 100)->get();

        return view('tariffAddOn.index', ['tariffAddOns' => $tariffAddOns]);
    }

    public function create()
    {
        return view('tariffAddOn.create');
    }

    public function edit(TariffAddOn $tariffAddOn)
    {
        return view('tariffAddOn.edit', ['tariffAddOn' => $tariffAddOn]);
    }

    public function update(TariffAddOnRequest $request, TariffAddOn $tariffAddOn)
    {
        $tariffAddOn->update($request->only(['price', 'type']));
        return redirect('/tariff-add-ons');
    }

    public function store(TariffAddOnRequest $request)
    {
        TariffAddOn::create($request->only(['price', 'type']));
        return redirect('/tariff-add-ons');
    }
}
