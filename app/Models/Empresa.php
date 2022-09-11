<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empresa extends Model
{
    use SoftDeletes;

    public $table = 'empresa';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'ruc'
    ];
}
