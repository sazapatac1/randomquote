<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    public static $quotes = array("The Black Knight Always Triumphs! - Monty Python", 
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return response()->json(['quote' => $randomQuote]);
    }
    
    public static function getImage()
    {
        $randomNumber = (rand(1,15));
        $url = 'https://myimagesteisbucket.s3.amazonaws.com/img/image'.$randomNumber.'.jpg';
        return view('image.index', ['url' => $url, 'server_ip' => gethostbyname(gethostname())]);
    }

}
