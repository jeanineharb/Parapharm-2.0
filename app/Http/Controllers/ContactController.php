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
            // 'name' => 'required', 
            // 'email' => 'required|email',  
			'message' => 'required|min:5'
			);

        //Validate data
		$validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
		if ($validator -> passes()){

			\Mail::send('emails.feedback', $data, function($message) use ($data)
			{
                // $message->from($data['email'] , $data['name']); 
				$message->from('test@gmail.com', 'feedback contact form');
				$message->to('jeanine.harb@gmail.com', 'Jeanine')->cc('jeanine.harb@gmail.com')->subject('feedback form submit');
			});
            // Redirect to page
			return Redirect::route('home')->with('message', 'Your message has been sent. Thank You!');
            //return View::make('contact');  

		}else{
   			//return contact form with errors
			return Redirect::route('home')->with('error', 'There are errors in your submission. Please try again.');
		}
	}

}