<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ChannelsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c=['name'=>'HTML/CSS','slug'=>Str::slug('HTML/CSS')];
        $c1=['name'=>'Java','slug'=>Str::slug('Java')];
        $c2=['name'=>'JavaScript','slug'=>Str::slug('JavaScript')];
        $c3=['name'=>'Bootstrap','slug'=>Str::slug('Bootstrap')];
        $c4=['name'=>'Python','slug'=>Str::slug('Python')];
        $c5=['name'=>'PHP','slug'=>Str::slug('PHP')];
        $c6=['name'=>'Sql','slug'=>Str::slug('sql')];
        $c7=['name'=>'.Net','slug'=>Str::slug('.Net')];
        $c8=['name'=>'Angular','slug'=>Str::slug('Angular')];
        $c9=['name'=>'Laravel','slug'=>Str::slug('Laravel')];
        $c10=['name'=>'Node.js','slug'=>Str::slug('Node.js')];
        $c11=['name'=>'c/c++','slug'=>Str::slug('c/c++')];
        
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
