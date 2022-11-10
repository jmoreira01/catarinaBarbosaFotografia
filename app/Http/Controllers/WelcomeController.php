<?php

namespace App\Http\Controllers;

use App\Image;
use App\Organization;
use App\Service;
use App\Video;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        $images = Image::all();
        $services = Service::all();
        $organizations = Organization::all();

        return view('welcome', ['videos' => $videos, 'images' => $images , 'services' => $services, 'organizations' => $organizations]);
    }
}
