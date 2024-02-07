<?php
namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Contact;

class FeedbackController extends Controller
{

    public function feedbacks()
    {
        $messages = Message::all();
        return view('subscriberfeedbacks',compact('messages'));
    }
    public function subscribers()
    {
        $contacts = Contact::all();
        return view('Subscriber',compact('contacts'));
    }
}
