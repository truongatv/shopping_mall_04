<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;
use App\Models\Category;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategory($category_parent_id)
    {
        $category_child = Category::where('category_parent_id', $category_parent_id)->get();
        foreach($category_child as $category)
        {
            echo "<option value='".$category->category_id."'>".
                $category->name."</option>";
        }
    }

}

