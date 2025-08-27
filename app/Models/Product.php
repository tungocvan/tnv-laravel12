<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ProductStock;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description', 'image','details'
    ];
    
    protected $casts = [
        'details' => 'json'    
    ];
    public function stocks(): HasMany
    {
        return $this->hasMany(ProductStock::class);
    }
}
