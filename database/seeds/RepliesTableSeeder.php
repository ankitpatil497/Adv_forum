<?php

use App\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1=[
            'user_id'=>2,
            'discussion_id'=>1,
            'content'=>'There are multiple ways of doing it, though some will only work in certain browsers. One that I know off the top of my head is to embed a tiny near-invisible iframe on the page. When the user hits the back button the iframe is navigated back which you can detect and then update your page. Here is another solution.

            You might also want to go view source on something like gmail and see how they do it.
            
            Heres a library for the sort of thing youre looking for by the way',

        ];
        $r2=[
            'user_id'=>2,
            'discussion_id'=>2,
            'content'=>'One of my favorite frameworks for doing this is Yahoo!s Browser History Manager. You register events and it calls you back when the user returns Back to that state. And if you want to learn how it works, heres a fun blog entry about the decisions Yahoo! made when designing it.
            ',

        ];
        $r3=[
            'user_id'=>2,
            'discussion_id'=>3,
            'content'=>'There are multiple ways of doing it, though some will only work in certain browsers. One that I know off the top of my head is to embed a tiny near-invisible iframe on the page. When the user hits the back button the iframe is navigated back which you can detect and then update your page. Here is another solution.

            You might also want to go view source on something like gmail and see how they do it.
            
            Heres a library for the sort of thing youre looking for by the way',

        ];
        $r4=[
            'user_id'=>2,
            'discussion_id'=>4,
            'content'=>'Theres no way to tell when a user clicks the back button of presses the backspace key to go back in the browser, however there are other events that happen in a certain order which are detectable. This example javascript has a reasonably good method for detecting back commands:

                The traditional way, however, is to track user movement through your site using cookies or referrer pages. When the user goes to page A, then page B, then appears at page A again (especially when theres no link on B to A) then you know they went back - A can detect this and redirect them or',

        ];
        $r5=[
            'user_id'=>2,
            'discussion_id'=>5,
            'content'=>'The simplest way to check if you came back to a cached version of your page, which needs to be refreshed, is to add a hidden input element that will be cached, and you can check if it still has its default value.

            Just place the following inside your body tag. I place mine right before the end tag.
            
            <input type="hidden" id="needs-refresh" value="no">
            <script>
                onload=function(){
                    var e = document.getElementById("needs-refresh");
                    if (e.value === "yes")
                        location.reload();
                    e.value = "yes";
                }
            </script>',

        ];
        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
        Reply::create($r5);
        
    }
}
