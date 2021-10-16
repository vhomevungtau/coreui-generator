<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Server;
use App\Models\Status;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {

            $users = User::all();

            foreach ($users as $user) {
                if (Carbon::parse($user->birthday)->isBirthday()) {
                    // Send sms
                    $data = Server::first()->attributesToArray();
                    $url = $data['url'];
                    $message = Status::find(210001)->first();
                    $data['number'] = $user->phone;
                    $data['message'] = sprintf($message, $user->name);
                    Http::get($url, $data);

                    // Zalo
                    $dataZalo = [];
                    $dataZalo['recipient']['user_id'] = env('ZALO_OA');
                    $dataZalo['message']['text'] = $data['message'];

                    Http::withHeaders([
                        'access_token' => env('ZALO_TOKEN'),
                        'Accept' => 'application/json',
                    ])->post(env('ZALO_URL'), $dataZalo);
                }
            }
        })->dailyAt('8:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
