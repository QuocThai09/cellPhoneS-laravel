<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Branch;
use App\Models\BuyWithProduct;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\ColorProduct;
use App\Models\ComponentPc;
use App\Models\DetailImageProduct;
use App\Models\District;
use App\Models\NewTech;
use App\Models\Product;
use App\Models\SliderSale;
use App\Models\Store;
use App\Models\TypeProduct;
use App\Models\UsedGood;
use App\Models\WareHouse;

class HomeController extends Controller
{
   public function index(){

      $type_product_db = TypeProduct::all();
      $categoty_db = Category::all();
      $accessory_db = Accessory::all(); 
      $component_pc_db = ComponentPc::all();
      $used_goods_db = UsedGood::all();
      $slider_sale_db = SliderSale::all();
      $new_tech_db = NewTech::all();

      $mobile_branch_db = Branch::join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Điện thoại, Table')
      ->take(9)
      ->get();    

      $laptop_branch_db = Branch::join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Laptop')
      ->take(9)
      ->get();

      $sound_branch_db = Branch::join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Âm thanh')
      ->take(9)
      ->get();

      $watch_branch_db = Branch::join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Đồng hồ, Camera')
      ->take(8)
      ->get();

      $househole_branch_db = Branch::join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Đồ gia dụng')
      ->take(6)
      ->get();

      $product_mobile_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Điện thoại, Table')
      ->orderBy('product_id','desc')
      ->get();

      $product_laptop_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Laptop')
      ->orderBy('product_id','desc')
      ->get();

      $product_PC_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','PC,Màn hình,Máy tính')
      ->orderBy('product_id','desc')
      ->get();

      $product_sound_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Âm thanh')
      ->orderBy('product_id','desc')
      ->get();

      $product_watch_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Đồng hồ, Camera')
      ->orderBy('product_id','desc')
      ->get();

      $product_househole_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Đồ gia dụng')
      ->orderBy('product_id','desc')
      ->get();


      $product_phone_hot_db = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Điện thoại, Table')
      ->orderBy('product_id','desc')
      ->where('hot',1)
      ->get();

      

      return view('index',['categoty_db'=>$categoty_db,'accessory_db'=>$accessory_db,'product_mobile_db'=>$product_mobile_db,
      'mobile_branch_db'=>$mobile_branch_db,'product_laptop_db'=>$product_laptop_db,'laptop_branch_db'=>$laptop_branch_db,
      'product_PC_db'=>$product_PC_db,'type_product_db'=>$type_product_db,'sound_branch_db'=>$sound_branch_db,
      'product_sound_db'=>$product_sound_db,'watch_branch_db'=>$watch_branch_db,'product_watch_db'=>$product_watch_db,
      'househole_branch_db'=>$househole_branch_db,'product_househole_db'=>$product_househole_db,'component_pc_db'=>$component_pc_db,
      'used_goods_db'=>$used_goods_db,'slider_sale_db'=>$slider_sale_db,'new_tech_db'=>$new_tech_db,
      'product_phone_hot_db'=>$product_phone_hot_db]);
   }

   public function detailProduct(Request $res){
      $slug = $res->slug;
      $product_db = Product::where('slug',$slug)->first();

      $detail_img_db = DetailImageProduct::where('product_id',$product_db->product_id)->get();

      $slider_sale_db = SliderSale::all();

      $city = City::all();

      $city_default = City::first();
      $district_default = District::where('city_id',$city_default->id)->get();

      //lấy số lượng của hàng có sp 
      $count_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
      ->join('districts','district_id','=','districts.id')
      ->join('cities','districts.city_id','=','cities.id')
      ->where('cities.id',$city_default->id)
      ->count();

      //Lấy sdt and address store có sp
      $address_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
      ->join('districts','district_id','=','districts.id')
      ->join('cities','districts.city_id','=','cities.id')
      ->where('cities.id',$city_default->id)
      ->get();

      //lấy sp mua kèm 
      $buyWithProduct = BuyWithProduct::join('products','products.product_id','=','buy_with_id')
      ->where('product_key',$product_db->product_id)
      ->orderBy('product_id','DESC')
      ->get();


      //lay img mau sp mua kem
      $colorBuyWithProduct = ColorProduct::orderBy('product_id','DESC')->get();
      
      //dd($buyWithProduct);
      //dd($colorBuyWithProduct);
      
      return view('detailProduct',['product_db'=>$product_db,'slider_sale_db'=>$slider_sale_db,
      'detail_img_db'=>$detail_img_db,'city'=>$city,'city_default'=>$city_default,'district_default'=>$district_default,
      'count_store_product'=>$count_store_product,'address_store_product'=>$address_store_product,
      'buyWithProduct'=>$buyWithProduct,'colorBuyWithProduct'=>$colorBuyWithProduct]);

   }

