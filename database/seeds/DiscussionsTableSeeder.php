<?php

use App\Discussion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1='Changing <div></div> to inline-block doesnt work (repl.it included)';
        $t2='Slices JSON array and connect 2 datapairs randomly — EASY or Difficult?';
        $t3='I am trying to upload image through modal in laravel using ajax';
        $t4='How can i display the input contents of <input type=“text” id=“text” /> [closed]';
        $t5='Query PHP AJAX infinite scroll with results from filter';
        
        $d1=[
            'title'=>$t1,
            'content'=>'I can´t seem to be able to change the div element to an inline block. I really need help with this. Here is my repl.it: https://repl.it/repls/AwareContentTechnician,',
            'channel_id'=>4,
            'user_id'=>2,
            'slug'=>Str::slug($t1)
            
        ];
        $d2=[
            'title'=>$t2,
            'content'=>'[{
                "fname": "Hubert",
                "lname": "Maier",
                "email": "h@m.com"},
                {
                    "fname": "Hubert1",...........
            now i want to connect the users randomly into pairs so each user gets another user as pair partner. then print out the pairs in the console
            
            restricted for me: cannot be pair with yourself and if uneven number print the user out who didnt got a match.',
            'channel_id'=>1,
            'user_id'=>2,
            'slug'=>Str::slug($t2)
        ];
        $d3=[
            'title'=>$t3,
            'content'=>'BankAccount.findAll({
                include:[{
                  model: Group,
                  include: [Project],
                  order:[[Project,"name","ASC"]]
                },{
                  model: BankAccountData,
                  include: [Category]
                },{
                  model: Bank,
                }],
                order:[[Group,"name","ASC"],[Bank,"name","ASC"],["bank_account_alias","ASC"]]
              })
        that code above is working but the result of sorting priority is Group>Project>Bank. how can i change the priority to Project>Group>Bank ?. can anyone help?.',
            'channel_id'=>3,
            'user_id'=>1,
            'slug'=>Str::slug($t3)
        ];
        $d4=[
            'title'=>$t4,
            'content'=>'I am using this query to update a status value

            public function updateStatus(Request $request)
            {
                $customer = Customer::findOrFail($request->user_id);
                $customer->status = $request->status;
                $customer->new_customer_status = 1;
                $customer->save();
                return response()->json([message=> User status updated successfully.]);
            }
            I want that if status == 1 then after one week $customer->new_customer_status should automatically becomes NULL
            
            How can I schedule time or days based query that run automatically after one week or at a given time?',
            'channel_id'=>5,
            'user_id'=>1,
            'slug'=>Str::slug($t4)
        ];
        $d5=[
            'title'=>$t5,
            'content'=>'1


            Ive made a PHP foreach loop which displays games and info about them. The info is from a database and it includes a enddate, there are about 5 games in the table and they are all with different enddates. I ve made a JS timer which takes the enddate and counts down to it. ex:(3days 5hours 2seconds). But when i add the timer into the PHP loop, the countdown is only displayed to the first game. How could i make it so that each game gets a countdown? The timer and the php loop:
            
            var countDownDate = new Date({{ $comp->EndDate }}).getTime();
                var x = setInterval(function() {
            
                    // Get todays date and time
                    var now = new Date().getTime();
            
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;',
            
            'channel_id'=>7,
            'user_id'=>2,
            'slug'=>Str::slug($t5)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
        Discussion::create($d5);
        
    }
}
