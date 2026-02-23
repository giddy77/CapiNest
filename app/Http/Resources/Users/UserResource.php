<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'total_balance' => $this->total_balance, //total balance from wallets, Fut: in cases of USD wallets, conversions need to be application acording to market value
            'wallets' => $this->wallets //get user wallets
        ];
    }
}
