<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('hubungi_kami');
    }

    public function send(Request $request)
    {
        $contact = Contact::create($request->all());
    	// sent mail here
        $data = array(
            'name' => $request->get('contactName'),
            'email' => $request->get('contactEmail'),
            'user_message' => $request->get('contactMessage')
        );
        
        try {
            Mail::send('mail.contact',
                $data , function($message)use($request) {       
                    $message->from('bandunetwork@gmail.com', 'PT Trijasa');
                    $message->to($request->email, $request->name)->subject('Thanks for contacting us.');
                }
            );
        } catch(\Exception $e) {
            dd($e);
            return redirect('/hubungi-kami')->with('errStatus', 'Messages failed to sent. Please try again later...');
        }

    	return redirect('/hubungi-kami')->with('message', 'Thanks for contact with us. We will contact you shortly.');
    }
}
