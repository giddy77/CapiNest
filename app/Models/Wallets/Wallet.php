<?php

namespace App\Models\Wallets;

use App\Models\Transactions\Transaction;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];

    protected $appends = ['balance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getBalanceAttribute()
    {
        $income = $this->transactions()
            ->where('transaction_type', 'income')
            ->sum('amount');

        $expense = $this->transactions()
            ->where('transaction_type', 'expense')
            ->sum('amount');

        return $income - $expense;
    }
}
