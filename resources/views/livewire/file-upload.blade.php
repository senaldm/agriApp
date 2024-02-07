<form wire:submit.prevent="submit" enctype="multipart/form-data" style="background-color:#E6E6FA">
    <div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="pull-right ">
        <a class="btn btn-primary" href="{{ url('searchmarketprice') }}"> View Market Prices</a>
    </div>

    <div class="form-group mt-5">
        <label for="exampleInputName">Product Name:</label>
        <input type="text" class="form-control text-xl" id="exampleInputName" placeholder="Enter Product Name" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputId">Product Category :</label>
        <select id='category_id' class="form-select text-xl appearance-none block w-full px-3 py-1.5  font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="category_id">
            <option value="" selected="selected"> </option>
            <option value="Vegetables">Vegetables </option>
            <option value="Fruits">Fruits</option>
            <option value="Crops">Crops</option>
            <option value="Groceries">Groceries</option>
            <option value="Spices">Spices</option>
            <option value="Coconuts">Coconuts</option>

        </select>
        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="price">Product Price :</label>
        <input type="text" class="form-control text-xl" id="price" placeholder="Enter Product Price" wire:model="price">
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="description">Pricing Structure :</label>
        <select id='description' class="form-select text-xl appearance-none block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="description">
            <option value="" selected="selected"> </option>
            <option value="Per Kg">Per Kg </option>
            <option value="Per Item">Per Item</option>
        </select>

        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="pricing_structure_type">Product pricing category :</label>
        <select id='pricing_structure_type' class="form-select text-xl appearance-none block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="pricing_structure_type">
            <option value="" selected="selected"></option>
            <option value="OFFER"> OFFER</option>
            <option value="DEAL">DEAL</option>
            <option value="BID">BID</option>

        </select>
        @error('pricing_structure_type') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputquantity">Available Quantity:</label>
        <input type="text" class="form-control text-xl" id="exampleInputquantity" placeholder="Specify Available Quantity " wire:model="quantity_in_hand">
        @error('quantity_in_hand') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputNo">Contact Number</label>
        <input type="text" class="form-control text-xl" id="contact_no" placeholder="Enter your phone number" wire:model="contact_no">
        @error('contact_no') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputfile">File:</label>
        <input type="file" class="form-control file:bg-violet-50" id="exampleInputfile" wire:model="featured_image">
        @error('featured_image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-success active"> Save </button>


</form>

<!-- this is a email sending section which should  located in product controller  -->
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;



$emailTo = 'admin';
$user_name = DB::table('users')
    ->select(DB::raw('name'))
    ->where('id', '=', Auth::user()->name)
    ->value('name');
Mail::to('admin_1@agri.com')->send(new WelcomeMail($user_name, $emailTo));
new welcomeMail($user_name, $emailTo);
?>