<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    private static $rooms;

    public static function getRooms() {
        self::$rooms = DB::table('room')->join('room_type', 'room_type.id', '=', 'room.room_type_id')->paginate(4);
        return self::$rooms;
    }

    public function roomType() {
        return $this->belongsTo(Room_Type::class);
    }
}
