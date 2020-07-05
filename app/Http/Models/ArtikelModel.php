<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class ArtikelModel{
    public static function get_all(){
        $item = DB::table('artikel')->get();
        return $item;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_item = DB::table('artikel')->insert($data);
        return $new_item;
    }

    public static function show_by_id($id){
        $items = DB::table('artikel')->where('artikel_id', $id)->first();
        return $items;
    }
    public static function destroy($id){
        $items = DB::table('artikel')
                    ->where('artikel_id', $id)
                    ->delete();

        return $items;

    }
    public static function update($id, $req){
        $items = DB::table('artikel')
                    ->where('artikel_id', $id)
                    ->update([
                        'judul' => $req["judul"],
                        'isi' => $req["isi"],
                        'slug' => $req["slug"],
                        'tag' => $req["tag"]
                    ]);
        return $items;                
    }

}
?> 