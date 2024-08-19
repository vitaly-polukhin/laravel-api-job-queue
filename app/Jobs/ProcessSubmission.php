<?php
namespace App\Jobs;

use App\Models\Submission;
use App\Events\SubmissionSaved;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSubmission implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        // Save submission to database
        $submission = Submission::create($this->data);

        // Trigger event
        event(new SubmissionSaved($submission));
    }
}
