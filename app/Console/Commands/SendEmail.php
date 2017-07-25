<?php

namespace App\Console\Commands;

use App\WaterLevel;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $lastValue = WaterLevel::getLatest()->first();

        $waterLevel = $lastValue->watervalue;

        if($waterLevel < 20){
            Mail::send('emails.wateremail',['testVar' => $waterLevel],function($message) {
                $message->to('fadi.salsaa@gmail.com')->subject('Water Level');
            });
        }
    }
}
