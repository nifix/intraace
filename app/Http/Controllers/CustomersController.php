<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        return view('customers.customers');
    }

    public function showCustomersByTeamId($id)
    {
        return view('customers.customers')->with('team_id', $id);
    }

    public function showCustomerById($id)
    {
        $customer_events = DB::table('customers_events')
        ->select('customers_events.*')
        ->where([
            ['customer_id', $id],
            ['event_year', date("Y")],
            ['event_code', 'EVENT_PROGRESS_SAISIE']
        ])
        ->max('customers_events.event_month');

        $month_array = array(
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre',
        );

        $customer = DB::table('customers')
        ->join('tva_types','customers.company_tva_id', '=', 'tva_types.tva_id')
        ->join('teams', 'teams.id', '=', 'customers.team_id')
        ->select('customers.*','tva_types.description','tva_types.deadline', 'teams.name')
        ->where('customers.id', $id)
        ->first();
        return view('customers.view')->with('customer_data', [$customer, $customer_events, $month_array]);
    }
}
