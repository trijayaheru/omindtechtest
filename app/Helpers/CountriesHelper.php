<?php namespace App\Helpers;
use Illuminate\Support\Facades\Cache;
use Webpatser\Countries\Countries;

class CountriesHelper extends Helper {

    public static function getList(){

        if(!Cache::has('countries')){
            $countries  = Countries::all();
            $list       = [];
            foreach($countries as $country){
                $list[$country->iso_3166_3] = $country->name;
            }

            Cache::put('countries', $list, 9999);
        }

        return Cache::get('countries');
    }
}
