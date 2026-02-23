<?php

namespace App\Enum\Transactions;

enum TransactionType: string
{
    case INCOME = 'income';

    case EXPENSE = 'expense';
}
