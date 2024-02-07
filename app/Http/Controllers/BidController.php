<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bidsdetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class BidController extends Controller
{

    public function biding(Request $request,$id)
    {

        $this->validate($request, [
            'biding_price' => 'required',

        ]);

        $user= DB::table('products')
        ->select('user_id')
        ->where('id', '=',$id )
        ->value('user_id');

        $phone= DB::table('products')
        ->select(DB::raw('contact_no'))
        ->where('id', '=',$id )
        ->value('contact_no');

        $product= DB::table('products')
        ->select(DB::raw('title'))
        ->where('id', '=',$id )
        ->value('title');

        $username= DB::table('users')
                ->select(DB::raw('name'))
                ->where('id', '=',$user )
                ->value('name');


        $input = $request->all();
        $input['product_id']=$id;
        $input['product_name']=$product;
        $input['seller_id']=$user;
        $input['seller_name']=$username;
        $input['seller_phone']=$phone;
        $input['contact_no']=Auth::user()->contact_no;
        $input['customer_name']=Auth::user()->name;

        $customer=$input['customer_name'];
        $customers= DB::table('users')
                ->select(DB::raw('id'))
                ->where('name', '=',$customer )
                ->value('id');
        $input['customer_id']=$customers;
        Bidsdetail::create($input);
        return redirect('/welcome1')->with('status', 'Biding Price sent to Seller Successfully ✔✔✔');
    }

    public function biding1(Request $request,$id)
    {


        $this->validate($request, [
            'biding_price' => 'required',

        ]);

        $user= DB::table('products')
        ->select('user_id')
        ->where('id', '=',$id )
        ->value('user_id');

        $phone= DB::table('products')
        ->select(DB::raw('contact_no'))
        ->where('id', '=',$id )
        ->value('contact_no');

        $product= DB::table('products')
        ->select(DB::raw('title'))
        ->where('id', '=',$id )
        ->value('title');

        $username= DB::table('users')
                ->select(DB::raw('name'))
                ->where('id', '=',$user )
                ->value('name');


        $input = $request->all();
        $input['product_id']=$id;
        $input['product_name']=$product;
        $input['seller_id']=$user;
        $input['seller_name']=$username;
        $input['seller_phone']=$phone;
        $input['contact_no']=Auth::user()->contact_no;
        $input['customer_name']=Auth::user()->name;
        $input['status']="Pending";
        $customer=$input['customer_name'];
        $customers= DB::table('users')
                ->select(DB::raw('id'))
                ->where('name', '=',$customer )
                ->value('id');
        $input['customer_id']=$customers;
        Bidsdetail::create($input);
        return redirect('/')->with('status', 'Biding Price sent to Seller Successfully ✔✔✔');
    }

    public function biding2(Request $request,$id)
    {


        $this->validate($request, [
            'biding_price' => 'required',

        ]);

        $user= DB::table('products')
        ->select('user_id')
        ->where('id', '=',$id )
        ->value('user_id');

        $phone= DB::table('products')
        ->select(DB::raw('contact_no'))
        ->where('id', '=',$id )
        ->value('contact_no');

        $product= DB::table('products')
        ->select(DB::raw('title'))
        ->where('id', '=',$id )
        ->value('title');

        $username= DB::table('users')
                ->select(DB::raw('name'))
                ->where('id', '=',$user )
                ->value('name');


        $input = $request->all();
        $input['product_id']=$id;
        $input['product_name']=$product;
        $input['seller_id']=$user;
        $input['seller_name']=$username;
        $input['seller_phone']=$phone;
        $input['contact_no']=Auth::user()->contact_no;
        $input['customer_name']=Auth::user()->name;
        $input['status']="Pending";
        $customer=$input['customer_name'];
        $customers= DB::table('users')
                ->select(DB::raw('id'))
                ->where('name', '=',$customer )
                ->value('id');
        $input['customer_id']=$customers;
        Bidsdetail::create($input);
        return redirect('Bid')->with('status', 'Biding Price sent to Seller Successfully ✔✔✔');
    }
    public function biding3(Request $request,$id)
    {


        $this->validate($request, [
            'biding_price' => 'required',

        ]);

        $user= DB::table('products')
        ->select('user_id')
        ->where('id', '=',$id )
        ->value('user_id');

        $phone= DB::table('products')
        ->select(DB::raw('contact_no'))
        ->where('id', '=',$id )
        ->value('contact_no');

        $product= DB::table('products')
        ->select(DB::raw('title'))
        ->where('id', '=',$id )
        ->value('title');

        $username= DB::table('users')
                ->select(DB::raw('name'))
                ->where('id', '=',$user )
                ->value('name');


        $input = $request->all();
        $input['product_id']=$id;
        $input['product_name']=$product;
        $input['seller_id']=$user;
        $input['seller_name']=$username;
        $input['seller_phone']=$phone;
        $input['contact_no']=Auth::user()->contact_no;
        $input['customer_name']=Auth::user()->name;
        $input['status']="Pending";

        $customer=$input['customer_name'];
        $customers= DB::table('users')
                ->select(DB::raw('id'))
                ->where('name', '=',$customer )
                ->value('id');
        $input['customer_id']=$customers;
        Bidsdetail::create($input);
        return redirect('Bid')->with('status', 'Biding Price sent to Seller Successfully ✔✔✔');
    }

    public function BidingDetails()
    {
        $bidsdetails = Bidsdetail::all();
        return view('BidingDetails',compact('bidsdetails'));
    }
    public function BidingDetails1()
    {
        $bidsdetails = Bidsdetail::all();
        return view('BidingDetails1',compact('bidsdetails'));
    }
    public function bids()
    {
        $bidsdetails = Bidsdetail::all();
        return view('BidingDetails2',compact('bidsdetails'));
    }
    public function accept1($id)
    {
        $status="Accepted";

        DB::table('bidsdetails')
        ->limit(1)
        ->where('id', $id)
        ->update(array('status' => $status));
        return redirect()->route('bids1')->with('success','Biding Order Accepted successfully');
    }
    public function reject1($id)
    {
        $status="Rejected";

        DB::table('bidsdetails')
        ->limit(1)
        ->where('id', $id)
        ->update(array('status' => $status));
        return redirect()->route('bids1')->with('reject','Biding Order Rejected successfully');
    }
    public function bids1()
    {

        $bidsdetails = Bidsdetail::all();
        return view('BidingDetails',compact('bidsdetails'));
    }
}

