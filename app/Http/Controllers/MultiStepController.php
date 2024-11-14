<?php

namespace App\Http\Controllers;

use App\Http\Requests\MultiStepFormRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class MultiStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Dashboard', [
            'countries' => Country::all()->toArray(),
            'cities'    => City::all()->groupBy('country_id')->toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MultiStepFormRequest $request): RedirectResponse
    {
        $cityPrice = City::find($request->integer('step2.to_city'));

        $price = $cityPrice->adult_price * $request->integer('step3.adults') + $cityPrice->children_price * $request->integer('step3.children');

        return redirect()->route('success')->with('price', $price);
    }
}
