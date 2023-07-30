<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class room_history extends Model
{
    use HasFactory;
    protected $table = 'room_bookings';
    protected $primarykey = 'room_booking_id';

    public function RoomCategoryDetails(): BelongsTo
    {
        return $this->belongsTo(room_categories::class, 'room_booking_room_category_id','room_category_id');
    }

    public function RoomDetails(): BelongsTo
    {
        return $this->belongsTo(room::class, 'room_booking_room_id','room_id');
    }
}
