<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function addProduct(Request $request){
        $name=$request->input('name');
        $decription=$request->input('description');
        $detail=$request->input('detail');
        $categoryid=$request->input('categoryid');
        $priceold=$request->input('price');
        $discountpercent=$request->input('discount');
        $instock=$request->input('instock');
        $created_at=now();
        $updated_at=now();
        $pricespecial=0.0;

        if($discountpercent == null)
            $discountpercent=(int)0;
        $pricespecial = (float)$priceold * ((100 - (int)$discountpercent)/100);
           
        DB::table('detail_products')->insert([
            [
                 'decription'=>$decription,
                 'detail' => $detail,
                 'created_at'=>$created_at,
                 'updated_at'=>$updated_at,
            ]
        ]);
        DB::table('products')->insert([
            [
                'title'=>$name,  
                'category_id'=>$categoryid,
                'priceold'=>(float)$priceold,
                'pricespecial'=>(float)$pricespecial,
                // 'inStock'=>(int)$instock,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at,
                'discountpercent' => $discountpercent
                // 'image'=>$newImageURL,
            ]
        ]);
         
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            //return back()->with('success','Image Upload successfully');
            $newImageURL= UploadFile::uploadFile('upload',$image);
            // $updateArr['image'] = $newImageURL;
            DB::table('shoes')->insert([
                [
                    'name'=>$name,
                    'description'=>$description,
                    'categoryID'=>$categoryid,
                    'inPrice'=>(float)$inprice,
                    'outPrice'=>(float)$outprice,
                    'inStock'=>(int)$instock,
                    'created_at'=>$created_at,
                    'updated_at'=>$updated_at,
                    'image'=>$newImageURL,
                ]
            ]);
        }
        // xy ly luu xuong db
        return redirect('/admin/manageProduct');
    }

    public function getProductInfo($ProductID)
    {
        $product = DB::table('products')
                                ->join('categorys', 'products.category_id', '=', 'categorys.category_id')
                                ->join('detail_products', 'products.product_id', '=', 'detail_products.product_id')
                                ->select('products.product_id','title','decription', 'detail', 'products.src','priceold','pricespecial','discountpercent', 'products.created_at','products.updated_at','categorys.category_name', 'categorys.category_id')
                                ->where('products.product_id',$ProductID)
                                ->get();
        // info($ProductID);
        // $categoryName=DB::table('category')
        //     ->where('id','=',$id)
        //     ->select('category.categoryName')
        //     ->get();
        return response()->json( $product);
    }

    public function updateProduct(Request $req)
    {
        // extract data from input
        $product_id = $req->input(('productId'));
        $productName = $req->input(('productName'));
        $productDescription = $req->input(('productDescription'));
        $productDetail = $req->input(('productDetail'));
        $category_id = $req->input(('category_id'));
        $oldPrice = $req->input(('oldPrice'));
        $discount = $req->input(('discount'));
   
        $specialprice = ((float)$oldPrice/100) * (100-(int)$discount);
        $updateProducts = [
            // 'product_id' => $productId,
            'title' => $productName,
            'category_id' => $category_id,
            'priceold' => $oldPrice,
            'pricespecial' => $specialprice,
            'discountpercent' => $discount

        ];
        $updateDetail = [
            'decription' => $productDescription,
            'detail' => $productDetail,
        ];
       
        // return $updateArr;
        // process file
        $hasFile = $req->hasFile('file');
        if ($hasFile) {
            $file = $req->file('file');
            $newImageURL = $file -> move("assets\images\staff", rand(). ".png");
            $updateArr['image'] = $newImageURL;
        }
         DB::table('products')
            ->where('product_id', (int)$product_id)
            ->update(
                $updateProducts
            );
        DB::table('detail_products')
            ->where('product_id', (int)$product_id)
            ->update(
                $updateDetail
            );
        return 1;
    }
    public function deleteProduct($ProductID){
        DB::table('products')
            ->where('product_id', '=', $ProductID)
            ->delete();
        DB::table('detail_products')
            ->where('product_id', '=', $ProductID)
            ->delete();
        return 1;
    }
}
