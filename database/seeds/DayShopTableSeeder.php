<?php

use App\Shop;
use Illuminate\Database\Seeder;

class DayShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            1 => [
                'from_hours' => '10',
                'from_minutes' => '00',
                'to_hours' => '18',
                'to_minutes' => '00',
            ],
            2 => [
                'from_hours' => '08',
                'from_minutes' => '00',
                'to_hours' => '18',
                'to_minutes' => '00',
            ],
            3 => [
                'from_hours' => '10',
                'from_minutes' => '00',
                'to_hours' => '20',
                'to_minutes' => '00',
            ],
            4 => [
                'from_hours' => '09',
                'from_minutes' => '00',
                'to_hours' => '18',
                'to_minutes' => '00',
            ],
            5 => [
                'from_hours' => '12',
                'from_minutes' => '00',
                'to_hours' => '22',
                'to_minutes' => '00',
            ],
        ];
        $shops = Shop::all();
        
        foreach($shops as $shop)
        {
            $shop->days()->sync($days);
        } 
    }
}
