<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about() {
        return view('pages.about');
    }
    public function services() {
        $data = [
            'title' => 'قائمة خدماتنا: ',
            'services' => [
                'شهادات الحفظ ','منهجية ممتعة و محفزة ',' دروس حية'
            ]
            ];
        return view('pages.services')->with($data);
        return view('pages.services');
        
    }

}
