<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class Front extends Controller
{
    public function index()
    {
        $data = DB::table('programs')->get();
        return response()->json([
            'programs' => $data,
            'status_code'   => 200,
            'msg'           => 'success',
        ], 200);

    }
    public function edit($id)
    {
        $data = DB::table('programs')
        ->where('id', $id)
        ->get();
        if ($data) {
            return response()->json([
                'programs' => $data,
                'status_code'   => 200,
                'msg'           => 'success',
            ], 200);
        }
    }
    public function daftarprogram()
    {
        $data = DB::table('programs')->get();
        $data2 = DB::table('categories')->get();
        return response()->json([
            'programs' => $data,
            'categories' => $data2,
            'status_code'   => 200,
            'msg'           => 'success',
        ], 200);
    }

    public function programcategory(){
        $data = DB::table('programs')
        ->join('categories', 'programs.category_id' '=','categories.id')
        ->get();
        return response()->json([
            'programs' => $data,
            'categories' => $data2,
            'status_code'   => 200,
            'msg'           => 'success',
        ], 200);
    }
    public function create(Request $request)
    {
        $data = DB::table('programs')
        ->insert($request->all());
        return response()->json([
           'programs' => $data,
           'status_code'   => 200,
           'msg'           => 'success',
       ], 201);
    }
    public function update(Request $request, $id)
    {
        $data = DB::table('programs')
        ->where('id', $id)
        ->update($request->all());
        if (is_null($data)) {
            return response()->json('data tidak ada', 404);
        }else{
            return response()->json([
             'programs' => $data,
             'status_code'   => 200,
             'msg'           => 'success',
         ], 200);
        }
    }
    public function delete(Request $request, $id)
    {
        $data = DB::table('programs')
        ->where('id', $id)
        ->delete();
        if (is_null($data)) {
            return response()->json('data tidak ada', 404);
        }else{
            return response()->json([
                'programs' => 'data berhasil dihapus',
                'status_code'   => 200,
                'msg'           => 'success',
            ], 200);
        }
    }
}
