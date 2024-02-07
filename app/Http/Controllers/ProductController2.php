<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ProductController2 extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

        // set permission
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $products = Product::latest()->paginate(50);
        return view('products.index1',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        $products = Product::latest()->paginate(50);
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('products.create');
    }
    public function create1()
    {
        return view('products.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {

        return view('products.show',compact('product'));
    }
    public function Market()
    {

        return view('users.market');
    }
    public function show1($product1)
    {
        $product= Product::find($product1);
        return view('products.show1',compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    public function edit1($product1)
    {
        $product= Product::find($product1);
        return view('products.edit1',compact('product'));
    }

    public function BidEdit1($id)
    {
        $product= Product::find($id);
        return view('BidEdit',compact('product'));
    }
    public function BidEdit(Request $request,$id)
    {
        $request->validate([
            'Biddate' => 'required',

        ]);

        $input=$request->all();
        $dates= $input['Biddate'];
        $startDate = date('Y-m-d H:i:s', strtotime($dates));

        $price_Structure= DB::table('products')
        ->select('pricing_structure_id')
        ->where('id', '=',$id )
        ->value('pricing_structure_id');


        DB::table('bids')
        ->where('id', '=', $price_Structure)
        ->update(array('ends_at' => $startDate));



        return redirect('/Bidend')->with('success','Biding Ending Date Updated Successfully ✔✔✔✔✔✔✔✔');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'featured_image' => 'required',
            'price'=> 'required',
            'category_id'=> 'required',
            'quantity_in_hand'=> 'required',
            'user_id'=> 'required',
            'contact_no'=>'required'

        ]);


        $input = $request->all();
        $product = Product::find($id);
        $product->update($input);

        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    public function update1(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'featured_image' => 'required',
            'price'=> 'required',
            'category_id'=> 'required',
            'quantity_in_hand'=> 'required',
            'user_id'=> 'required',
            'contact_no'=>'required'

        ]);



        $input = $request->all();
        $product = Product::find($id);
        $product->update($input);
        return redirect()->route('index1')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $ImagePath = 'image/'.$product->image;
        unset($ImagePath);
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }

}
