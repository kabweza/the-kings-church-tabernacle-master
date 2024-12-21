<?php

namespace App\Http\Controllers;

use Mail;
use App\Post;
use App\Book;
use App\Slider;
use App\Event;
use App\Sermon;
use App\About;
use App\Mission;
use App\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getContact() { 

       return view('pages.contacts'); 
      } 


    public function saveContact(Request $request) { 

           $this->validate($request, [
               'name' => 'required',
               'email' => 'required|email',
               'phone_number' => 'required',
               'message' => 'required'
           ]);

           $contact = new Contact;

           $contact->name = $request->name;
           $contact->email = $request->email;
           $contact->phone_number = $request->phone_number;
           $contact->message = $request->message;

           $contact->save();

           $data =  array(
                            'name' => $request->name,
                            'email' => $request->email,
                            'phone_number' => $request->phone_number,
                            'message_content' => $request->message,
                        );

           Mail::send('emailTemplate.emailtemplate',$data , function($message) use ($request) {
                             $message->from("no-reply@kingsglobaltabernacle.com");
                             $message->to('thekingsglobal@gmail.com');
                          });
           
           return redirect()->back()->with(['success' => 'Thank you for contact us!']);

       }


    public function lastEventPage($title ) {

        $events = Event::where('eventTitle', $title)->get()->toArray();
        if (sizeof($events) != 0) {
            $title = $events['0']['eventTitle'];
            $content = $events['0']['content'];
            $location = $events['0']['location'];
            $start = $events['0']['startingTime'];
            $end = $events['0']['endingTime'];
            $picture = $events['0']['picture'];
        return view('pages.lastEventPage',
            [
                'title' => $title,
                'content' => $content,
                'location' => $location,
                'start' => $start,
                'end' => $end,
                'picture' => $picture,                             
            ]);
    }
}

    //
     public function requestPrayer(){

        return view('pages.requestPrayer');
    }

     public function mission(){

        return view('pages.mission');
    }

     public function careMinistry(){

        return view('pages.careMinistry');
    }

     public function schedule(){

        return view('pages.schedule');
    }

     public function activities(){

        return view('pages.activities');
    }

    public function ipn(){

        return view('pages.ipn');
    }


    public function index(){

        $sermons = Sermon::where('created_at', 'DESC')->paginate(6);

    	return view('advent');
    }

    public function contact() {

        return view('pages.contacts');
    } 

     public function event() {

         $events = Event::orderBy('created_at', 'DESC')->paginate(6);

        return view('pages.events',
            [
                'events' => $events,
            ]);
    } 

    public function book() {

        $books = Book::orderBy('created_at', 'DESC')->paginate(6);

        return view('pages.books',
            [
                'books' => $books,
            ]);
    } 
}
