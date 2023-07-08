<?php

namespace App\Http\Controllers;

use App\Models\MenuFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use Intervention\Image\Facades\Image as Image;

class UserController extends Controller
{
    public function userIndex(){
        return view('user.index');  
    }

    public function Menu(){
        return view('user.pages.menu');  
    }

    public function Hall(){
        return view('user.pages.hall');  
    }

    public function tableA(){
        return view('user.pages.table_halls.tablehallA');
    }

    public function tableB(){
        return view('user.pages.table_halls.tablehallB');
    }

    public function tableC(){
        return view('user.pages.table_halls.tablehallC');
    }

    

    public function editOrderFood($id){
        $foodData = MenuFood::FindorFail($id);
        
        return view('user.pages.ordermenufood', compact('foodData'));

    }

    public function storeFood(Request $request){
        $food_name = $request->name;
        $food_price = $request->price;

        $img_food = $request->img_food;
        $img_name = rand(1,9999).'-'.$img_food->getClientOriginalName();
        Image::make($img_food)->save('Images/imagesFood/'. $img_name);

        DB::table('user_foods')->insert([
            'name' => $food_name,
            'price' => $food_price,
            'img_food' => $img_name
        ]);

        return redirect()->route('menu_user')->with('success', 'File uploaded successfully.');
    }

    public function reservation() {
        return view('user.pages.reservation');
    }

    public function reservation_store(Request $request){

        // $validated = $request->validate([
        //     'name' => 'required|unique:posts|max:255',
        //     'phone' => 'required',
        //     'hall' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'table' => 'required',
        //     'description' => 'required',
        // ]);

        $name = $request->name;
        $phone = $request->phone;
        $hall = $request->hall;
        $date = $request->date;
        $time = $request->time;
        $table = $request->table;
        $description = $request->description;


        DB::table('reservations')->insert([
            'name' => $name,
            'phone' => $phone,
            'hall' => $hall,
            'date' => $date,
            'time' => $time,
            'table' => $table,
            'description' => $description,
        ]);

        return redirect()-> route('index_user');
    }


    
        
}
