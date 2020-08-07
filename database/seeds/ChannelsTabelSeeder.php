<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c=['name'=>'HTML/CSS'];
        $c1=['name'=>'Java'];
        $c2=['name'=>'JavaScript'];
        $c3=['name'=>'Bootstrap'];
        $c4=['name'=>'Python'];
        $c5=['name'=>'PHP'];
        $c6=['name'=>'Sql'];
        $c7=['name'=>'.Net'];
        $c8=['name'=>'Angular'];
        $c9=['name'=>'Laravel'];
        $c10=['name'=>'Node.js'];
        $c11=['name'=>'C/C++'];
        
        Channel::create($c);
        Channel::create($c1);
        Channel::create($c2);
        Channel::create($c3);
        Channel::create($c4);
        Channel::create($c5);
        Channel::create($c6);
        Channel::create($c7);
        Channel::create($c8);
        Channel::create($c9);
        Channel::create($c10);
        Channel::create($c11);
        
        

    }
}
