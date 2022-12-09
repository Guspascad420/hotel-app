<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room_Type extends Model
{
    private static $roomType = [
        [
            "type" => "Silver",
            "room" => "Single bed one guest room",
            "desc" => "Two Windows",
            "price" => 50,
            "image" => 'images/unsplash_GqbU78bdJFM.png'
        ],
        [
            "type" => "Gold",
            "room" => "Double bed one guest room",
            "desc" => "Mountain View",
            "price" => 70,
            "image" => 'images/unsplash_GqbU78bdJ83h.png'
        ],
        [
            "type" => "Platinum",
            "room" => "Double bed one guest room",
            "desc" => "Super fast Wi-Fi",
            "price" => 90,
            "image" => 'images/unsplash_Gqb83hfrhr.png'
        ]
    ];

    public static function getAll() {
        return self::$roomType;
    }

    public function room() {
        return $this->hasMany(Room::class);
    }
}
