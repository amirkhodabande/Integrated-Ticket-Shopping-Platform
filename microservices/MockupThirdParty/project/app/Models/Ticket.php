<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public static function search($data)
    {
        unset($data["api_token"]);
        $tickets = Ticket::orderBy('created_at', 'desc');
        if (sizeof($data) > 0) {

            if (!empty($data['min_price']) && !empty($data['max_price'])) {
                $tickets = $tickets->whereBetween('price', [$data['min_price'], $data['max_price']]);
            }

            if (!empty($data['type'])) $tickets = $tickets->where('type', $data['type']);
            if (!empty($data['date'])) $tickets = $tickets->whereDate('date', $data['date']);
            if (!empty($data['capacity'])) $tickets = $tickets->where('capacity', '>=', $data['capacity']);
            if (!empty($data['origin'])) $tickets = $tickets->where('capacity', $data['origin']);
            if (!empty($data['destination'])) $tickets = $tickets->where('destination', $data['destination']);

        }

        return $tickets->paginate(10);
    }
}
