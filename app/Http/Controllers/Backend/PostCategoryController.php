<?php

namespace App\Http\Controllers\Backend;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use App\Repositories\Backend\PostCategoryRepository;
use App\Http\Requests\Backend\PostCategory\StoreRequest;
use App\Http\Requests\Backend\PostCategory\UpdateRequest;
use Auth;
class PostCategoryController extends Controller
{

    /**
     * @var PostCategoryRepository
     */
    protected $post_categoryRepository;

    /**
     * @param PostCategoryRepository $post_categoryRepository
     */
    public function __construct(PostCategoryRepository $post_categoryRepository)
    {
        $this->postCategoryRepository = $post_categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post_categories = $this->postCategoryRepository->orderBy('id', 'asc')->paginate(25);
        return view('backend.post_category.index',compact('post_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.post_category.create');
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
        $this->postCategoryRepository->create($request->only('user_id','name', 'body'));
        return redirect()->route('admin.post_category.index')->withFlashSuccess(__('models.post_category.alerts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostCategory  $post_category
     * @return \Illuminate\Http\Response
     */
    // public function show(PostCategory $post_category)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostCategory  $post_category
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $post_category)
    {
        //
        return view('backend.post_category.edit',compact('post_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostCategory  $post_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, PostCategory $post_category)
    {
        //
        $request['user_id'] = Auth::user()->id;
        // $this->postCategoryRepository->create($request->only('user_id','name', 'body'));
        $this->postCategoryRepository->updateById($post_category->id, $request->only('user_id','name', 'body'));

        return redirect()->route('admin.post_category.index')->withFlashSuccess(__('models.post_category.alerts.edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostCategory  $post_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $post_category)
    {
        //
        $this->postCategoryRepository->deleteById($post_category->id);
        return redirect()->route('admin.post_category.index')->withFlashSuccess(__('models.post_category.alerts.deleted'));
    }
}
