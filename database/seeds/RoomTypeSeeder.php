<?php

use App\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::create(['short' => 'VL','description' => 'Vorlesung','color'=>'#80BA27']);
        RoomType::create(['short' => 'ME','description' => 'Meeting','color'=>'#4a5c66']);
        RoomType::create(['short' => 'PR','description' => 'Prüfung','color'=>'#9C132E']);
        RoomType::create(['short' => 'ÜB','description' => 'Übung','color'=>'#00B8E4']);


    }
}
