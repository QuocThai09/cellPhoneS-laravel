<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Branch;
use App\Models\BuyWithProduct;
use App\Models\CameraFeature;
use App\Models\CameraFront;
use App\Models\CameraRear;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CharacteristicProduct;
use App\Models\ChargingTech;
use App\Models\City;
use App\Models\ColorProduct;
use App\Models\ComponentPc;
use App\Models\DetailImageProduct;
use App\Models\Discount;
use App\Models\District;
use App\Models\NewTech;
use App\Models\Product;
use App\Models\QuestionProduct;
use App\Models\ScreenFeature;
use App\Models\ShoppingCart;
use App\Models\SliderSale;
use App\Models\Specifications;
use App\Models\Store;
use App\Models\TypeProduct;
use App\Models\UsedGood;
use App\Models\WareHouse;
use App\Models\Warranty;
use App\Models\WarrantyService;
use Symfony\Component\Console\Output\Output;

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

      //lay san pham tuong tu
      $product_similar = Product::where('series','=',$product_db->series)
      ->orderBy('product_id','DESC')
      ->get();

      if ($product_db->series == null) {
         $count_product_similar = 1;
      }else{
         $count_product_similar = Product::where('series','=',$product_db->series)
         ->count();
      }
      
      //lay mau cua sp
      $product_color = Product::join('color_products','products.product_id','=','color_products.product_id')
      ->where('products.product_id','=',$product_db->product_id)
      ->get();

      //lay color dau tien
      $product_color_first = Product::join('color_products','products.product_id','=','color_products.product_id')
      ->where('products.product_id','=',$product_db->product_id)
      ->first();

      //bat color_id
      $color_id = $product_color_first->id;
      if($res->color_id){
         $color_id = $res->color_id;
      }

      //lay bao hanh sp
      $warranty_product = Warranty::where('product_id','=',$product_db->product_id)
      ->get();

      //lay sp tuong tu 
      $product_similar_swiper = Product::join('branches','products.branch_id','=','branches.id')
      ->join('type_products','branches.type_product_id','=','type_products.id')
      ->where('type_product_name','Điện thoại, Table')
      ->orderBy('product_id','desc')
      ->take(9)
      ->get();

      //lay dat diem noi bac cua sp
      $characteristic_product = CharacteristicProduct::where('product_id','=',$product_db->product_id)
      ->get();

      //lay thong so ky thuat 
      $specifications_product = Specifications::where('product_id','=',$product_db->product_id)
      ->first();

      //lay thong so camera sau
      $camera_rear_product = CameraRear::where('specific_id','=',$specifications_product->id)
      ->get();

      //lay thong so camera truoc
      $camera_front_product = CameraFront::where('specific_id','=',$specifications_product->id)
      ->get();

      //lay thong so screen_features
      $screen_features_product = ScreenFeature::where('specific_id','=',$specifications_product->id)
      ->get();

      //lay thong so camera_features
      $camera_features_product = CameraFeature::where('specific_id','=',$specifications_product->id)
      ->get();

      //lay thong so charging_teches
      $charging_teches_product = ChargingTech::where('specific_id','=',$specifications_product->id)
      ->get();

      //lay cau hoi ve sp
      $question_product = QuestionProduct::where('product_id','=',$product_db->product_id)
      ->get();

      //lay discount cua sp
      $discount_product = Product::join('discounts','id','=','discount_id')
      ->where('product_id','=',$product_db->product_id)
      ->first();

      
      
      //dd($discount_product);
      //dd($colorBuyWithProduct);
      
      return view('detailProduct',['product_db'=>$product_db,'slider_sale_db'=>$slider_sale_db,
      'detail_img_db'=>$detail_img_db,'city'=>$city,'city_default'=>$city_default,'district_default'=>$district_default,
      'count_store_product'=>$count_store_product,'address_store_product'=>$address_store_product,
      'buyWithProduct'=>$buyWithProduct,'colorBuyWithProduct'=>$colorBuyWithProduct,'count_product_similar'=>$count_product_similar,
      'product_similar'=>$product_similar,'product_color'=>$product_color,'color_id'=>$color_id,'warranty_product'=>$warranty_product,
      'product_similar_swiper'=>$product_similar_swiper,'characteristic_product'=>$characteristic_product,
      'specifications_product'=>$specifications_product,'screen_features_product'=>$screen_features_product,
      'camera_rear_product'=>$camera_rear_product,'camera_front_product'=>$camera_front_product,
      'camera_features_product'=>$camera_features_product,'charging_teches_product'=>$charging_teches_product,
      'question_product'=>$question_product,'discount_product'=>$discount_product]);

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

   public function extendWarranty(Request $res){
      $output ="";
      $warranty = Warranty::where('id','=',$res->id)->get();
      foreach ($warranty as $item) {
         $output .='<div class="modal-header">
                        <p>'.$item->warranty_name.'</p>
                        <span class="close">
                           <svg width="25" height="25" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18 6 6 18"></path>
                              <path d="m6 6 12 12"></path>
                           </svg>
                        </span>
                     </div>
                     <div class="modal-body">
                        <strong>Sản phẩm áp dụng: </strong>'.$item->warranty_apply.'<br>
                        <strong>Thời gian tham gia: </strong>'.$item->warranty_time.'<br>
                        <strong>Quyền lợi và dịch vụ bảo hành:</strong><br>';
                        $warranty_servise = WarrantyService::where('warranty_id','=',$item->id)->get();
                        foreach ($warranty_servise as $val) {
                            $output .='<span>+ '.$val->warranty_service_name.'</span><br>';
                        }
                        $output .='
                        <strong>Điều kiện bảo hành: </strong>'.$item->warranty_terms.'<br>
                        <i>Lưu ý: </i>'.$item->warranty_note.'<br>
                        <strong>Thời gian xử lý: </strong>'.$item->warranty_processing.'<br>
                     </div>';
      }
      $output .="
         <script>
            $('.close').click(function(){
               $('#warrantyModal').hide();
                $('body').css('overflow','show');
            })
         </script>";
      return response()->json(['output'=>$output]);
   }

   public function feedback(Request $res){
      $rateCommon = $res->rateCommon;
      $ratePerforman = $res->ratePerforman;
      $ratePin = $res->ratePin;
      $rateCamera = $res->rateCamera;
      $name = htmlspecialchars( basename( $_FILES["imagefeedback"]["name"]));
      dd([$rateCommon,$ratePerforman,$ratePin,$rateCamera,$name]);
   }

   public function shoppingCart(Request $res){
      $data = [
         'color_id'=>$res->color_id,
         'product_id'=>$res->product_id,
      ];
      $create_shoppingCart = ShoppingCart::created([
         
      ]);
      //dd($data);
   }
}
