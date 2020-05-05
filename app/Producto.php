<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
  /**
     * Belongs to category
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ProductCategoria::class, 'categoria_id');
    }
    public function cotizaciones()
    {
        return $this->hasMany(Cotizacione::class);
    }

}
