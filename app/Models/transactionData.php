<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionData extends Model
{

    public $customerName;
    public $tableNumber;
    public $serviceType;
    public $note;
    public $menus;
    public $id_cart;
}
