<?php

namespace App\Services;

use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class PostServices
{
    public function getAllWithPaginate($perPage = null)
    {
        return Posts::with([
            'tags',
        ])->paginate($perPage);
    }

    public function sorePost($request)
    {

        $item = Posts::create($request->except(['listTags']));
        if ($request->input('listTags')) {
            $tags = array_map(function ($element) {
                return ['name' => $element];
            }, $request->input(['listTags']));
            return $item->tags()->createMany($tags);
        }
        return $item;
    }

    public function getSearchWithPaginate($search, $perPage = null)
    {
        return Posts::with('tags')->where('title', '=', $search)
            ->orWhereHas('tags', function ($query) use ($search) {
                $query->where('name', '=', $search);
            })->paginate($perPage);
    }
}
