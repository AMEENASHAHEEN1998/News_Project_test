<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id' , 'desc')->get();
        return view('dashboard.blogs.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard.blogs.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validator = validator($request->all(),[
            'title' => 'required|max:255',
            'short_description'=>'required',
            'long_description'=>'required',
            'image'=>'required',
            'category_id'=>'required',

        ],[
            'title.required' => 'عنوان الخبر مطلوب',
            'short_description.required' => 'الوصف الختصر مطلوب',
            'long_description.required' => 'المحتوى مطلوب',
            'image.required' => 'الصورة مطلوبة',
            'category_id.required' => 'القسم مطلوب',

        ]);
        if (!$validator->fails()) {
            if ($request->hasFile('image')){
                $image = $request->file('image');
                $file_name = $image->getClientOriginalName();
            }else{
                $file_name = '';
            }

            $blog = Blog::create([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'image' => $file_name,
                'category_id' => $request->category_id,

            ]);
            $blog->save();
            if($file_name !== ''){
                // move pic
                $imageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('Attachments/'), $imageName);
            }
            toastr()->success('تم اضافة الخبر بنجاح');
            return redirect()->back();
        }
        // dd($request->all());
        else{
            toastr()->error($validator->getMessageBag()->first());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.blogs.edit' , compact('blog' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $validator = validator($request->all(),[
            'title' => 'required|max:255',
            'short_description'=>'required',
            'long_description'=>'required',

        ],[
            'title.required' => 'عنوان الخبر مطلوب',
            'short_description.required' => 'الوصف الختصر مطلوب',
            'long_description.required' => 'المحتوى مطلوب',


        ]);
        if (!$validator->fails()) {
            if ($request->hasFile('image')){
                $image = $request->file('image');
                $file_name = $image->getClientOriginalName();
                $blog->update([
                    'image' => $file_name,
                ]);
            }else{
                $file_name = '';
            }

            $blog->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'category_id' => $request->category_id ?? $blog->category_id,
            ]);
            $blog->save();
            if($file_name !== ''){
                // move pic
                $imageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('Attachments/'), $imageName);
            }
            toastr()->success('تم تعديل الخبر بنجاح');
            return redirect()->back();
        }
        // dd($request->all());
        else{
            toastr()->error($validator->getMessageBag()->first());
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        toastr()->success('تم حذف الخبر بنجاح');
        return redirect()->back();
    }
}
