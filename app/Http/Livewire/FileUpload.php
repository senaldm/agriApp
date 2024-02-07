<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Bid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FileUpload extends Component
{
    use WithFileUploads;
    public  $title,$featured_image,$featured_image1,$category_id,$quantity_in_hand,$user_id,$pricing_structure_type,$published_at,
    $description,$price,$contact_no;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submit()
    {


        $validatedData = $this->validate([
            'title' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'price'=> 'required',
            'category_id'=> 'required',
            'description'=> 'required',
            'pricing_structure_type'=> 'required',
            'quantity_in_hand'=> 'required',
            'contact_no'=>'required'


        ]);
        

        if($validatedData['pricing_structure_type']=='OFFER')
        {
            $pricing_structure_type='App\Models\Offer';
        }

        else if($validatedData['pricing_structure_type']=='BID')
        {
            $pricing_structure_type='App\Models\Bid';
            Bid::factory(1)->create();
        }
        else if ($validatedData['pricing_structure_type']=='DEAL')
        {
            $pricing_structure_type='App\Models\Deal';
        }

        if($validatedData['category_id']=='Vegetables')
        {
            $category_id=1;
        }

        else if($validatedData['category_id']=='Fruits')
        {
            $category_id=2;
        }
        else if ($validatedData['category_id']=='Crops')
        {
            $category_id=3;
        }
        else if ($validatedData['category_id']=='Groceries')
        {
            $category_id=4;
        }
        else if ($validatedData['category_id']=='Spices')
        {
            $category_id=5;
        }
        else if ($validatedData['category_id']=='Coconuts')
        {
            $category_id=6;
        }
        $last_id= DB::table('bids')->latest()->value('id');
        $validatedData['category_id']=$category_id;
        $featured_image1 = $this->featured_image->store('images', 'public');
        $validatedData['featured_image'] = "storage/$featured_image1";
        $published_at= Carbon::now();
        $validatedData['pricing_structure_id']= $last_id;
        $validatedData['published_at'] = $published_at;
        $validatedData['pricing_structure_type']=$pricing_structure_type;
        $validatedData['user_id'] = Auth::user()->id;
        Product::create($validatedData);



        


        return redirect('/image-upload')->with('message', 'Image uploaded Successfully');


    }
    public function render()
    {
        return view('livewire.file-upload');
    }
}





