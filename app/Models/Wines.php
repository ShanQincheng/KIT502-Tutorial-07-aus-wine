<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// @mixin \Eloquent
class Wines extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Wines';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID', 'Name', 'Type', 'Quantity', 'Price', 'Region'];
}