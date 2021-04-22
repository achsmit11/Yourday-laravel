<?php

namespace App\Events;


use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class JournalCreated
{
    use Dispatchable, SerializesModels;

    public $journal;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($journal)
    {
        $this->journal = $journal;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
   
}
