<?php

namespace App\Http\Controllers;
use App\FoodOrder;
use App\FoodOrderItem;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KitchenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('kitchen');
    }

    public function index()
    {

//        dd(FoodOrder::with('item','table')->get());

        return view('kitchen.home');
    }

    public  function orderData(Request $request)
    {
        if($request->ajax())
        {
//            $foodOrder = FoodOrder::where('rest_id', Auth::guard('kitchen')->user()->rest_id)->whereDate('order_date',DB::raw('CURDATE()'))->orderBy('status')->get();
//            $foodOrder = FoodOrder::with('item','table')->where('rest_id', Auth::guard('kitchen')->user()->rest_id)->whereDate('order_date',DB::raw('CURDATE()'))->orderBy('status')->get();
            $foodOrder = FoodOrder::with('item','table')->where('rest_id', Auth::guard('kitchen')->user()->rest_id)->whereDate('order_date',DB::raw('CURDATE()'))->orderBy('status')->get();
            return $foodOrder;
        }
        return false;
    }


    public function OrderDone($id){
        FoodOrder::where('id', $id)->update(array('status' => 1));
        return redirect('/kitchen/home')->with('status', 'Order no '.$id.' Done !');
    }

    public function ItemDone($id, $orderID){
        $foodOrder = FoodOrderItem::find($id);

        $order = FoodOrder::find($orderID);
        $order->total_bill += $foodOrder->item_price * $foodOrder->item_quantity;
        $order->save();

        FoodOrderItem::where('id', $id)->update(array('order_status' => 1));
        return redirect('/kitchen/home')->with('status', 'Item Done !' .$id);
    }
}
