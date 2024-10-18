<?php

namespace App\Helpers;

use Carbon\Carbon;

function generateTimeSlots($startTime, $endTime, $interval = 60) 
{
    $slots = [];
    $start = Carbon::createFromFormat('H:i:s', $startTime);
    $end = Carbon::createFromFormat('H:i:s', $endTime);

    while ($start < $end) {
        $slots[] = $start->format('H:i:s');
        $start->addMinutes($interval);
    }

    return $slots;
}


function formatHari($tanggal)
{
    $hari = Carbon::parse($tanggal)->dayName;
    return $hari; 
}

