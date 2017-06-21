<?php

namespace App\Http\Controllers;
use App\Diskon;
use App\Customer;
use App\Product;
use App\Category;
use App\Toko;
use App\Member;
use DB;
use Illuminate\Http\Request;

class Barang_controller extends Controller
{
   //  public function produk()
   // {
   //   $products=Product::all();
   //    return view ('product', compact('products'));

   // }

   // public function diskon()
   // {
   //   $diskons=Diskon::all();
   //    return view ('diskon', compact('diskons'));

   // }
  public function customer()
   {
     $customers=Customer::all();
     $products=Product::all();
     $diskons=Diskon::all();
      $categories=Category::all();
       $tokos=Toko::all();
      return view ('customer', compact('customers', 'products', 'diskons', 'categories', 'tokos'));

   } 

   public function viewdata($id)
   {
 	// $members=DB::table('members')->where('id', 4 )->get();
 	//
 	 $members=DB::table('members')->where('id', $id)->get();
    return view ('member1', compact('members'));
   }

  //   public function view($id)
  //  {
 	// // $members=DB::table('members')->where('id', 4 )->get();

 	// // print $id;
 	// // die();
 	// $members=DB::table('members')->get();
  //   return view ('member', compact('members'));
  //  }

   public function view()
   {

 	// $members=DB::table('members')->where('id', 4 )->get();

 	// print $id;
 	// die();
 	$members=DB::table('members')->get();
    return view ('member', compact('members'));
   }

   

    public function form()
   {
  return view('form');
   }
   public function insert(Request $request)
   {
   	$id=$request->input("id");

   $name=$request->input("name");


   $address=$request->input("address");
 

   $dob=$request->input("dob");
    

    $gender=$request->input("gender");
  

    $city=$request->input("city");
 

   $email=$request->input("email");
  

    $country=$request->input("country");
   

   	DB::table('members')->insert

  (
  
	["id"=>$id,

	 "name"=>$name,
	 "address"=>$address,
	 "dob"=>$dob,
	 "email"=>$email,
	 "city"=>$city,
	 "gender"=>$gender,
	 "country"=>$country
	]
	);

  print "success";
  die();

   }


}
