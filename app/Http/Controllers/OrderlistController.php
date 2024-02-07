<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ordering;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;

class OrderlistController extends Controller
{
    public $product,$quantity,$price,$id,$image;
    public function ContactUsForm(Request $request)
    {

        if(session()->get('cart')==true)
        {
            foreach(session('cart') as $id => $details)
            {

                $product= $details['name'];
                $quantity=$details['quantity'];
                $price= $details['price'];
                $image=$details['image'];
                $description=$details['description'];
                $productId= $id ;

                $user= DB::table('products')
                ->select('user_id')
                ->where('id', '=',$productId )
                ->value('user_id');
                

                $phone= DB::table('products')
                ->select(DB::raw('contact_no'))
                ->where('id', '=',$productId )
                ->value('contact_no');


                $username= DB::table('users')
                ->select(DB::raw('name'))
                ->where('id', '=',$user )
                ->value('name');

                $Orderlist = new Ordering;
                $Orderlist->pid=$productId;
                $Orderlist->seller_id=$user;
                $Orderlist->seller_name=$username;
                $Orderlist->seller_phone=$phone;
                $Orderlist->customer_name = $request->name;

                $customer=$request->name;

                $customers= DB::table('users')
                ->select(DB::raw('id'))
                ->where('name', '=',$customer )
                ->value('id');

                $Orderlist->customer_id = $customers;
                $Orderlist->email = $request->email;
                $Orderlist->address = $request->address;
                $Orderlist->city = $request->city;
                $Orderlist->phone = $request->phone;
                $Orderlist->district= $request->district;
                $Orderlist->quantity=$quantity;
                $Orderlist->price=$price;
                $Orderlist->description=$description;
                $Orderlist->product=$product;
                $Orderlist->featured_image=$image;
                $Orderlist->status="Pending";
                $Orderlist->save();

                if($id)
                {
                    $cart = session()->get('cart');
                    if(isset($cart[$id])) {
                        unset($cart[$id]);
                        session()->put('cart', $cart);
                    }

                }


            }
            
           $emailTo='seller';
      
            $email = DB::table('users')
                ->select(DB::raw('email'))
                ->where('id', '=', $user)
                ->value('email');
            Mail::to($email)->send(new WelcomeMail($username,$emailTo));
            new welcomeMail($username, $emailTo);

        return redirect('/checkout1')->with('success', 'You have succesfully placed your order !! Thank you for shopping with us.');
        }

        return redirect('/checkout1')->with('error', 'Oops...Your Cart is Empty, Pls add some items to the cart');

    }
    public function EmptyCart()
    {
        if(session()->get('cart')==true)
        {
            foreach(session('cart') as $id => $details)
            {
                if($id)
                {
                    $cart = session()->get('cart');
                    if(isset($cart[$id]))
                    {
                        unset($cart[$id]);
                        session()->put('cart', $cart);
                    }
                }
            }
            return redirect('/cart')->with('success', 'You have succesfully Emptied your Cart..');
        }
        else
        {
            return redirect('/cart')->with('empty', 'Ooops, Your Cart is Empty');
        }
    }
    public function orders()
    {
        $orderings = Ordering::all();
        return view('OrdersDetails',compact('orderings'));
    }
    public function orders1()
    {

        $orderings = Ordering::all();
        return view('OrdersDetails1',compact('orderings'));
    }
    public function orders2()
    {
        $orderings = Ordering::all();
        return view('OrdersDetails2',compact('orderings'));
    }

    public function statement()
    {

        $date= Carbon::now();
        $lastMonth =  $date->subMonth()->format('m');


        $orderings = DB::table('orderings')
        ->where('created_at','LIKE','%'. $lastMonth.'%')
        ->get();

        return view('Statement',compact('orderings'));
    }
    public function accept($id,$quantity,$oid)
    {


        $quantity_hand= DB::table('products')
        ->select(DB::raw('quantity_in_hand'))
        ->where('id', '=',$id )
        ->value('quantity_in_hand');

        $quantity1= $quantity_hand-$quantity;

        DB::table('products')
        ->limit(1)
        ->where('id', $id)
        ->update(array('quantity_in_hand' => $quantity1));

        $status="Accepted";

        DB::table('orderings')
        ->where('id', '=', $oid)
        ->update(array('status' => $status));

        $email=DB::table('orderings')
                    ->select(DB::raw('email'))
                    ->where('id','=',$oid)
                    ->value('email');
       
        $user_name = DB::table('orderings')
            ->select(DB::raw('customer_name'))
            ->where('id','=', $oid)
            ->value('customer_name');
        $emailTo = 'customer';
        Mail::to($email)->send(new WelcomeMail($user_name, $emailTo));
        new welcomeMail($user_name, $emailTo);

        return redirect()->route('orders1')->with('success','Order Accepted successfully');


    }

    public function reject($id,$quantity,$oid)
    {
        $stat= DB::table('orderings')
        ->select(DB::raw('status'))
        ->where('id', '=',$oid )
        ->value('status');


        if($stat=="Accepted")
        {
        $quantity_hand= DB::table('products')
        ->select(DB::raw('quantity_in_hand'))
        ->where('id', '=',$id )
        ->value('quantity_in_hand');

        $quantity1= $quantity_hand+ $quantity;
        DB::table('products')
        ->limit(1)
        ->where('id', $id)
        ->update(array('quantity_in_hand' => $quantity1));
        }


        $status="Rejected";

        DB::table('orderings')
        ->where('id', '=', $oid)
        ->update(array('status' => $status));

        $email = DB::table('orderings')
                    ->select(DB::raw('email'))
                    ->where('id', '=', $oid)
                    ->value('email');


        $user_name = DB::table('orderings')
                    ->select(DB::raw('customer_name'))
                    ->where('id', '=', $oid)
                    ->value('customer_name');
        
        $emailTo = 'orderRejected';

        Mail::to($email)->send(new WelcomeMail($user_name, $emailTo));
        new welcomeMail($user_name, $emailTo);
  

        return redirect()->route('orders1')->with('reject','Order Rejected successfully');
    }

}
