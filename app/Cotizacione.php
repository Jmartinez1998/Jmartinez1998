<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cotizacione extends Model
{
   /**
     * Belongs to category
     * @return BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
