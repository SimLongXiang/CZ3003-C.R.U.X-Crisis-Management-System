<?php

namespace CRUX\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessTweet implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;
	
	
	protected $tweet;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
		$this->tweet = $tweet;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
		$tweet = json_decode($this->,this);
		var_dump($tweet['text']) . PHP_EOL;
		var_dump($tweet['id_str']) . PHP_EOL;
    }
}
