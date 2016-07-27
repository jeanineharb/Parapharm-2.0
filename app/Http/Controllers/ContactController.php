<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller {
	
	public function getContactUsForm(){

        //Get all the data and store it inside Store Variable
		$data = Input::all();

        //Validation rules
		$rules = array (
            'name' => 'required', 
            'email' => 'required|email',  
			'message' => 'required|min:5|max:1000',
			'g-recaptcha-response' => 'required|recaptcha'
			);

        //Validate data
		$validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
		if ($validator -> passes()){
			//Send email to webmaster
			\Mail::send('emails.contact-form', ['data' => $data], function($message) use ($data)
			{
				$message
					->from($data['email'] , $data['name'])
					->replyTo($data['email'] , $data['name'])
					->to('jeanine.harb@gmail.com', 'Parapharm SAL')
					->subject('Contact Form - You\'ve Got Mail!');
			});

			//Send feedback email to client
			\Mail::send('emails.contact-form-feedback', ['data' => $data], function($message) use ($data)
			{
				$message
					->from('contact@parapharm.com.lb' , 'Parapharm SAL')
					->replyTo('contact@parapharm.com.lb' , 'Parapharm SAL')
					->to($data['email'], $data['name'])
					->bcc('jeanine.harb@net.usj.edu.lb')
					->subject('We\'ve successfully received your message!');
			});
            // Redirect to page
			return Redirect::route('contact')->with('success', 'Your message has been successfully sent. We will get back to you shortly. Thank You!');
		}
		else {
   			//return contact form with errors
			return Redirect::route('contact')->with('error', 'There are errors in your submission. Please try again.');
		}
	}

}