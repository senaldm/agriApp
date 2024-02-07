<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Market;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function Stock()
    {
        $products = Product::all();
        return view('Stock', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {

        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        $product_id=$product->id;


        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }
        else
        {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->featured_image,
                "id"=>$product_id,
                "description"=>$product->description
            ];
        }
        $pageno = ceil(($product->id - 1) / 12);

        session()->put('cart', $cart);
        return redirect("/?page=$pageno")->with('success', 'Product added to cart successfully!');


    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function Rate()
    {

        return view('Rate', ['url' => 'Rate']);

    }
    public function Bid()
    {
        $products = Product::all();
        return view('BidedProducts',  compact('products'));

    }
    public function Categories()
    {

        return view('categories', ['url' => '/Categories']);

    }


     function storefeedback(Request $request)
     {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'feedback'=>'required'

        ]);

        $feed = new Message([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'feedback' => $request->get('feedback'),

        ]);
        $feed->save();
        return redirect('/contactus')->with('success', 'Your Feedback has been Recorded Successfully !!!');

     }
     function storeprice(Request $request)
     {

        $request->validate([
            'product_name'=>'required',
            'category_name'=>'required',
            'price'=>'required',
            'market_name'=>'required'

        ]);

        $name = $request->get('product_name');
        $name1 = ucfirst($name);
        $market= $request->get('market_name');
        $market1= ucfirst($market);
        $market = new Market([
            'product_name' => $name1,
            'user_id'=>Auth::user()->id,
            'category_name' => $request->get('category_name'),
            'price' => $request->get('price'),
            'market_name' => $market1

        ]);
        $market->save();
        return redirect('/edit_price')->with('success', 'Your Product price has been Recorded Successfully !!!');

     }
     function editprice()
     {

        $markets = Market::all();
        return view('MarketPrice',compact('markets'));

     }
     function updatemarket1()
     {

        $markets = Market::all();
        return view('marketprice1',compact('markets'));

     }
     function showmarketprice()
     {

        $markets = Market::all();
        return view('showmarketprice',compact('markets'));

     }

     function searchmarketprice()
     {


        return view('searchprice');

     }
     function updateprice($id)
     {
        $market= Market::find($id);
        return view('updateMarketPrice',compact('market'));

     }

     function updateprice1($id)
     {
        $market= Market::find($id);
        return view('marketprice2',compact('market'));

     }
     function marketsprice1()
     {

        return view('searchprice1');

     }

     public function updatemarket(Request $request)
     {
        $request->validate([
            'product_name'=>'required',
            'category_name'=>'required',
            'price'=>'required',
            'market_name'=>'required'

        ]);

        $name = $request->get('product_name');
        $name1 = ucfirst($name);
        $market= $request->get('market_name');
        $market1= ucfirst($market);
        $market = new Market([
            'product_name' => $name1,
            'user_id'=>Auth::user()->id,
            'category_name' => $request->get('category_name'),
            'price' => $request->get('price'),
            'market_name' => $market1

        ]);
        $market->save();
        return redirect('updatemarket1')->with('success','Product Price updated successfully');
     }

     public function updatemarketnew(Request $request,$id)
     {
        $request->validate([
            'product_name'=>'required',
            'category_name'=>'required',
            'price'=>'required',
            'market_name'=>'required'

        ]);

        $input = $request->all();
        $market = Market::find($id);
        $market->update($input);
        return redirect('updatemarket1')->with('success','Product Price updated successfully');
     }

     public function search(Request $request)
     {
        $request->validate([
            'product'=>'required',
            'market'=>'required'

        ]);

        $product_name= $request->product;
        $market_name=$request->market;

        $record= DB::table('markets')
        ->select(DB::raw('id,product_name,category_name,price,market_name,created_at'),DB::raw("DAYNAME(created_at) as day_name"), DB::raw("DAY(created_at) as day"))
        ->where('product_name', '=',$product_name)
        ->where('market_name','=',$market_name)
        ->WhereBetween('created_at', [ Carbon::now()->startOfWeek(Carbon::MONDAY), Carbon::now()->endOfWeek(Carbon::SUNDAY)])
        ->orderBy('day')->get();

         $data = [];

         foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->price;
          }

        $data['chart_data'] = json_encode($data);
        return view('chartprice', $data);


     }


     public function Atmarketsprice(Request $request)
     {
        $request->validate([
            'product'=>'required',

        ]);


        $product_name= $request->product;
        $record= DB::table('markets')
        ->select(DB::raw('id,product_name,category_name,price,market_name,created_at'))
        ->where('product_name', '=',$product_name)
        ->whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))
        ->get();

         $data = [];

         foreach($record as $row) {
            $data['label'][] = $row->market_name;
            $data['data'][] = (int) $row->price;
          }

        $data['chart_data'] = json_encode($data);
        return view('chartprice1', $data);

     }


}
