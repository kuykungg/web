<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\promotion;
class CheckExpiredData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-expired-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDateTime = Carbon::now();
        $promotion = Promotion::all();
        foreach ($promotion as $promotion){
            $expireDateTime = Carbon::parse($promotion->expiredate);
            if($currentDateTime > $expireDateTime){
                $promotion->delete();
                $file_path = storage_path('app/') . $promotion->image;
                if(file_exists($file_path));
                {
                    unlink($file_path);
                }
            }


        }
    }

}
