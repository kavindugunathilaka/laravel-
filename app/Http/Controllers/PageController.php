<?php

namespace App\Http\Controllers;

use App\StoreModel;
use App\Task;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function store(Request $request){

        // dd($request->all());

         $store_models = new StoreModel();

         $this->validate($request,[
             'quantity'=>'required|max:100|min:2',
             'products'=>'required|max:100|min:2',
         ]);


         $store_models->quantity=$request->quantity;
         $store_models->products=$request->products;

         $store_models->save();

         //return value
         $data =StoreModel::all();
         //test
        //  dd($data);

        return view('login')->with('login',$data);

        //  return redirect()->back();
        //  return view('/#');
    }

    public function UpdateComplete($id){

        $UPDATE = StoreModel::find($id);
        $UPDATE->iscompleted=1;
        $UPDATE->save();
        return redirect()->back();

    }

    public function UpdateNOTComplete($id){

        $UPDATE = StoreModel::find($id);
        $UPDATE->iscompleted=0;
        $UPDATE->save();
        return redirect()->back();

    }

    public function deletedata($id){

        $UPDATE =StoreModel::find($id);

        // $UPDATE->iscompleted=0;
        $UPDATE->delete();
        return redirect()->back();

    }

    public function updatedata($id){

        $UPDATE =StoreModel::find($id);

        return view('updatedata')->with('data',$UPDATE);

    }

    public function updatedata1(Request $request){

        dd($request);
                // $UPDATE =StoreModel::find($id);

        // return view('updatedata')->with('data',$UPDATE);

    }
}
