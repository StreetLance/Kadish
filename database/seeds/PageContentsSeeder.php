<?php

use Illuminate\Database\Seeder;

class PageContentsSeeder extends Seeder
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
            'Pages'=>'Index',
            'Title'=>'Arrange kaddish Or Yahrzeit reminder',
            'SubTitle'=>' ',
            'Body'=>'Please fill in the fields below for ordering kaddish or notify about the upcoming yahrzeit',
            'vew'=>'1'
        ],
            [
                'Pages'=>'Price',
                'Title'=>'this is Price',
                'SubTitle'=>' ',
                'Body'=>'Order reciting kaddish for the yahrzeit costs $
                    Order the reciting kaddish during the first year is $ per day.
                    Please note that you only need to enter the date of withdrawal, and the program itself, depending on the date, will offer you the required plan.',
                'vew'=>'1'
            ],
            [
                'Pages'=>'about',
                'Title'=>'About Kaddish Prayer',
                'SubTitle'=>' ',
                'Body'=>'Our team more than 7 years is engaged in the organization of reciting kaddish and mourning events. We have helped more than 700 people in 6 countries.
While doing this holy work, we encountered 2 main issues:The first one is that most people live by Gregorian calendar and skip yahrzeit of their beloved ones very often, since we observe an anniversary of passing according to Hebrew calendar.The second issue is that people don’t know how and whom to order a kaddish from.That’s why we created that service kaddish-prayer.com where you can order kaddish and other mourning services in a convenient for you way. You should only register at our site. We constructed a very smart system which determines the most optimal plan based on the date of passing. After you register at our website, we will help you not to miss these important dates of yahrzeit. We will also help to observe yahrzeit, buy a candle, organize memorial meal, etc.
We will make sure all your problems will be resolved in the best manner. You should only register at our website and enter information about you and your passed relative and we will take care about everything else afterwards.
We worked long and hard to make this program and we want to offer it to various Jewish communities throughout the world so a jew could do these mizvos no matter where he lives.
We wish everyone to fulfill the words of prophet Isaiah (25:8): He has concealed death forever, and the Lord God shall wipe the tears off every face, and the shame of His people He shall remove from upon the entire earth, for the Lord has spoken.',
                'vew'=>'1'
            ],
        ];

        DB::table('Pages')->insert($data);
        //
    }
}
