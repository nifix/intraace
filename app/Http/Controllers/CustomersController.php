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
        /*
        *   Returns the customers view, without any team ID.
        */

        return view('customers.customers');
    }

    public function showCustomersByTeamId($id)
    {
        /*
        *   Returns the customers view for the specified team ID.
        */

        return view('customers.customers')->with('team_id', $id);
    }

    public function showCustomerById($id)
    {

        /*
        *   First query, it requests the events from the DB with the
        *   specified ID.
        */

        $customer_events = DB::table('customers_events')
        ->select('customers_events.*')
        ->where([
            ['customer_id', $id],
            ['event_year', date("Y")],
            ['event_code', 'EVENT_PROGRESS_SAISIE']
        ])
        ->max('customers_events.event_month');

        /*
        *   Small array passed by the view to adjust the display of months
        *   in the progress bar.
        */

        $month_array = array(
            1 => 'Jan',
            2 => 'Fév',
            3 => 'Mar',
            4 => 'Avr',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juil',
            8 => 'Août',
            9 => 'Sept',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Déc',
        );

        /*
        *   Second request, retrieves the data from the specified customer,
        *   with TVA type.
        */

        $customer = DB::table('customers')
        ->join('tva_types','customers.company_tva_id', '=', 'tva_types.tva_id')
        ->join('teams', 'teams.id', '=', 'customers.team_id')
        ->select('customers.*','tva_types.description','tva_types.deadline', 'teams.name')
        ->where('customers.id', $id)
        ->first();

        return view('customers.view')->with('customer_data', [$customer, $customer_events, $month_array]);
    }
}
