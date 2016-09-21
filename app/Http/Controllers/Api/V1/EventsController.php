<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Toin0u\Geocoder\Facade\Geocoder;

class EventsController extends ApiController
{

    public function index()
    {

        try {
            $geocode = Geocoder::geocode('London, United Kingdom');
            return $geocode->toArray();

        } catch (\Exception $e) {
            // Here we will get "The FreeGeoIpProvider does not support Street addresses." ;)
            echo $e->getMessage();
        }

    }


    public function show($id)
    {

    }


    public function save(Request $request)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
