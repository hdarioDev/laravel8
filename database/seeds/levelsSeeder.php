<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class levelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 'Básico', 'Primaria','Secundaria','Universitario'];

        foreach($data as $key => $valor){
            DB::table('levels')->insert([
                'level'=> $valor,
                'description'=> $valor,
                'created_at' =>Carbon::now()->format('y-m-d H:i:s')
            ]);
        }
    }
}
