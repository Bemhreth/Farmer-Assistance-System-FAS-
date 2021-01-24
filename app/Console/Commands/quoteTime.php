<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Wish;
class quoteTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'word:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will check if it is day or night time ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

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
    }
}
