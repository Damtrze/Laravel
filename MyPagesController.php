<?php

namespace App\Http\Controllers;

use Request;
use App\Page;

class MyPagesController extends Controller
{
    //Główny widok stron
    public function index()
    {
    	return view('mypages.index');
    }

    public function show()
    {
    	$sportpages = Page::latest()->get();
    	return view('sportpages.index')->with('sportpages', $sportpages);
    }

    // formularz dodawania strony
    public function create()
    {
    	$sportpages = Page::latest()->get();
    	return view('mypages.create')->with('sportpages', $sportpages);
    }

    // zapis do bazy
    public function store()
    {
    	$input = Request::all();
    	Page::create($input);
    	return redirect('mypages');
    }

    //formularz edycji strony
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('mypages.edit')->with('page', $page);
    }

    //aktualizacja strony
    public function update($id, CreatePageRequest $request)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect('mypages');
    }
}
