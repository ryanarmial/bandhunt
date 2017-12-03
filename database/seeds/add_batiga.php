<?php

use Illuminate\Database\Seeder;

class add_batiga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      $arrvotes = array();
      for ($i=1; $i <= 232 ; $i++) {
        $tgl8 = [
          'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
          'ip'         => '45.112.127.90',
          'song_id'    => 62,
          'created_at' => '2017-11-08 '.date('H:i:s'),
          'updated_at' => '2017-11-08 '.date('H:i:s')
        ];
        array_push($arrvotes, $tgl8);
      }
      for ($i=1; $i <= 82 ; $i++) {
        $tgl7 = [
          'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
          'ip'         => '45.112.127.90',
          'song_id'    => 62,
          'created_at' => '2017-11-07 '.date('H:i:s'),
          'updated_at' => '2017-11-07 '.date('H:i:s')
        ];
        array_push($arrvotes, $tgl7);
      }
      for ($i=1; $i <= 162 ; $i++) {
        $tgl6 = [
          'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
          'ip'         => '45.112.127.90',
          'song_id'    => 62,
          'created_at' => '2017-11-06 '.date('H:i:s'),
          'updated_at' => '2017-11-06 '.date('H:i:s')
        ];
        array_push($arrvotes, $tgl6);
      }
      for ($i=1; $i <= 69 ; $i++) {
        $tgl5 = [
          'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
          'ip'         => '45.112.127.90',
          'song_id'    => 62,
          'created_at' => '2017-11-05 '.date('H:i:s'),
          'updated_at' => '2017-11-05 '.date('H:i:s')
        ];
        array_push($arrvotes, $tgl5);
      }
      for ($i=1; $i <= 70 ; $i++) {
        $tgl4 = [
          'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
          'ip'         => '45.112.127.90',
          'song_id'    => 62,
          'created_at' => '2017-11-04 '.date('H:i:s'),
          'updated_at' => '2017-11-04 '.date('H:i:s')
        ];
        array_push($arrvotes, $tgl4);
      }
      DB::table('votes')->insert($arrvotes);
    }
}
