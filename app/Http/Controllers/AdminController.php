<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\ShopProduct;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\Filesystem;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $category = Category::all();

        return view('admin.cate_parent_list', ['category' => $category]);
    }

    public function getListChild($id)
    {
        $category = Category::where('category_parent_id', $id)->get();

        return view('admin.cate_child_list', ['category' => $category]);
    }

    public function getAdd()
    {
        $categoryParent = Category::where('category_parent_id', null)->pluck('name', 'category_id')->toArray();
        $none['0'] = "None";
        $categoryParent = $none + $categoryParent;

        return view('admin.add_category', compact('categoryParent'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
            'name' => 'required'
            ],
            [
            'name.requied' => 'Bạn chưa nhập category'
            ]);
        $category = new Category;
        $category->name = $request->name;
        $category->category_parent_id = $request->category_parent_id;
        $category->save();

        return redirect('admin/category/add')->with('thongbao', 'add sucess !');
    }

    public function getEdit($id)
    {
        $category = Category::where('category_id', $id)->first();

        return view('admin.edit_category', ['category' => $category]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:categories,name'
            ],
            [
                'name.required' => 'Bạn Chưa nhập Category',
                'name.unique' => 'Category đã tồn tại'
            ]);
        $category =Category::where('category_id', $id)->first();
        $category->name = $request->name;
        $category->save();

        return redirect('admin/category/cate_list')->with('thongbao', 'Edit success !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDelete($id)
    {
        $category =  Category::find($id);
        $categoryChild = Category::where('category_parent_id', $id)->delete();
        $category->delete();

        return redirect('admin/category/cate_list')->with('thongbao1', 'Delete Success !');
    }



    //Controller Product
    public function getProductList()
    {
        $product = Product::all();

        return view('admin.product_list', ['product'=>$product]);
    }


    public function getAddProduct()
    {
        $category_parent = Category::where('category_parent_id',  NULL)->get();
        $category = Category::where('category_parent_id', $category_parent[0]['category_id'])->get();
        $shop_product = ShopProduct::all();

        return view('admin.add_product', ['category' => $category, 'shop_product' => $shop_product, 'category_parent' => $category_parent ]);
    }

    public function postAddProduct(Request $request)
    {
        $this->validate($request,
            [
            'name' => 'required'
            ],
            [
            'name.requied' => 'Bạn chưa nhập category'
            ]);
        $product = new Product;
        $product->name = $request->name;
        $product->unit_price = $request->unit_price;
        $product->total_quanity = $request->total_quanity;
        $product->shop_product_id = $request->shop_product_id;
        $product->category_id = $request->category_id;
        $product->rate_count = 0 ;
        $product->top_product = $request->top_product;

        $product->save();

        $category = Category::find($product->category_id);
        $shop_product = ShopProduct::find($product->shop_product_id);

        $file = $request->file('image_link');
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move('assets/uploads', $name);

        // $image = Image::create([
        //     'link' => $name,
        //     'product_id' => $product->product_id,
        //     ]);
        $image = new Image;
        $image['link'] = $name;
        $image['product_id'] = $product->product_id;
        $image->save();
        $category->save();
        $shop_product->save();


        return redirect('admin/product/product_list')->with('thongbao', 'add sucess !');
    }

    public function getEditProduct($id)
    {
        $product = Product::find($id);

        return view('admin.edit_product', ['product'=>$product]);
    }

    public function postEditProduct(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'name.required' => 'Bạn Chưa nhập tên Product',

            ]);
        $product =Product::find($id);
        if ($request->name){
            $product->name = $request->name;
        }

        $product->unit_price = $request->unit_price;
        $product->total_quanity = $request->total_quanity;
        $product->top_product = $request->top_product;

        if ($request->image_link) {
            $file = $request->file('image_link');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('assets/uploads', $name);
            // $image = Image::create([
            //     'link' => $name,
            //     'product_id' => $id,
            //     ]);
            $image = new Image;
            $image['link'] = $name;
            $image['product_id'] = $id;
            $image->save();

        }

        $product->save();

        return redirect('admin/product/product_list')->with('thongbao', 'Edit success !');

    }

    public function getDeleteProduct($id)
    {
        $product =  Product::find($id);
        $product->delete();

        return redirect('admin/product/product_list')->with('thongbao1', 'Delete Success !');
    }

    //Controller User
    public function getUserList()
    {
        $user = User::all();

        return view('admin.user_list', ['user'=>$user]);
    }

    public function getDeleteUser($id)
    {
        $user =  User::find($id);
        $user->delete();

        return redirect('admin/user/user_list')->with('thongbao1', 'Delete Success !');
    }

    //Controller Order
    public function getOrderList()
    {
        $order = Order::all();

        return view('admin.order_list', ['order'=>$order]);
    }

    public function getDetailOrder($id)
    {
        $orderdetail = OrderDetail::where('order_id', $id)->get();
        $order = Order::where('order_id',$id)->get();
        return view('admin.detail_order', ['orderdetail' => $orderdetail, 'order' => $order]);
    }

    public function getDeleteOrder($id)
    {
        $order =  Order::find($id);
        $order->delete();

        return redirect('admin/order/order_list')->with('thongbao1', 'Delete Success !');
    }

}
