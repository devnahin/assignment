<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    //Task 5
    public function postData()
    {
        $postdata = Post::with('category')->get();

        return view('pages.home', compact('postdata'));
    }

    //Task 6
    public function categoryPost($id)
    {
        $postCount = Post::where('category_id', $id)->count();
        return $postCount;
    }

    //Task 7
    public function softDelete($id)
    {
        $softDelete = Post::findOrFail($id)->delete();
        if ($softDelete) {
            return 'successfully soft deleted';
        } else {
            return 'failed to softdelete';
        }
    }

    //Task 8
    public function softData()
    {
        $softData = Post::onlyTrashed()->get();
        return $softData;
    }

    //Task 10
    public function specificCatPost($id)
    {
        try {
            $category = Category::findOrFail($id);
            return $category->posts;
        } catch (\Exception $e) {
            return 'Category not found.';
        }
    }

    //Task 11 main method is declared in Category model
    //here i have  declared this method for testing purpose
    public function latestPost($id)
    {
        $category = Category::findOrFail($id)->LatestPost();
        return $category;
    }

    //Task 12 
    public function CategoriesLatestPosts()
    {
        $categories = Category::all();

        return view('pages.categories', compact('categories'));
    }
}