<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // ADICIONE ESTA LINHA ABAIXO:
    protected $fillable = ['title', 'completed'];
}
