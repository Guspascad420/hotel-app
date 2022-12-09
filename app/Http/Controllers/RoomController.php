<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class RoomController extends Controller
{
    public function index() {
        return view('rooms', [
            'rooms' => Room::getRooms(),
            'active' => "room"
        ]);
    }
}
