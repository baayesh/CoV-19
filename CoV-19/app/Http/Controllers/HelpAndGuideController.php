<?php

namespace App\Http\Controllers;

use App\Models\help_and_guide;
use Illuminate\Http\Request;

class HelpAndGuideController extends Controller
{
    public function store(Request $request){
        $helpAndGuide = new help_and_guide;

        $helpAndGuide -> title = $request -> input('title');
        $helpAndGuide -> description = $request -> input('description');

        $helpAndGuide -> save();

        return redirect() -> route('read');
    }

    public function show(string $id){
        
    }
}
