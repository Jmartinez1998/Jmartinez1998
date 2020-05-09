<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cotizacione extends Model
{
   /**
     * Belongs to product
     * @return BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    public function cotizacionRespuesta()
    {
        return $this->hasMany(CotizacionRespuesta::class);
    }
}
