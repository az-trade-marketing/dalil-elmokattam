<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Store;
use Carbon\Carbon;

class UpdateStoreStatus extends Command
{
    protected $signature = 'stores:update-status';
    protected $description = 'Update the status of stores based on subscription expiration';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Store::where('expires_at', '<', Carbon::now())
            ->where('status', true)
            ->update(['status' => false]);

        $this->info('Store statuses updated successfully!');
    }
}
