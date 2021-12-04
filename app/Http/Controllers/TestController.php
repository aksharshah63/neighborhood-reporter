<?php

namespace App\Http\Controllers;

use Mail;

class TestController extends Controller {

    public function test() {
        Mail::raw('On your birthday we wish for you that whatever you want most in life it comes to you just the way you imagined it or better. Happy birthday' , function ($message) {
              $message->to('as.sparkle21@gmail.com' , 'Das Patel')
              ->subject('Happy Birthday Wish!');
            });
            echo 'Birthday Message Send Successfully!';
    }

}
