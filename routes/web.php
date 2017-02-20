<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    /**
     * This are series of api calls to get news content from three newsapi
     * Broadcasting stations.
     * TRUE was included in the json_decode function to ensure that it would
     *Converted into an asscociative array.
     */
    $thenextweb = file_get_contents("https://newsapi.org/v1/articles?source=the-next-web&sortBy=latest&apiKey=ef09b09edcd3432a833a175bc6889692");
    $thenextwebobject = json_decode($thenextweb, TRUE);

    $techcrunch = file_get_contents("https://newsapi.org/v1/articles?source=techcrunch&sortBy=latest&apiKey=ef09b09edcd3432a833a175bc6889692");
    $techcrunchobject = json_decode($techcrunch, TRUE);

    $newscientist = file_get_contents("https://newsapi.org/v1/articles?source=new-scientist&sortBy=top&apiKey=ef09b09edcd3432a833a175bc6889692");
    $newscientistobject = json_decode($newscientist, TRUE);


   return view('index', array("thenextwebnews"=>$thenextwebobject, "newscientistnews" => $newscientistobject, "techcrunchnews"=>$techcrunchobject));

});

Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    $mailer->to("nwachukwu16@gmail.com")->send(new \App\Mail\Mymail($request->input("title")) );
    return redirect()->back();
})->name('sendmail');


Route::post('recaptcha','RecaptchaController@test')->name('recaptcha');
