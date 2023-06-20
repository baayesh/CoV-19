<?php

namespace App\Http\Controllers;

use App\Models\help_and_guide;
use Illuminate\Http\Request;

class HelpAndGuideController extends Controller
{
    public function store(Request $request)
    {
        $request -> validate([
            'link' => 'required',
            'description'=>  "required"
        ]);

        $helpAndGuide = new help_and_guide;

        $helpAndGuide -> link = $request -> input('link');
        $helpAndGuide -> description = $request -> input('description');
        $helpAndGuide -> user = $request -> user() -> name;

        $helpAndGuide -> save();

        return redirect() -> route('HelpAndGuide');
    }

    public function show()
    {
        $data = help_and_guide::all();
        return view ('HelpAndGuide', ['HelpAndGuide' => $data]);
    }  
    
}
