<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Owner extends Model
{
    public function owner()
    {
        return $this->hasMany(Product::class);
    }

}