   public function dataCity(Request $res){
      $city_id = $res->id;
      $city_db = City::where('id',$city_id)->first();

      //Lay gia tri district of city
      $district_db = District::where('city_id',$city_id)->get();
      $output = '<option value="0">Quận/Huyện</option>';
      foreach($district_db as $item){
         $output .= '<option value="'.$item->id.'">'.$item->district_name.'</option>';
      }

      //count quantity store sp 
      $count_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
      ->join('districts','district_id','=','districts.id')
      ->join('cities','districts.city_id','=','cities.id')
      ->where('cities.id',$city_id)
      ->count();

      //Lấy sdt and address store có sp
      $address_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
      ->join('districts','district_id','=','districts.id')
      ->join('cities','districts.city_id','=','cities.id')
      ->where('cities.id',$city_id)
      ->get();

      $output_address ="";
      $count = 1;
      foreach($address_store_product as $item){
         $output_address .= ($count % 2 == 0) ? 
         '<div class="item">
            <div class="phone">
               <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
               </svg>
               <a href="">'.$item->hot_line.'</a>
            </div>
            <hr>
            <div class="address">
              <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                  <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                </svg> 
                <a href="">'.$item->address.'</a>
            </div>
         </div>'
         :
         '<div style="background-color:#F2F2F2;">
            <div class="item" >
               <div class="phone">
                 <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                 </svg>
                 <a href="">'.$item->hot_line.'</a>
               </div>
               <hr>
               <div class="address">
                 <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                     <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                   </svg>
                   <a href="">'.$item->address.'</a>
               </div>
            </div>
         </div>'
         ;
         $count ++;
      }

      return response()->json(['city_name'=>$city_db->city_name,'district_db'=>$output,
      'count_store_product'=>$count_store_product,'output_address'=>$output_address]);
   }

   public function districtSelect(Request $res){
      
      $district_id = $res->id;
      $city_name = $res->city_name;
      $output_address ="";
      $count = 1;

      if($district_id == 0){

         $count_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
         ->join('districts','district_id','=','districts.id')
         ->join('cities','districts.city_id','=','cities.id')
         ->where('cities.city_name',$city_name)
         ->count();

         //Lấy sdt and address store có sp
         $address_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
         ->join('districts','district_id','=','districts.id')
         ->join('cities','districts.city_id','=','cities.id')
         ->where('cities.city_name',$city_name)
         ->get();

         foreach($address_store_product as $item){
            $output_address .= ($count % 2 == 0) ? 
            '<div class="item">
               <div class="phone">
                  <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                  </svg>
                  <a href="">'.$item->hot_line.'</a>
               </div>
               <hr>
               <div class="address">
                 <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                     <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                   </svg> 
                   <a href="">'.$item->address.'</a>
               </div>
            </div>'
            :
            '<div style="background-color:#F2F2F2;">
               <div class="item" >
                  <div class="phone">
                    <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                    </svg>
                    <a href="">'.$item->hot_line.'</a>
                  </div>
                  <hr>
                  <div class="address">
                    <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                        <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                      </svg>
                      <a href="">'.$item->address.'</a>
                  </div>
               </div>
            </div>'
            ;
            $count ++;
         }
      }else{
         //count quantity store sp 
         $count_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
         ->join('districts','district_id','=','districts.id')
         ->where('districts.id',$district_id)
         ->count();

         //Lấy sdt and address store có sp
         $address_store_product = WareHouse::join('stores','warehouse_store_id','=','store_id')
         ->join('districts','district_id','=','districts.id')
         ->where('districts.id',$district_id)
         ->get();

         
         foreach($address_store_product as $item){
            $output_address .= ($count % 2 == 0) ? 
            '<div class="item">
               <div class="phone">
                  <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                  </svg>
                  <a href="">'.$item->hot_line.'</a>
               </div>
               <hr>
               <div class="address">
               <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                     <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                  </svg> 
                  <a href="">'.$item->address.'</a>
               </div>
            </div>'
            :
            '<div style="background-color:#F2F2F2;">
               <div class="item" >
                  <div class="phone">
                  <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                  </svg>
                  <a href="">'.$item->hot_line.'</a>
                  </div>
                  <hr>
                  <div class="address">
                  <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                        <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                     </svg>
                     <a href="">'.$item->address.'</a>
                  </div>
               </div>
            </div>'
            ;
            $count ++;
         }
      }

      return response()->json(['count_store_product'=>$count_store_product,'output_address'=>$output_address]);
   }

   public function provisionalBuyWith(Request $res){
      $provisionalBuyWith = 0;
      $provisionalBuyWith += $res->price;
      return response()->json(['provisionalBuyWith'=>$provisionalBuyWith]);
   }
}
