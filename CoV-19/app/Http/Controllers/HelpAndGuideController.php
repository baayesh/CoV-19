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

        try
        {
        $helpAndGuide = new help_and_guide;

        $helpAndGuide -> link = $request -> input('link');
        $helpAndGuide -> description = $request -> input('description');
        $helpAndGuide -> user = $request -> user() -> name;

        $helpAndGuide -> save();

        return redirect() -> route('HelpAndGuide');
        }
        catch(\Exception)
        {
            return redirect() -> route('HelpAndGuide');
        }
        
    }

    public function show()
    {
        try
        {
            $data = help_and_guide::all();
            if($data->isEmpty()){
                return redirect() ->route('dashboard');
            }
            return view ('HelpAndGuide', ['HelpAndGuide' => $data]);
        }
        catch(\Exception)
        {
            abort(419);
        }

    }  
    
}
