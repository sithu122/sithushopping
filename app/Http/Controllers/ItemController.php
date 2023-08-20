<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all();
        $items = Item::all();
        
       return view ('items.index' , compact('items','categories'));
    }
     

    public function itemCategory(string $category_id){
        $itemCategories = Item::where('categoryID',$category_id)->get();
        return view('items.item_category',compact('itemCategories'));
    }

    public function itemCart(){
       
        return view('items.item_carts');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item =Item::find($id);
        $item_categoryID=$item->categoryID;
        $item_categories=Item::where('categoryID',$item_categoryID)->orderBy('id','DESC')->limit(4)->get();
       return view('items.detail' , compact('item','item_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
