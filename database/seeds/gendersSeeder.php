<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class gendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 'Masculino', 'Femenino'];

        foreach($data as $key => $valor){
            DB::table('genders')->insert([
                'gender'=> $valor,
                'description'=> $valor,
                'created_at' =>Carbon::now()->format('y-m-d H:i:s')
            ]);
        }
  /*
        App\genders::create([
            'gender' => 'Femenino',
            'description' => 'Femenino'
        ]);
        */
    }
}
