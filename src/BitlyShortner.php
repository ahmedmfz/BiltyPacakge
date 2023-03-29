<?php 

namespace Bitly\BitlyShortner;
use Illuminate\Support\Facades\Http;

class BitlyShortner{
    
    public static function shorten($long_link = null){
        $response = \Http::withHeaders([
                    'Authorization' => config('bitly.token') ,
                        ])->post('https://api-ssl.bitly.com/v4/shorten',[
                            "domain"   => "bit.ly",
                            "long_url" => $long_link
                        ]);
        return json_decode($response)->link; 
    }

}