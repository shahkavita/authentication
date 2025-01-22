<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
        public function index()
        {
             return view('admin.Product.index');
    
        }
    public function getdata()
    {
        $product=product::get();
        return response()->json($product);
    }
    public function saveproduct(Request $request)
    {
        $id=$request['hid'];
        $post=$request->post();
        if($request['hid']!="")
        {
            $product=product::find($id);
            if($request->hasFile('photo'))
            {
                $image_path=public_path("storage/").$product->p_image;
                if(file_exists($image_path))
                {
                    @unlink($image_path);
                }
                $path=$request->photo->store('images/product','public');
                $update_data=[
                    'p_name'=>isset($post['name']) ?$post['name']: "",
                    'p_description'=>isset($post['description']) ?$post['description']: "",
                    'p_price'=>isset($post['price']) ?$post['price']: "",
                    'p_image'=>$path,
                ];
                $product->update($update_data);
            }
            else
            {
                $update_data=[
                    'p_name'=>isset($post['name']) ?$post['name']: "",
                    'p_description'=>isset($post['description']) ?$post['description']: "",
                    'p_price'=>isset($post['price']) ?$post['price']: "",
                ];
                $product->update($update_data);
            }
            return response()->JSON(['success'=>true,'message'=>'Product Updated Successfully!!']);
            /*$request->validate([  
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'photo'=>'required|mimes:png,jpg,jpeg|max:3000',
               ],
               [
                    'name.required'=>'The Name field is required!',
                    'description.required'=>'The Description field is required!',
                    'price.required'=>'The Price field is required!',
                    'photo.required'=>'The Image field is required!',  
                    'photo.max'=>'The Image field Maximum size will be 3 MB!',   
                    'photo.mimes'=>"The Image field must be a file of type: png, jpg, jpeg.",  
               ]);*/
              
        }
        else
        {
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'photo'=>'required|mimes:png,jpg,jpeg|max:3000',
               ],
               [
                    'name.required'=>'The Name field is required!',
                    'description.required'=>'The Description field is required!',
                    'price.required'=>'The Price field is required!',
                    'photo.required'=>'The Image field is required!',  
                    'photo.max'=>'The Image field Maximum size will be 3 MB!',   
                    'photo.mimes'=>"The Image field must be a file of type: png, jpg, jpeg.",  
               ]);
               $filename=time().'_'.$request->photo;
               product::create([
                'p_name'=>$request->name,
                'p_description'=>$request->description,
                'p_price'=>$request->price,
                'p_image'=>$request->photo->store('images/product','public'),
               ]);
               return response()->json(['success'=>true,'message'=>"Product Added Successfully!!"]);
           
        }
    }
    public function editproduct(String $id)
    {
        $product=product::find($id);
        return response()->JSON($product);
    }
    public function deleteproduct(String $id)
    {
        $product=product::find($id);
        $product->delete();
        $image_path=public_path("storage/").$product->p_image;
        if(file_exists($image_path))
        {
            @unlink($image_path);
        }
        return response()->json(['success'=>true,'message'=>"Product Deleted Successfully!!"]);
        
    }

}
