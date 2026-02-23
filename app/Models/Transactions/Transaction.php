<?php

namespace App\Models\Transactions;

use App\Enum\Transactions\TransactionType;
use App\Models\Wallets\Wallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'wallet_id',
        'transaction_type',
        'amount',
        'description',
    ];

    protected $casts = [
        'transaction_type' => TransactionType::class
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
