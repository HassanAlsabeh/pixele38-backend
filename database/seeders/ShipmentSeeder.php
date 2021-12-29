<?php

namespace Database\Seeders;

use App\Models\Shipments;
use App\Models\User;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::all()->each(
            function($user){ for($i=0;$i<=20;$i++){
                Shipments::create([
                    'user_id'=>$user->getKey(),
                    'waybill'=>'omt'.$i,
                    'customer_address'=>"Beirut".$i,
                    'customer_name'=>"Name".$i,
                    'customer_phone'=>"7191667".$i,
                ]);
            }}
        );
    }

}

