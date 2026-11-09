<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionLine extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionLineFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'status',
    ];

    public function productionLine()
    {
    return $this->belongsTo(ProductionLine::class);
    }

}
