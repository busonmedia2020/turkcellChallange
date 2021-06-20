<?php

namespace App\Jobs;

use App\Services\PageServices;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $departmentId;

    public function __construct($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = app(PageServices::class)->getCustomers(['department_id', $this->departmentId]);

        foreach ($users as $user) {
            Mail::to($user->mail)->send(new \App\Mail\Mail());
        }
    }
}
