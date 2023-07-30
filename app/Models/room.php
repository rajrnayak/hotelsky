<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primarykey = 'room_id';

    public function RoomCategoryDetails(): BelongsTo
    {
        return $this->belongsTo(room_categories::class, 'room_room_category_id','room_category_id');
    }

}
