<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Ordering extends Model
{
    use HasFactory;
    public $fillable = ['pid','name', 'email', 'address', 'city','phone','district','quantity','price','description','product','featured_image','seller_id','seller-phone','customer_id','status'];
}




