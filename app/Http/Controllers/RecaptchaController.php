<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class RecaptchaController extends Controller
{
    //

    public function test(Request $request){


      $token = $request->Input('g-recaptcha-response');

      if($token){

        //$client = new Client(['base_url'=>'put the api url eg http://api.twitter.com']);
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => array(
                  'secret'   => '6LcmehUUAAAAAKazRSXquvwOOGevAnByWh79kOb',
                  'response' => $token
               )
         ]);
      $results = json_decode($response->getBody()->getContents());

          if($results->success){

              Session::flash('success','you have been verified');

          }else{
             Session::flash('error',$results->error_code);
          }


      }else{
        Session::flash('error','Please verify that you are not a robot before submitting');

      }
      return redirect()->back();

    }
}
