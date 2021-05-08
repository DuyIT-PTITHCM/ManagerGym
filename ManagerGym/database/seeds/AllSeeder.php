<?php

use App\Models\Department;
use App\Models\Device;
use App\Models\Partner;
use App\Models\Purchasing;
use App\Models\Service;
use App\Models\Supplier;
use App\Models\TypeMachine;
use App\User;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
           Device::create([
               'name'=> $faker->name,
               'status_id'=>1,
               'pricebuy'=>$faker->randomNumber(6)
           ]);
           Department::create([
               'name'=>$faker->name
           ]);
           TypeMachine::create([
                'name'=>$faker->name
           ]);
           Service::create([
                'name'=>$faker->name
           ]);
           Partner::create([
            'name' => $faker->name,
            'address' => $faker->address,
            'phone'=>'0' . $faker->randomNumber(9)

           ]);
           Purchasing::create([
            'name' => $faker->name,
            'address' => $faker->address,
            'phone'=>'0' . $faker->randomNumber(9)
           ]);
           Supplier::create([
            'name' => $faker->name,
            'address' => $faker->address,
            'phone'=>'0' . $faker->randomNumber(9)
           ]);
           User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'phone'=>'0' . $faker->randomNumber(9),
            'password'=>'12345678'
           ]);
        }


    }
}
