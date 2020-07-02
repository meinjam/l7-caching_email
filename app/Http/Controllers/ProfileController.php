<?php

namespace App\Http\Controllers;

use App\Mail\SampleEmail;
use App\Profile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ProfileController extends Controller {

    public function email() {

        $profile = Profile::create( [
            'name'  => 'Joti Sarkar',
            'email' => 'injam.bd.jsr@gmail.com',
            'token' => Str::random( 25 ),
        ] );

        Mail::to( $profile->email )->queue( new SampleEmail( $profile ) );
        // Mail::to( $profile->email )->send( new SampleEmail( $profile ) );
        return view( 'email' );
    }
}
