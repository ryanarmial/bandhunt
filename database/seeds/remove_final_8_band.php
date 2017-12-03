<?php

use Illuminate\Database\Seeder;

class remove_final_8_band extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      $idsongs = [108, 198, 496, 263, 232, 542, 743, 143];
      DB::table('songs')
        ->whereIn('id', $idsongs)
        ->update(['final' => 0]);
    }
}
