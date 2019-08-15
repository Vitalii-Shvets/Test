<?php

namespace App\Services;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class IpDenyAccessServices
{
    public function accessCheck($request)
    {
        if (in_array($request->ip(), config('app.ipDenyAccess'))) {
            abort(403);
        }
    }

}
