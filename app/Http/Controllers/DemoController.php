<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function logic(Request $request){
        $even=false;
        $number=19;
        $totalNumberOfMales=100;
        $totalNumberOfFemales=20;
        return view('demo.condition',['even'=>$even,'number'=>$number,'m'=>$totalNumberOfMales,'f'=>$totalNumberOfFemales]);
    }
}
