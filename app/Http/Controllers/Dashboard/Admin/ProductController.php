<?php
namespace App\Http\Controllers\Dashboard\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;
use App\User;
use Illuminate\Auth\Access\Gate; 
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function GetCreatePost()
    {
        return view('dashboard.admin.product.create');
    }

    public function CreatePost(Request $request)
    {
        $post = new product([
            'name' => $request->input('title'),
            'explain' => $request->input('explain'),
            'price' => $request->input('price'),
            'content' => $request->input('content'),
        ]);
    //--------------
        $uploadedFile = $request->file('img');
     $filename = $uploadedFile->getClientOriginalName();

    Storage::disk('local')->putFileAs('/images/'.$filename, $uploadedFile, $filename);
           $post->pic = $filename;
           
         //-------------
         
        $post->save();
        return redirect()->route('dashboard.admin.product.create')->with('info', 'محصول جدید ایجاد شد و نام آن ' . $request->input('title'));
    }
    public function GetManagePost(Request $request)
    {
        $posts = product::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.product.manage', ['posts' => $posts]);
    }

    public function DeletePost($id){
        $post = product::find($id);
        $post->delete();
        return redirect()->route('dashboard.admin.product.manage')->with('info', 'پست پاک شد');
    }

    public function GetEditPost($id)
    { 
        $post = product::find($id);
        return view('dashboard.admin.product.updateproduct', ['post' => $post, 'id' => $id]);
    }

    public function UpdatePost(Request $request)
    {
        $post = product::find($request->input('id'));
        if (!is_null($post)) {
            $post->name = $request->input('title');
            $post->explain = $request->input('explain');
            $post->price = $request->input('price');
            $post->content = $request->input('content');
            $post->save();
        }
        return redirect()->route('dashboard.admin.product.updateproduct',$post->id)->with('info', 'محصول ویرایش شد');
    }
}