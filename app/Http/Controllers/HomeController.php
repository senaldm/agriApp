<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Ordering;
use App\Models\Bidsdetail;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome')
            ->with([
                'products' => Product::query()
                    ->with(['pricingStructure', 'seller'])
                    ->published()
                    ->paginate(12),
            ]);


    }

    public function Cart()
    {
        return view('Cart', ['url' => 'Cart']);
    }
    public function welcome1()
    {
        return view('welcome1')
            ->with([
                'products' => Product::query()
                    ->with(['pricingStructure', 'seller'])
                    ->published()
                    ->paginate(12),
            ]);
    }

    public function show()
    {
        return view('show', ['url' => 'show']);
    }
    public function About()
    {
        return view('About', ['url' => 'About']);
    }

    public function checkout()
    {

        if(session()->get('cart')==true)
        {
        return view('checkout');
        }
        else
        {
            return redirect('/cart')->with('empty', 'Ooops, Your Cart is Empty');
        }

    }
    public function checkout1()
    {

        return view('checkout');

    }

    public function chat()
    {
        return view('chat', ['url' => 'chat']);
    }

    public function welcome()
    {
        return view('welcome', ['url' => 'welcome']);
    }


    public function contactus()
    {
        return view('contactus', ['url' => 'contactus']);
    }

    public function cartnew()
    {

        return view('cartnew', ['url' => 'cartnew']);

    }

    public function login()
    {
        $role = Auth::user()->current_team_id;

            if($role==1)
            {
                return view('AdminDash');
            }

            else if($role==2)
            {
                return view('SellerDash');
            }

            else if($role==3)
            {
                return view('CustomerDash');
            }
            else
            {
                return view('ContractorDash');
            }

    }

    public function Vegetables()
    {
        $products = Product::all();
        return view('Categories.Vegetables', compact('products'));
    }
    public function Fruits()
    {
        $products = Product::all();
        return view('Categories.Fruits', compact('products'));
    }
    public function Crops()
    {
        $products = Product::all();
        return view('Categories.Crops', compact('products'));
    }
    public function Groceries()
    {
        $products = Product::all();
        return view('Categories.Groceries', compact('products'));
    }
    public function Spices()
    {
        $products = Product::all();
        return view('Categories.Spices', compact('products'));
    }
    public function Coconut()
    {
        $products = Product::all();
        return view('Categories.Coconut', compact('products'));
    }
    public function Latest()
    {
        $products= Product::orderBy('id', 'desc')->limit(8)->get();
        return view('Latest', compact('products'));
    }

    public function Trend()
    {

        $orderings= Ordering::orderBy('quantity', 'desc')->limit(4)->get();

        return view('TrendingProducts', compact('orderings'));
    }
    public function index()
    {

        return view('Home');
    }
    public function Bid()
    {
        $products = Product::all();
        return view('BidedProducts',compact('products'));
    }
    public function Bidend()
    {
        $products = Product::all();
        return view('Bidingenddate',compact('products'));
    }
    public function Bidexpiry()
    {
        $products = Product::all();
        return view('Bidexpiry',compact('products'));
    }
    public function Bid1()
    {
        $products = Product::all();
        return view('BidingLeaderBoardview',compact('products'));
    }

    public function BidHigh($id)
    {

        $bidsdetails1= Bidsdetail::select('product_id')->where('product_id','=',$id)->value('product_id');
        if($bidsdetails1 ==true )
        {
        $bidsdetails= Bidsdetail::select('biding_price','seller_phone','product_id','customer_name','seller_id')->where( 'product_id','=',$id)->groupBy('product_id','biding_price','seller_phone','customer_name','seller_id')->orderBy('biding_price','desc')->limit(1)->get();

        return view('BidedProducts1',compact('bidsdetails'));
        }

        else
        {

            $product= Product::find($id);
            return view('Bidsnew',compact('product'));
        }
    }
    public function BidHigh1($id)
    {

        $bidsdetails1= Bidsdetail::select('product_id')->where('product_id','=',$id)->value('product_id');
        if($bidsdetails1 ==true )
        {
        $bidsdetails= Bidsdetail::select('biding_price','seller_phone','product_id','customer_name','seller_id')->where( 'product_id','=',$id)->groupBy('product_id','biding_price','seller_phone','customer_name','seller_id')->orderBy('biding_price','desc')->limit(1)->get();

        return view('BidedProducts2',compact('bidsdetails'));
        }

        else
        {

            $product= Product::find($id);
            return view('Bidsnew2',compact('product'));
        }
    }
    public function BidHighSeller($id)
    {

        $bidsdetails1= Bidsdetail::select('product_id')->where('product_id','=',$id)->value('product_id');
        if($bidsdetails1 ==true )
        {
        $bidsdetails= Bidsdetail::select('biding_price','seller_phone','product_id','customer_name','seller_id')->where( 'product_id','=',$id)->groupBy('product_id','biding_price','seller_phone','customer_name','seller_id')->orderBy('biding_price','desc')->limit(1)->get();

        return view('BidedProductsSeller1',compact('bidsdetails'));
        }

        else
        {

            $product= Product::find($id);
            return view('Bidsnew1',compact('product'));
        }
    }

}
