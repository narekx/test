<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PagesController extends Controller
{
    /**
     * @var
     */
    protected $page;

    /**
     * @param Page $page
     */
    public function __construct (Page $page)
    {
        $this->page = $page;
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show ($slug)
    {
        $page = $this->page->firstWhere('slug', $slug);
        $pages = $this->page->all(['menu_name', 'slug']);
        return view('pages.show', compact('page', 'pages'));
    }
}
