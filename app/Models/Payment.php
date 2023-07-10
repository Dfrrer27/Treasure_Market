<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $primaryKey = 'idmetodo_pago';

    protected $fillable = [
        'nombre',
    ];

    /**
     * Get the sales using the payment method.
    */
    public function sales()
    {
        return $this->hasMany(Sale::class, 'metodo_pago_idmetodo_pago');
    }
}
