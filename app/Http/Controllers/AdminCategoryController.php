<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|file|max:1024',
            'name' => 'required|max:255',
            'slug' => 'required|max:50'
        ]);
        
        if($request->file('image')){
            $image = $request->file('image')->store('category-images');
        } else {
            $image = null;
        }

        $data = [
            'image' => $image,
            'name' => $request->name,
            'slug' => $request->slug
        ];

        Category::create($data);

        return redirect('/dashboard/categories')->with('success', 'New Category has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'image' => 'image|file|max:1024',
            'name' => 'required|max:255',
            'slug' => 'required|max:50'
        ]);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $image = $request->file('image')->store('category-images');
        } else {
            $image = null;
        }

        $data = [
            'image' => $image,
            'name' => $request->name,
            'slug' => $request->slug
        ];

        Category::where('id', $category->id)->update($data);

        return redirect('/dashboard/categories')->with('success', 'Caetegory has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {        
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category has been Deleted!');
    }

}
