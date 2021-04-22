<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Today;
use App\Journal;
use App\Mail\Journaladded;

class TodaysController extends Controller
{
    
    public function store(Journal $journal)
    {
    	$attribute = request()->validate([
    		'mood'=> ['required', 'min:3'], 
    		'temp'=> ['required', 'numeric'],
    	 'todays_description' => ['required', 'min:10']
    	]);
		$journal->addToday($attribute);
		\Mail::to('asmitach@gmail.com')->send(
            new Journaladded($journal)
        );
    	return back();
    }
}

