<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStoreRequest;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageStoreRequest $request): RedirectResponse
    {
        $page = Page::create($request->only(['title', 'content']));

        if ($request->hasFile('image')) {
            $path = $request->file('image')
                ->storePubliclyAs('images', $request->file('image')->getClientOriginalName(), 'public');
            $page->image()->create([
                'url' => $path,
            ]);
        }

        return redirect()->back()->with('success','Pagina creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
