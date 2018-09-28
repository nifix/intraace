<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ResponseFactory;
use Yajra\DataTables\Datatables;

class ExportDataController extends Controller
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

    public function test() {
        $data = DB::table('customers')
        ->join('teams', 'customers.team_id', '=', 'teams.id')
        ->select('customers.*','teams.name')
        ->get();
        return View('misc.customers-export')->with('data', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportCustomers()
    {
        $data = DB::table('customers')
        ->join('teams', 'customers.team_id', '=', 'teams.id')
        ->select('customers.*','teams.name')
        ->get();
        //return view('misc.customers-export')->with('data', $data);
        return Datatables::of($data)
        ->addColumn('view', function($data) {
            return '<div style="text-align:center"><a href="'.route('cus.view',$data->id).'" class="btn btn-primary btn-sm">Accéder</a></div>';
        })
        ->addColumn('progress', function($data) {
            $rand = rand(1, 12);
            $percent = ($rand / 12) * 100;
            return '<div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: '.$percent.'%;" aria-valuenow="'.$rand.'" aria-valuemin="0" aria-valuemax="12"></div>
            </div>';
        })
        ->rawColumns(['view', 'progress'])
        ->make(true);
    }

    public function exportCustomersByTeamId($id)
    {
        $data = DB::table('customers')->where('team_id', $id)->get();
        return Datatables::of($data)
        ->addColumn('view', function($data) {
            return '<div style="text-align:center"><a href="'.route('cus.view',$data->id).'" class="btn btn-primary btn-sm">Accéder</a></div>';
        })
        ->addColumn('progress', function($data) {
            $rand = rand(1, 12);
            $percent = ($rand / 12) * 100;
            return '<div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: '.$percent.'%;" aria-valuenow="'.$rand.'" aria-valuemin="0" aria-valuemax="12"></div>
            </div>';
        })
        ->rawColumns(['view','progress'])
        ->make(true);
    }
}
