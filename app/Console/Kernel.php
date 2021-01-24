<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

use App\Wish;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //  $schedule->command('word:update')
        //           ->everyMinute();
       $schedule->call(function (){
        $wish = Wish::all();
        $time = (int)$wish[0]->time;
       if($time == 1){
            DB::table('wishes')
            ->update(['wish'=>'Have a nice day!','time'=>'0']);
          
        }elseif($time ==0){
            DB::table('wishes')
            ->update(['wish'=>'Have a good night!','time'=>'1']);
           
        }
        
    echo "done";
       }); 
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
