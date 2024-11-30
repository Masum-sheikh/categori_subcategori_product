<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
class FrontendController extends Controller
{
    //
    public function categori(){
        $categories = Category::withCount('subCategories')->get();
        // subCategories সম্পর্ক ব্যবহার করে গুনতিই সঙ্গে আনছি।
        return view('categories.index', compact('categories'));
    }
    public function subcategori($id){
         // নির্দিষ্ট ক্যাটেগরি এবং তার সাথে সাব-ক্যাটেগরি ও প্রোডাক্ট সংখ্যা আনছি
    $category = Category::with(['subCategories' => function ($query) {
        $query->withCount('products'); // সাব-ক্যাটেগরির প্রোডাক্ট সংখ্যা যোগ করা
    }])->findOrFail($id);

        // View-তে ডেটা পাঠানো
        return view('categories.subcategori', compact('category'));
    }
    public function product($id)
    {
        // নির্দিষ্ট Sub-Category এবং তার Products ফেচ করা
        $subCategory = SubCategory::with('products')->findOrFail($id);

        // View-তে ডেটা পাঠানো
        return view('categories.products', compact('subCategory'));
    }
}
