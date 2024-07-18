<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Product::all();
        return view('my_design.home',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=new Product();
        return view('my_design.create');
    }


    public function store(Request $request)
    {
        // تحقق من صحة البيانات المُرسلة من النموذج
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category'=>'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // يحقق من أنها صورة وحجمها لا يزيد عن 2 ميجابايت
        ]);
    
        // حفظ الصورة على الخادم واستخراج اسم الملف
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        // إنشاء سجل جديد للمنتج في قاعدة البيانات وتعيين اسم الملف في ImagePath
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->category = $validatedData['category'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->ImagePath = $imageName; // تعيين اسم الملف لحقل ImagePath
        $product->save();
    
        // إعادة توجيه المستخدم إلى صفحة العرض أو الصفحة الرئيسية مع رسالة نجاح
        return redirect()->route('products.index')->with('success', 'تمت إضافة المنتج بنجاح.');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    // اختياري: حذف الصورة أو أي ملفات مرتبطة بالمنتج
    // unlink(public_path('images/' . $product->image_path));

    return redirect()->route('products.index')->with('success', 'تم حذف المنتج بنجاح.');
}



    public function food()
{
    $category = 'food';
    $product = Product::where('category', $category)->get();
    return view('categories.food1', compact('product'));
}

public function electricalProduct()
{
    $category = 'electronic';
    $product = Product::where('category', $category)->get();
    return view('categories.electronic', compact('product'));
}

public function mickup()
{
    $category = 'mickup';
    $product = Product::where('category', $category)->get();
    return view('categories.mickup', compact('product'));
}
}
