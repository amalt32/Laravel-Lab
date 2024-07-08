<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cats;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }
    public function delete_category($id)
    {
        $data=Cats::find(id);
        $data.delete();
        return redirect()->back();
    }
    
    public function view_category()
    {
        $data=Cats::all();
        return view('admin.category',compact('data'));
        
    }

    public function add_category(Request $request)
    {
        $category= new Cats();
        $category->category_name= $request->categoryname;
        $category->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
}
