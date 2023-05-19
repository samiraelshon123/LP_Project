<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
use App\Models\Contact;
use App\Models\OrderContent;
use App\Models\OrderShipping;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public $subTotal = 0;
    public $discount = 0;
    public $total = 0;
    public $productTotal = 0;
    public $quantity = 0;

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function home(){
        $user = User::find(Auth::id());
        $user_name = $user->name;
        $image = Slider::all();
        $category = Category::all();
        $product = Product::all();
        return view('user.home' , compact('category', 'image', 'product', 'user_name'));
    }
    public function shop($cat_id){

        $price_count = 0;
        $color_count = 0;
        $size_count = 0;
        $price = [];
        $color = [];
        $size = [];
        $image = Slider::all();
        $category = Category::all();
        $data = Product::where('category_id', $cat_id)->get();
        $all_products = sizeof($data);

        $min = 1;
        $max = 100;
        $colors = ['Black', 'White', 'Red', 'Blue', 'Green'];
        $sizes = ['XS', 'S', 'M', 'L', 'XL'];
        for($i=0; $i<5; $i++){
            foreach($data as $product){
                if($product['price']>$min && $product['price']<=$max){
                    $price_count++;
                }
                if($product['color'] == $colors[$i]){
                    $color_count++;
                }
                if($product['size'] == $sizes[$i]){
                    $size_count++;
                }

            }
            array_push($price, $price_count);
            array_push($color, $color_count);
            array_push($size, $size_count);
            $min+=100;
            $max+=100;
            $price_count=0;
            $color_count=0;
            $size_count=0;

        }


        return view('user.shop', compact('data', 'category', 'image', 'price', 'all_products', 'price', 'color', 'size'));

    }
    public function details($id){

        $product = Product::find($id);
        $product_id = $product['id'];

        $image = Slider::all();
        $category = Category::all();
        return view('user.details' , compact('product', 'category', 'image', 'product_id'));
    }

    public function addToCart($id){

        $product1 = Product::find($id);
        $product = ['id'=>$product1->id, 'name'=>$product1->name, 'price'=>$product1->price, 'productTotal'=>$this->productTotal, 'quantity'=>$this->quantity];
        session()->push('cart', $product);
        return redirect('user/viewCart');
    }
    public function deleteChart($id) {

        if(session()->has('cart')){
            $cart = session()->get('cart');
            foreach($cart as $key=>$product){

                    if($product['id'] == $id){
                        unset($cart[$key]);
                        session()->put('cart', $cart);
                    }

            }
            return redirect('user/viewCart');
        }
    }
    public function viewCart(){
        $category = Category::all();
        session()->put('total', $this->total);
        session()->put('discount', $this->discount);
        session()->put('subTotal', $this->subTotal);

        return view('user.cart', compact('category'));
    }
    public function quantity_minus($id){
        $carts = session()->get('cart');
        $category = Category::all();
        foreach ($carts as &$product) {

                if ($product['id'] == $id) {
                    $product['quantity']--;
                    $product['productTotal'] = ($product['price'])*$product['quantity'];
                }
                $this->subTotal += $product['productTotal'];
        }
        session()->put('cart', $carts);
        session()->put('subTotal', $this->subTotal);
        session()->put('discount', $this->discount);
        session()->put('total', $this->subTotal);
        return view('user.cart', compact('category'));
    }
    public function quantity_plus($id){
        $carts = session()->get('cart');
        $category = Category::all();
        foreach ($carts as &$product) {
                if ($product['id'] == $id) {
                    $product['quantity']++;
                    $product['productTotal'] = ($product['price'])*$product['quantity'];
                }
                $this->subTotal += $product['productTotal'];
        }

        session()->put('cart', $carts);
        session()->put('subTotal', $this->subTotal);

        session()->put('discount', $this->discount);
        session()->put('total', $this->subTotal);
        return view('user.cart', compact('category'));
    }
    public function coupon(Request $request){
        $coupons = Coupon::all();
        $category = Category::all();


        foreach($coupons as $coupon){
            if($coupon->code_name == request('coupon')){
                $this->discount = $coupon->discount;

            }else{
                $this->discount = 0;
            }
        }
        $subTotal = session()->get('subTotal');
        $discount = ((($this->discount)*$subTotal)/100);
        $total = $subTotal-$discount;
        session()->put('discount', $discount);
        session()->put('total', $total);
        return view('user.cart', compact('category'));
    }
    public function checkout(){
        $category = Category::all();
        return view('user.checkout', compact('category'));
    }
    public function contact(){
        $category = Category::all();
        $contact = Contact::all();
        return view('user.contact', compact('category', 'contact'));
    }
    public function viewProucts(){
        $products = Product::get();
        $category = Category::get();
        return view('user.products', compact('products', 'category'));
    }
    public function order(Request $request){
        $data = $this->validate(request(),[
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ],[],[]);
        $category = Category::all();
        $cart = session()->get('cart');
        $user = User::find(Auth::id());
        $order= Order::create([
            'user_id' => $user->id,
            'total' => session()->get('total'),
            'status' => 'Not Charged',
         ]);

        foreach($cart as $product){

            OrderContent::create( [
                'order_id' => $order['id'] ,
                'product_id' => $product['id'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],

            ]);

        }

        OrderShipping::create([
            'name' => request('name') ,
            'mobile' => request('mobile') ,
            'address' => request('address') ,
            'order_id' => $order['id'],
       ]);
        $request->session()->flush('cart');
        $request->session()->flush('subTotal');
        $request->session()->flush('discount');
        $request->session()->flush('total');
        return view('user.order', compact('category'));
    }
    public function search_product(Request $request){
        $product_count =0;
        $id=0;
        $products = Product::get();
        foreach($products as $product){
            if($product['name']==request('product_name')){
                $product_count++;
            }
        }

        if($product_count>0){

            $product = Product::where('name', request('product_name'))->get();
            foreach($product as $product){
                $id = $product['id'];
            }
            return redirect('user/details/'.$id);
        }else{
            return back()->withErrors(['msg' => 'Product Not Found']);

        }



    }

    public function viewOrders(){
            $category = Category::get();
            $order_id =[];
            $user_data = [];
            $user = User::find(Auth::id());
            $order = Order::where('user_id', $user->id)->get();

            foreach($order as $order){
                array_push($order_id, $order['id']);

            }

            foreach($order_id as $order_id){

                $user_data = OrderShipping::where('order_id', $order_id)->get();

            }

            $product = [];

            foreach($user_data as $data){

                 array_push($product, (Order::find($data->order_id)));
            }
            return view('user.orders_table', compact('user_data', 'product', 'category'));
    }
    public function view_products($id){
            $category = Category::get();
            $product_id =0;
            $orderShipping = OrderShipping::where('order_id', $id)->get();
            foreach($orderShipping as $orderShipping){
                $product_id = $orderShipping['id'];
            }
            $quantity = [];
            $order = OrderContent::where('order_id', $id)->get();

            $products_id =[];
            $products = [];
            foreach($order as $order){
                 array_push($products_id, $order['product_id']);
                 array_push($quantity, $order['quantity']);
            }


            foreach($products_id as $product){
                $data = Product::find($product);
                array_push($products, $data['name']);
           }
           return view('user.order_products', compact('products', 'quantity', 'product_id', 'category'));

    }

    public function status($id, Request $request){
        $orderShipping = OrderShipping::where('id', $id)->get();
        foreach($orderShipping as $orderShipping){
            $order = Order::find($orderShipping['order_id'])->update(['status' => request('status')]);
        }
        return redirect('user/viewOrders');
    }
}
