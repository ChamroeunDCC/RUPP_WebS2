<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HallAdminController extends Controller
{
    public function hall_management(){

        $hallData = DB::table('reservations')->get();

        return view('admin.management.hall_management', compact('hallData'));
    }

    public function hall_delete($id){
        reservation::find($id)->delete();

        return back();
    }


}
