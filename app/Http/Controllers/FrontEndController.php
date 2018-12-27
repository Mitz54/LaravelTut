<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontEndController extends Controller
{
    public function page(Request $request)
    {
        #get page from DB based on the slug
        $slug = $request->path();
        // $pages = Page::all();        #test  
        
        $page = Page::where('slug', $slug)
                    ->first();
        // dd($page->title);
        return view('pages.static', compact('page'));

        #no db
        // $page_title = "New Home";

        // // dd($request);   // var_dump and die;
        // // dd($request->path());   // var_dump and die;
        // switch($request->path())
        // {
        //     case 'services':
        //         $page_title = "New Services";
        //     break;
            
        //     case 'contact-Us':
        //         $page_title = "New Contact Us";
        //     break;
            
        //     case 'about-Us':
        //         $page_title = "New About Us";
        //     break;            
        // }

        // return view('pages.static',  ['page_title' => $page_title]);
        #end of no db
    }
}
