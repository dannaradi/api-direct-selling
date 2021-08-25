<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;



class Principal extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getPrincipal()
    {
       $Principal = DB::select("SELECT id, name FROM principal");

        $data = $this->convert_from_latin1_to_utf8_recursively($Principal);
        $jumlah_data = count($Principal);
        if ($jumlah_data > 0) {
            return response()->json([
                'metadata' => $jumlah_data,
                'data' => $data
            ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
        }
        else{
            return response()->json([
                'message' => 'No Data',
            ], '404');
        }
        
    }

    public static function convert_from_latin1_to_utf8_recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

            return $dat;
        } else {
            return $dat;
        }
    }
}
