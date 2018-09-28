<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use DB;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $teams = DB::table('teams')->select('name','id')->get();
        $view->with('teams', $teams);
    }
}
