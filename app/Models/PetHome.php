<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHome extends Model
{
    use HasFactory;

    protected $table = 'pet-home';

    protected $fillable = ['originalName', 'path', 'mimeType', 'description'];

    public $timestamps = true;
}
