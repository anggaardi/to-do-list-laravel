<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Pastikan nama tabel sudah benar
    protected $table = "todo";

    // Perbaiki nama properti menjadi 'fillable'
    protected $fillable = ["task", "is_done"];
}
