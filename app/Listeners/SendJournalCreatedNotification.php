<?php

namespace App\Listeners;

use App\Events\JournalCreated as JournalCreatedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendJournalCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  JournalCreated  $event
     * @return void
     */
    public function handle(JournalCreated $event)
    {
        \Mail::to('asmitach@gmail.com')->send(
            new JournalCreatedMail($journal)
        );

    }
}
