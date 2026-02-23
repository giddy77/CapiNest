<?php

namespace App\Models\Users;

use App\Models\Wallets\Wallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/User.php

class User extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function getTotalBalanceAttribute()
    {
        return $this->wallets->sum(fn ($wallet) => $wallet->balance);
    }
}
