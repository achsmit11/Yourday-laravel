<?php

namespace App\Http\Controllers;
use App\Journal;

use Illuminate\Http\Request;
use App\Mail\JournalCreated;
use App\User;
use App\Notifications\JournalDeleted;
use App\Notifications\JournalUpdated;


class JournalsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$journals= Journal::where('owner_id', auth()->id())->get();
		session()->flash('message','Your Have Sucessfully Inserted ');

		return view('journals.index', compact('journals'));

	}

	public function create()
	{

		return view('journals.create');
	}

	public function show(Journal $journal)
	{

		//$this->authorize('update', $car); //Authorization, it restics invalid user to view the project.

		//abort_unless(\Gate::allows('update', $journal), 403);

		return view('journals.show', compact('journal'));

	}

	public function edit(Journal $journal) //Route Model Binding
	{	
		//$this->authorize('update', $car); //Authorization, it restics invalid user to edit.

		

		return view('journals.edit', compact('journal'));
	}

	public function update(Journal $journal)
	{

		$journal->update(request(['date', 'description']));

		$myjournal = User::first();
		$myjournal->notify(new JournalUpdated);

		session()->flash('message','Your Have Sucessfully Updated ');

		return redirect('/journals');
	}

	public function destroy(Journal $journal)
	{

		$journal->delete();

		$myjournal = User::first();
		 $myjournal->notify(new JournalDeleted);

		session()->flash('message','Your Have Sucessfully Deleted ');

		return redirect('/journals');
	}
	public function store()
	{

	$attributes= request()->validate([
			'date'=> ['required', 'min:3'],
			'description'=> ['required', 'min:7']

		]);

		$attributes['owner_id'] = auth()->id();

		$journals = Journal::create($attributes);

		event(new JournalCreated($journals));

		return redirect('/journals');
	}
}
