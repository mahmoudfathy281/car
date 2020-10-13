<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
class CarController extends Controller
{
    //
    function car(){
        $car = Cars::get();
        
        // view
        return view('car', [
            'Cars' => $car,
            
        ]);
        
    }
    function id($id){
        $cars = Cars::where('id','=',$id)->first();
        return view('show',[
            'cars'=>$cars
        ]);
    }

    function create(){
        return view('create');
    }
    function add(Request $request){
        $validator = \Validator::make($request->all(),[
            'car_name'  => 'required|max:50|min:2',
            'car_desc'  => 'required|max:300|min:10',
            'image'     => 'required|image|max:2048'
        ]);
        if($validator->fails()){
            return redirect('/car/create')
                    ->withErrors($validator)
                    ->withInput();
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'_'.\Str::random(30).'.'.$image->getClientOriginalExtension();
            $destPath = public_path('/image');
            $image->move($destPath, $name);
            $imageName = 'image/'.$name;
        }
        $car = new Cars();
        $car->car_type = $request->car_name;
        $car->car_desc = $request->car_desc;
        $car->car_image = $imageName;
        $car->save();
        return redirect('/car');
    }
}
