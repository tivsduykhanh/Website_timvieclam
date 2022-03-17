<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('business.aboutus', [
            'title' => 'Về chúng tôi'
        ]);
    }
}
