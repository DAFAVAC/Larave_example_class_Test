<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
use App\Models\Perfil;
use App\Models\Location;
use App\Models\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->count(50)->create();
        Level::factory()->create(['name'=>'Plata']);
        Level::factory()->create(['name'=>'Oro']);
        Level::factory()->create(['name'=>'Bronce']);


        Perfil::factory()->count(50)->create();
        User::factory(5)->create()->each(function($user){
            $perfil=$user->perfil()->save(\App\Models\Perfil::make());
            $perfil->location()->save(\App\Models\Location::make());
            $user->groups()->attach($this->array(rand(1,3)));
        });






/*
        Perfil::factory()->create(['name'=>'Perfil1','user_id'=>'1']);
        Perfil::factory()->create(['name'=>'Perfil2','user_id'=>'2']);
        Perfil::factory()->create(['name'=>'Perfil3','user_id'=>'3']);
        
        Location::factory()->create(['country'=>'Ecuador']);
        Location::factory()->create(['country'=>'Colombia']);
        Location::factory()->create(['country'=>'Chile']);

*/

//////////////////////////////
/*
        User::factory()->count(50)->create()->each(function($user){

            $perfil= $user->perfil()->save(Perfil::factory()->create()->make());

                $perfil->location()->save(Location::factory()->create()->make());

                $user->group()->attach($this->array(rand(1,3)));


        });


*/

////////////////////////////////////




    }








    public function array($max)
    {
       $values=[];
       for($_REQUEST["i"]=1;$_REQUEST["i"]<$max;$_REQUEST["i"]++){
          $values[]=$_REQUEST["i"];
       }
       return $values;
    }



}
