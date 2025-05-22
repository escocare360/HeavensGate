<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReservationController
{
    public function Lot_group(Request $request){
        $Lot_type = $request->Lot_type;

        $Lot_group = DB::table("lot_header")
                    ->select("Lot_group")
                    ->where("Lot_type",$Lot_type)
                    ->distinct()
                    ->get();

        return response()->json([
                'Lot_group' => $Lot_group,
        ]);

    }
    public function Available_lot(Request $request){
        $Lot_group = $request->Lot_group;
        
        $Available_lot = DB::table("lot_header")
                        ->select("Lot_id","Lot_name","Lot_type","Lot_group","Lot_size","Lot_status")
                        ->where("Lot_group",$Lot_group)
                        ->get();
        
        return response()->json([
                'Available_lot' => $Available_lot,
        ]);
    }
}
