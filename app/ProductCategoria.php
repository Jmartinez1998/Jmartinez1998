<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategoria extends Model
{
    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Producto::class);
    }
}
