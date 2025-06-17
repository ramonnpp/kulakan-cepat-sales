<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

    protected $fillable = [
        'name_store',
        'name_owner',
        'email',
        'no_phone',
        'password',
        'address',
        'status',
        'id_sales',
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = Hash::make($password);
        }
    }

    /**
     * Relasi ke Sales.
     */
    public function salesPerson()
    {
        return $this->belongsTo(Sales::class, 'id_sales', 'id_sales');
    }

    /**
     * Relasi ke semua transaksi (pesanan).
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_customer', 'id_customer');
    }

    /**
     * Relasi BARU: Hanya ke transaksi yang sudah selesai (FINISH).
     * Ini akan kita gunakan untuk menghitung total pembelian.
     */
    public function completedTransactions()
    {
        return $this->hasMany(Transaction::class, 'id_customer', 'id_customer')->where('status', 'FINISH');
    }

    /**
     * Relasi BARU: Catatan kunjungan untuk pelanggan ini.
     */
    public function visitNotes()
    {
        return $this->hasMany(CustomerVisitNote::class, 'id_customer', 'id_customer')->orderBy('created_at', 'desc');
    }
}
