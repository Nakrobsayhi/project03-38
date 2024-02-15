<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $c = Category::orderBy('category_id','desc')->Paginate(5);
        return view('backend.category.index',compact('c'));
    }

    public function createform(){
        return view('backend/category/createform');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
        return view('backend/category/edit',compact('cat'));
    }

    public function insert(Request $request){
        //security purpose
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'Please enter a name',
            'name.unique'=>'This name is already taken',
            'name.max'=>'Maximun is 255',
        ]);

        //kept data
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        alert()->success('Successfully Saved','บันทึกสำเร็จ');
        return redirect('admin/category/index');
    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        alert()->success('Successfully Updated','อัปเดทข้อมูลสำเร็จ');
        return redirect('admin/category/index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('Successfully Deleted','ลบข้อมูลสำเร็จ🗑️');
        return redirect('admin/category/index');
    }
}