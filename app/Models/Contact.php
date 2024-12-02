<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];


    // public static function boot()
    // {


    //     // Mail::raw('Test Mail', function ($message){
    //     //     $message->to('arpitgupta19aug1996@gmail.com')->subject('Tets');
    //     // });


    //     // die;

    //     parent::boot();

    //     static::created(function ($item) {
    //         $adminEmail = "arpitgupta19aug1996@gmail.com";
    //         // dd($adminEmail);

    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
