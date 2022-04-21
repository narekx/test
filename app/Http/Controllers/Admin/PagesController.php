<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ()
    {
        $pages = $this->page->get();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create ()
    {
        return view('admin.pages.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:pages', 'max:255'],
            'menu_name' => ['required', 'max:255'],
            'heading' => ['required', 'max:255'],
            'content1' => ['required'],
            'content2' => ['required']
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title'], '-');
        if ($this->page->create($validatedData)) {
            return redirect()->route('admin.pages.index');
        }

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit ($id)
    {
        $page = $this->page->find($id);
        if ($page) {
            return view('admin.pages.edit', compact('page'));
        }

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update (Request $request, $id)
    {
        $page = $this->page->find($id);
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'menu_name' => ['required', 'max:255'],
            'heading' => ['required', 'max:255'],
            'content1' => ['required'],
            'content2' => ['required']
        ]);

        if ($page->update($validatedData)) {
            return redirect()->route('admin.pages.index');
        }

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete ($id)
    {
        $page = $this->page->find($id);
        $page->delete();
        return redirect()->back();
    }

    public function show ($id)
    {
        $page = $this->page->find($id);
        return view('admin.pages.show', compact('page'));
    }
}
