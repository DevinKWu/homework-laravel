<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use App\Repositories\Backend\PostRepository;
use App\Repositories\Backend\PostCategoryRepository;
use App\Http\Requests\Backend\Page\StoreRequest;
use App\Http\Requests\Backend\Page\UpdateRequest;
use Auth;

class PostController extends Controller
{

    /**
     * @var PostRepository
     */
    protected $postRepository;
    protected $postCategoryRepository;

    /**
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository,PostCategoryRepository $postCategoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->postCategoryRepository = $postCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $posts = $this->postRepository->orderBy('id', 'asc')
        ->paginate(25);
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post_categories = $this->postCategoryRepository->orderBy('id', 'asc')->get();
        return view('backend.post.create',compact('post_categories'));
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
        $this->postRepository->create($request->only('user_id','name', 'body','slug','post_category_id'));
        return redirect()->route('admin.post.index')->withFlashSuccess(__('models.post.alerts.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $post_categories = $this->postCategoryRepository->orderBy('id', 'asc')->get();
        return view('backend.post.edit',compact('post_categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Post $post)
    {
        //
        $request['user_id'] = Auth::user()->id;
        $this->postRepository->updateById($post->id, $request->only('user_id','name', 'body','slug','post_category_id'));

        return redirect()->route('admin.post.index')->withFlashSuccess(__('models.post.alerts.edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $this->postRepository->deleteById($post->id);
        return redirect()->route('admin.post.index')->withFlashSuccess(__('models.post.alerts.deleted'));
    }
}
