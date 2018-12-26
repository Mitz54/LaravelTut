<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function page(Request $request)
    {
        $page_title = "New Home";

        // dd($request);   // var_dump and die;
        // dd($request->path());   // var_dump and die;
        switch($request->path())
        {
            case 'services':
                $page_title = "New Services";
            break;
            
            case 'contact-Us':
                $page_title = "New Contact Us";
            break;
            
            case 'about-Us':
                $page_title = "New About Us";
            break;            
        }
        
        return view('pages.static',  ['page_title' => $page_title]);
    }
}
