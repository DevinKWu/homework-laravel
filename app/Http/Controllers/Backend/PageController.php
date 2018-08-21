<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use App\Repositories\Backend\PageRepository;
use App\Http\Requests\Backend\Page\StoreRequest;
use App\Http\Requests\Backend\Page\UpdateRequest;
use Auth;
class PageController extends Controller
{

    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = $this->pageRepository->orderBy('id', 'asc')->paginate(25);
        return view('backend.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $request['user_id'] = Auth::user()->id;
        $this->pageRepository->create($request->only('user_id','name', 'body','slug'));
        return redirect()->route('admin.page.index')->withFlashSuccess(__('models.page.alerts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    // public function show(Page $page)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
        return view('backend.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Page $page)
    {
        //
        $request['user_id'] = Auth::user()->id;
        $this->pageRepository->updateById($page->id, $request->only('user_id','name', 'body','slug'));

        return redirect()->route('admin.page.index')->withFlashSuccess(__('models.page.alerts.edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
        $this->pageRepository->deleteById($page->id);
        return redirect()->route('admin.page.index')->withFlashSuccess(__('models.page.alerts.deleted'));
    }
}
