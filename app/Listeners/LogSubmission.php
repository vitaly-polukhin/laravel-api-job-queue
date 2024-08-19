<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSubmission
{
    public function handle(SubmissionSaved $event)
    {
        Log::info("Submission saved: {$event->submission->name} ({$event->submission->email})");
    }
}
