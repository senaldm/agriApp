@extends('layouts.app2')
@section('content')

<form wire:submit.prevent="submit" enctype="multipart/form-data">

    <div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputName">Product Name:</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Product Name" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputId">Product Category Id:</label>
        <select id='category_id' class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="description">
            <option value="Vegetables" selected="selected">Vegetables </option>
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
        <input type="text" class="form-control" id="price" placeholder="Enter Product Price" wire:model="price">
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="description">Pricing Structure :</label>
        <select id='description' class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="description">
            <option value="Per Kg" selected="selected">Per Kg </option>
            <option value="Per Item">Per Item</option>
        </select>

        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="pricing_structure_type">Product pricing category :</label>
        <select id='pricing_structure_type' class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out  m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" wire:model="pricing_structure_type">
            <option value="OFFER" selected="selected"> OFFER</option>
            <option value="BID">BID</option>
            <option value="DEAL">DEAL</option>

        </select>
        @error('pricing_structure_type') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputquantity">Available Quantity:</label>
        <input type="text" class="form-control" id="exampleInputquantity" placeholder="specify Available Quantity " wire:model="quantity_in_hand">
        @error('quantity_in_hand') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputNo">Contact Number</label>
        <input type="text" class="form-control" id="contact_no" placeholder="Enter your phone number" wire:model="contact_no">
        @error('contact_no') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputfile">File:</label>
        <input type="file" class="form-control" id="exampleInputfile" wire:model="featured_image">
        @error('featured_image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-success">Save</button>


</form>

@endsection