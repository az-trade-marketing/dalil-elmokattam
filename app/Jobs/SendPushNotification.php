<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\PushNotification;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class SendPushNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pushNotification;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(PushNotification $pushNotification)
    {
        $this->pushNotification = $pushNotification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::find($this->pushNotification->user_id);

        if ($user && $user->device_token) {
            $response = sendFirebase(
                [$user->device_token],
                $this->pushNotification->title,
                $this->pushNotification->message,
                $this->pushNotification->link,
                $this->pushNotification->image
            );

            if ($response) {
                // Log success
                Log::info('Notification sent successfully to user ID: ' . $user->id);
            } else {
                // Log failure
                Log::error('Failed to send notification to user ID: ' . $user->id);
            }
        } else {
            // Log that no valid device token was found
            Log::warning('No valid device token for user ID: ' . $this->pushNotification->user_id);
        }
    }
}
