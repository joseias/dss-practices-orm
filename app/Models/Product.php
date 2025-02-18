<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function category(): BelongsTo{
        // Product tiene la clave ajena 'category_id’
        return $this->belongsTo(Category::class);
    }
}
