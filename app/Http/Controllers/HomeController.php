<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var Page
     */
    protected $page;

    /**
     * @param Page $page
     */
    public function __construct (Page $page)
    {
        $this->page = $page;
    }

    public function index ()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $pages = $this->page->all(['menu_name', 'slug']);
        return view('home', compact('pages'));
    }


}
