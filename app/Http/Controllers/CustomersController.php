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
        $customer = DB::table('customers')
        ->join('tva_types','customers.company_tva_id', '=', 'tva_types.tva_id')
        ->join('teams', 'teams.id', '=', 'customers.team_id')
        ->select('customers.*','tva_types.description','tva_types.deadline', 'teams.name')
        ->where('customers.id', $id)
        ->first();
        return view('customers.view')->with('customer_data', $customer);
    }
}
