<?php

namespace CRUX;

use OauthPhirehose;
use CRUX\Jobs\ProcessTweet;
use Illuminate\Foundation\Bus\DispatchesJobs;

class TwitterStream extends OauthPhirehose
{
    use DispatchesJobs;

    /**
    * Enqueue each status
    *
    * @param string $status
    */
    public function enqueueStatus($status)
    {
        $this->dispatch(new ProcessTweet($status));
    }
}