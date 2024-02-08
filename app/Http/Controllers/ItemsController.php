<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Item;
class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::paginate(5); // Adjust the pagination count as needed

        return view('items.list', compact('items'));
    }


    function destroy($id){

             $items=Item::findorfail($id);
             $items->delete();
             return to_route('items.list')->with('success', 'Task deleted successfully');

    return abort(403);
    }
    function create(){
        $items=Item::all();
         return view("items.add" ,["data"=> $items]);
      }
      function store(){

        request()->validate(
         [
             "title"=>"required ",
             "description"=>"required",
             "status"=>"required",



         ],
         [
            "title.required"=>"Task title is required",
            "description.required"=>"Task description is required",
            "status.required"=>"Task status is required",
         ]
         );


         $request_data = request()->all();

             $items=Item::create($request_data);

       return to_route('items.list')->with('success', 'Task added successfully');
      }



      function edit($id){
        $items=Item::findorfail($id);
        //  dd($post);
        return view("items.edit",["data"=>$items]);
     }
     function update($id, Item  $items){
        $items=Item::findorfail($id);


            $items=Item::findorfail($id);

            $items->title=request("title");
            $items->description=request("description");
            $items->status=request("status");
            $items->date=request("date");

            $items->update();
       return to_route('items.list')->with('success', 'Task updated successfully');



    }

}
