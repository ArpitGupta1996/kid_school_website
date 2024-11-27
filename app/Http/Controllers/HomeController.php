<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about-us');
    }

    public function class(Request $request)
    {
        // return $request;
        return view('classes');
    }

    public function schoolfacility()
    {
        return view('facility');
    }

    public function popularteacher()
    {
        return view('popular-teacher');
    }

    public function becometeacher()
    {
        return view('become-teacher');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function testimonial(){
        return view('testimonial');
    }

    public function contact(Request $request){
        // return $request;

        return view('contact');
    }


    public function contactsave(Request $request){
        // return $request;

        $data = Contact::create([
            'name'=> $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Your Details send to admin !!');
    }

    public function saveappointemnt(Request $request){
        // return $request;

        $data = appointment::create([
            'guardian_name' => $request->guardian_name,
            'guardian_email' => $request->guardian_email ,
            'child_name' => $request->child_name ,
            'child_age' => $request->child_age,
            'message' => $request->message
        ]);

        return redirect()->back()->with('message', 'Appointment Details send to Admin, Admin will Contact soon !!');
    }
}
