<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\BirthdayWish;
use Illuminate\Support\Facades\Mail;
use App\Mail\DailyWishesMail;
use Carbon\Carbon;

class wishes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:wishes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily wishes to users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();
        $users = BirthdayWish::whereMonth('birthday_date', $today->month)
        ->whereDay('birthday_date', $today->day)
        ->get();

        if ($users->isEmpty()) {
            $this->info('No birthdays today!');
            return;
        }
        
        $this->info('Happy Birthday to:');
        foreach ($users as $user) {
            $this->info($user->birthday_boy_first . ' ' . $user->birthday_boy_last);
        }

        foreach ($users as $user) {
            Mail::to($user->birthday_email)->send(new DailyWishesMail($user->birthday_boy_first, $user->birthday_boy_last, $user->birthday_message));
        }

        $this->info('Daily wishes sent to all users!');
    }
}
