<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use SebastianBergmann\Type\TrueType;
use Symfony\Component\Console\Input\Input;

class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::all(); //view all in the category model
        return view('admin.category.index',compact('category'));
    }
    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
        $category=new Category(); //make an object of category model
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension; //the file name will be the time at which the file uploaded+ the file extension
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==True?'1':'0';
        $category->popular=$request->input('popular')==True?'1':'0';
        
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_description=$request->input('meta_title');
        $category->save();
        return redirect('categories')->with('status',"Category Added Successfully");
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        if($request->hasFile('image'))
        {
            $path='assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension; //the file name will be the time at which the file uploaded+ the file extension
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==True?'1':'0';
        $category->popular=$request->input('popular')==True?'1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_description=$request->input('meta_title');
        $category->update();
        return redirect('categories')->with('status',"Category Updated Successfully");
    }

    public function delete($id)
    {
        $category=Category::find($id);
        if($category->image)
        {
            $path='assets/uploads/category/' .$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $category->delete();
            return redirect('categories')->with('satus',"Category Deleted Successfully");
        }
    }
}
