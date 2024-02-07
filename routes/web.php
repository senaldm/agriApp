<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\FeedbackController;


Route::get('/', HomeController::class);
Route::get('/page/{pageno}', HomeController::class,'page');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'login']);

Route::get('chart-js', [ChartController::class, 'index'])->name('chart-js');
Route::get('chartprice', [ChartController::class, 'index1']);
Route::get('/show', [HomeController::class, 'show']);
Route::get('/About', [HomeController::class, 'About']);
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/Categories', [ProductController::class, 'Categories'])->name('/Categories');
Route::get('/Vegetables', [HomeController::class,'Vegetables']);
Route::get('/Fruits', [HomeController::class,'Fruits']);
Route::get('/Crops', [HomeController::class,'Crops']);
Route::get('/Groceries', [HomeController::class,'Groceries']);
Route::get('/Spices', [HomeController::class,'Spices']);
Route::get('/Coconut', [HomeController::class,'Coconut']);
Route::get('/Latest', [HomeController::class,'Latest']);
Route::get('Subscribe', [SubscribeController::class, 'index']);
Route::post('store-form', [SubscribeController::class, 'store']);
Route::post('store-feedback', [ProductController::class, 'storefeedback']);
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::get('/Bid', [HomeController::class, 'Bid']);
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
Route::get('Rate', [ProductController::class, 'Rate'])->name('Rate');
Route::get('/Trend', [HomeController::class, 'Trend']);
Route::get('/Home', HomeController::class,'Home')->middleware('role:admin');
Route::post('/Search', [ProductController::class, 'search'])->name('Search');



Route::get('/search-with-pagination', function ()
{
    return view('livewire.home');
});


Route::get('image-upload', function ()
{
    return view('default');
});


Route::post('/contact', [OrderlistController::class, 'ContactUsForm']);
Route::get('/index1', [ProductController2::class, 'index1'])->name('index1');
Route::post('/store1', [ProductController2::class, 'store1'])->name('store1');
Route::get('/edit1/{id}', [ProductController2::class, 'edit1']);
Route::post('/update1/{id}', [ProductController2::class, 'update1']);
Route::get('/show1/{id}', [ProductController2::class, 'show1']);
Route::get('create1', [ProductController2::class, 'create1']);
Route::get('/BidingDetails', [BidController::class, 'BidingDetails'])->name('BidingDetails');
Route::get('/BidingDetails1', [BidController::class, 'BidingDetails1'])->name('BidingDetails1');
Route::get('/feedbacks', [FeedbackController::class, 'feedbacks'])->name('feedbacks');
Route::get('/subscribers', [FeedbackController::class, 'subscribers'])->name('subscribers');
Route::get('/orders', [OrderlistController::class, 'orders'])->name('orders');
Route::get('/orders1', [OrderlistController::class, 'orders1'])->name('orders1');
Route::get('/orders2', [OrderlistController::class, 'orders2'])->name('orders2');
Route::get('/bids', [BidController::class, 'bids'])->name('bids');
Route::post('/biding2/{id}', [BidController::class, 'biding2'])->name('biding2');
Route::post('/biding3/{id}', [BidController::class, 'biding3'])->name('biding3');
Route::get('/accept/{id}/{quantity}/{oid}', [OrderlistController::class, 'accept'])->name('accept');
Route::get('/reject/{id}/{quantity}/{oid}', [OrderlistController::class, 'reject'])->name('reject');
Route::get('/accept1/{id}', [BidController::class, 'accept1'])->name('accept1');
Route::get('/reject1/{id}', [BidController::class, 'reject1'])->name('reject1');
Route::get('/bids1', [BidController::class, 'bids1'])->name('bids1');
Route::get('/Stock', [ProductController::class, 'Stock'])->name('Stock');
Route::get('/emptycart', [OrderlistController::class, 'EmptyCart'])->name('emptycart');
Route::get('/Statement', [OrderlistController::class, 'Statement'])->name('Statement');
Route::get('/Market', [ProductController2::class, 'Market'])->name('Market');
Route::post('/upload_price', [ProductController::class, 'storeprice'])->name('upload_price');
Route::get('/edit_price', [ProductController::class, 'editprice'])->name('edit_price');
Route::get('/update_price/{id}', [ProductController::class, 'updateprice'])->name('update_price');
Route::get('/update_price1/{id}', [ProductController::class, 'updateprice1'])->name('update_price1');
Route::get('/Bid1', [HomeController::class, 'Bid1']);
Route::get('/show_price', [ProductController::class, 'showprice'])->name('show_price');
Route::post('/update_market', [ProductController::class, 'updatemarket'])->name('update_market');
Route::get('/showmarketprice', [ProductController::class, 'showmarketprice'])->name('showmarketprice');
Route::get('/Editdate/{id}', [ProductController2::class, 'editdate']);
Route::get('BidHigh1/{id}', [HomeController::class, 'BidHigh1'])->name('BidHigh1');
Route::post('BidEdit/{id}', [ProductController2::class, 'BidEdit'])->name('BidEdit');
Route::get('BidEdit1/{id}', [ProductController2::class, 'BidEdit1'])->name('BidEdit1');
Route::get('/searchmarketprice', [ProductController::class, 'searchmarketprice'])->name('searchmarketprice');
Route::get('/updatemarket1', [ProductController::class, 'updatemarket1'])->name('updatemarket1');
Route::post('/updatemarketnew/{id}', [ProductController::class, 'updatemarketnew'])->name('updatemarketnew');
Route::get('/marketsprice1', [ProductController::class, 'marketsprice1']);
Route::post('/Atmarketsprice', [ProductController::class, 'Atmarketsprice'])->name('Atmarketsprice');


Route::group(['middleware' => ['auth']], function()
{
    Route::get('image-upload', function ()
    {
    return view('default');
    });
    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::post('/biding/{id}', [BidController::class, 'biding'])->name('biding');
    Route::post('/biding1/{id}', [BidController::class, 'biding1'])->name('biding1');
    Route::get('/welcome1', [HomeController::class, 'welcome1']);
    Route::get('/checkout', [HomeController::class, 'checkout']);
    Route::get('/checkout1', [HomeController::class, 'checkout1']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController2::class);
    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::get('BidHigh/{id}', [HomeController::class, 'BidHigh'])->name('BidHigh');
    Route::get('BidHighSeller/{id}', [HomeController::class, 'BidHighSeller'])->name('BidHighSeller');
    Route::get('/Bidend', [HomeController::class, 'Bidend'])->name('Bidend');
    Route::get('/Bidexpiry', [HomeController::class, 'Bidexpiry'])->name('Bidexpiry');
});



