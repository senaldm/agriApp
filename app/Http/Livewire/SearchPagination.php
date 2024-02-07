<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class SearchPagination extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.search-pagination',[
            'products' => Product::where('title','like', $searchTerm)->paginate(8)
        ]);
    }
}
