<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class menu extends Model
{
    use HasFactory;
    public function MenuTenant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_tenant');
    }
}
