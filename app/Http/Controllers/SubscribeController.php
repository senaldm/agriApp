<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class SubscribeController extends Controller
{
    public function index()
    {
        return view('Subscribe');
    }

    public function store(Request $request)
    {
        $Contact = new Contact;
        $Contact->email = $request->email;
        $Contact->save();
        return redirect('Subscribe')->with('status', 'You have succesfully subscribed to our Web App !!!');
    }
}

