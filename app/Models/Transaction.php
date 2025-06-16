<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    public $timestamps = false;
    protected $fillable = [
        'date_transaction',
        'total_price',
        'status',
        'method_payment',
        'id_customer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'total_price' => 'decimal:2',
        'date_transaction' => 'datetime',
    ];

    /**
     * Get the customer that owns the transaction.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    /**
     * Get the details for the transaction.
     */
    public function details()
    {
        // Atau transactionDetails() jika ingin lebih deskriptif
        return $this->hasMany(TransactionDetail::class, 'id_transaction', 'id_transaction');
    }
}
