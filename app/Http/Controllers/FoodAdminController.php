<?php

namespace App\Http\Controllers;

use App\Models\MenuFood;
use Intervention\Image\Facades\Image as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodAdminController extends Controller
{
    public function foodAll(){

        $foodData= DB::table('menu_food')->get();
        return view('admin.food.food_all', compact('foodData'));
    }

    public function foodInsert(){
        return view('admin.food.food_insert');
    }

    // public function ImageUploader($file)
    // {
    //     $fileName = time() . "_" . $file->getClientOriginalName();
    //     $path = public_path('Images/imagesFood/');
    //     $files = $file->move($path, $fileName);
    //     $img = Image::make($files->getRealPath());
    //     $img->resize(259, 204);
    //     $img->save($path . "small-" . $fileName);
    //     return "Images/imagesFood/" . $fileName;
    // }

    public function foodStore(Request $request){
        $food_name = $request->foodName;
        $food_type = $request->type_food;
        $food_price = $request->price;

        $img_food = $request->file('image');
        // $img = $this->ImageUploader($img_food);
        $img_name = rand(1,9999).'-'.$img_food->getClientOriginalName();
        Image::make($img_food)->save('Images/imagesFood/'. $img_name);

        // FoodAdminController::create([
        //     'small_explain'=>$request['small_explain'],
        //     'title'=>$request['title'],
        //     'body'=>$request['body'],
        //     'important_body'=>$request['important_body'],
        //     'quote'=>$request['quote'],
        //     'author_quote'=>$request['author_quote'],
        //     'index_image' => $img,
        //     'header_image' => $img,
        //     'text_image' => $img,
        // ]);

        DB::table('menu_food')->insert([
            'name' => $food_name,
            'type_food' => $food_type,
            'price' => $food_price,
            'img_food' => $img_name
        ]);

        // return redirect() -> route('food_all');
        return redirect()->route('food_all')->with('success', 'File uploaded successfully.');

    }

    public function foodEdit($id){
        $editData = MenuFood::FindorFail($id);

        return view('admin.food.food_edit', compact('editData'));    
    }
    

    public function foodUpdate(Request $request ,$id){
        if($request->file('img_food')){
            $img_food = $request->file('image');
            $img_name = mt_rand(1,9999).'-'.$img_food->getClientOriginalName();
            Image::make($img_food)->save('Images/imagesFood/'. $img_name);
        }
        else{
            $img_name = $request->old_img;
        }

        if($request->type_food == "Open this select food type"){
            $type_food = $request->old_type;
        }
        else{
            $type_food = $request->type_food;
        }

        $food_name = $request->foodName;
        $food_price = $request->price;
        $img_food = $request->img_food;

        MenuFood::FindorFail($id)->update([
            'name' => $food_name,
            'type_food' => $type_food,
            'price' => $food_price,
            'img_food' => $img_name
        ]);

        return redirect() -> route('food_all');

    }

    public function foodDelete($id){
        MenuFood::FindorFail($id)->delete();

        return back();
    }

   
}
