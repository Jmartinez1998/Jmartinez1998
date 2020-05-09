<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CotizacionRespuesta extends Model
{
    
    /**
     * Belongs to category
     * @return BelongsTo
     */
    public function cotizacion()
    {
        return $this->belongsTo(Cotizacione::class);
    }
}
 