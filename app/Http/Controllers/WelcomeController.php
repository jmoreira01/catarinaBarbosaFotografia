<?php

namespace App\Http\Controllers;

use App\Image;
use App\Organization;
use App\Service;
use App\Testimonal;
use App\Video;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organizations_id = 1;
        $visibility1 = 1;


        $videos = Video::all();
        $images = Image::all();
        $services = Service::all();
        $organizations = Organization::find($organizations_id);
        $testimonals = Testimonal::where('visibility','=',1)->get();


        return view('welcome', [
            'videos' => $videos,
            'images' => $images ,
            'services' => $services,
            'organizations' => $organizations,
            'testimonals' => $testimonals,
        ]);
    }
}
