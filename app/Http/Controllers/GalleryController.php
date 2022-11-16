<?php

namespace App\Http\Controllers;

use App\Image;
use App\Organization;
use App\Service;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Service $service)
    {
        $organizations_id = 1;

        $services = Service::all();
        $organizations = Organization::find($organizations_id);
        $images = Image::where('service_id',$service->id)->get();
        return view('dashboard.pages.indexGallery', ['service'=>$service, 'images'=>$images, 'organizations' => $organizations, 'services'=> $services]);
    }
}
