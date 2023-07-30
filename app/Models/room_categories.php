<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_categories extends Model
{
    use HasFactory;
    protected $table = "room_categories";
    protected $primarykey = "room_category_id";
}
