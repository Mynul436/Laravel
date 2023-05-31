<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,$model)
    {
        //

        $model ="\\App\\Models\\".ucfirst($model);

        return $model::orWhere($request->all())->get();

        
        //dd($model);
    }
}
