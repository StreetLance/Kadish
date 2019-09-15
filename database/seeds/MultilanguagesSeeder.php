<?php

use Illuminate\Database\Seeder;

class MultilanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'Language'=>'en',
                'Language_id'=>'1',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'2',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'3',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'4',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'5',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'6',
                'Language_type'=>' ',
            ],
            [
                'Language'=>'en',
                'Language_id'=>'7',
                'Language_type'=>' ',
            ],
        ];

        DB::table('multilanguges')->insert($data);
    }
}
