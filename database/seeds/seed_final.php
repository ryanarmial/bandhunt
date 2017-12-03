<?php

use Illuminate\Database\Seeder;

class seed_final extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $idsongs = [11, 710, 54, 516, 429, 639, 62, 580, 420, 84, 713, 627, 108, 49, 198, 496, 527, 638, 91, 632, 27, 618, 625, 863, 594, 810, 477, 60, 432, 263, 264, 587, 232, 495, 542, 448, 743, 621, 111, 143];
      DB::table('songs')
        ->whereIn('id', $idsongs)
        ->update(['final' => 1]);
    }
}
