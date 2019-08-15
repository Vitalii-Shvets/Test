<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePosts;
use App\Models\Posts;
use App\Models\Tags;
use App\Services\PostServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    private $postServices;

    /**
     * PostsController constructor.
     * @param PostServices $postRepository
     */
    public function __construct(PostServices $postServices)
    {
        $this->postServices = $postServices;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = $this->postServices->getAllWithPaginate(config('app.perPage'));

        return view('posts.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosts $request)
    {
        if ($this->postServices->sorePost($request)) {
            return redirect()->route('posts.index')->with(['success' => 'Збережено']);
        }
        return back()->withErrors(['msg' => 'Помилка збереження'])
            ->withInput();
    }

    public function search(Request $request)
    {
        $paginator = $this->postServices->getSearchWithPaginate($request->input('search'), config('app.perPage'));
        return view('posts.index', compact('paginator'));
    }
}
