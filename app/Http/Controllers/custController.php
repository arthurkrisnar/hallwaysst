<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\cart_menu;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Http\Requests\delete_request;


class custController extends Controller
{
    public function show_main(){
        //Session::flush();
        $uuid = Uuid::uuid4();
        $uuidString = $uuid;
        $id_cart_integer = $uuidString;
        
        if (!$id_cart_integer) {
            $id_cart_integer = uniqid();
            session(['id_cart_integer' => $id_cart_integer]);
        }
    
        return view('User.start', ['id_cart_integer' => $id_cart_integer]);
    }

    public function post_main(Request $request, $id_cart_integer){
        //$id_cart_integer = session('id_cart_integer');
    
        if (!$id_cart_integer) {
            return redirect("/");
        }
    
        $existingCart = DB::table('carts')->where('id_cart', $id_cart_integer)->first();
        
        if (!$existingCart) {
            DB::table('carts')->insert([
                'id_cart' => $id_cart_integer,
                'table_number' => $request->table_number,
                'customer_name' => $request->customer_name,
                'service_type' => $request->service_type,
            ]);
        }

        return redirect("/order/$id_cart_integer");
    }

    public function get_all_tenant(Request $request, $id_cart_integer){
        $tenant = DB::table('Users')->get();
        //dd($tenant);
        return view('User.main', ['tenant' => $tenant, 'id_cart_integer' => $id_cart_integer]);
    }

    public function show_tenant_foods(Request $request, $id_cart_integer){
        $id_tenant = $request->id_tenant;
        $queryCategory = DB::table('Menus')
            ->where('category', 'foods')
            ->where('id_tenant', $id_tenant)
            ->get();
        //dd($id_tenant);
        return view('User.menu-foods', [
            'queryCategory' => $queryCategory,
            'id_tenant' => $id_tenant,
            'id_cart_integer' => $id_cart_integer
        ]);
    }

    public function show_tenant_drinks(Request $request, $id_cart_integer){
        $id_tenant = $request->id_tenant;
        $queryCategory = DB::table('Menus')
                ->where('category', 'drinks')
                ->where('id_tenant', $id_tenant)
                ->get();
        //dd($queryCategory);
        //return view('User.menu-foods', ['menus' => $menus, 'id_tenant' => $id_tenant]);
        return view('User.menu-drinks', [
            'queryCategory' => $queryCategory,
            'id_tenant' => $id_tenant,
            'id_cart_integer' => $id_cart_integer
        ]);
    }

    public function add_cart(Request $request, $id_cart_integer){
        $id_tenant = $request->id_tenant;
        //dd($request->price);
        DB::table('cart_menus')->insert([
            'quantity' => "1",
            'total_price_per_menu' => $request->price,
            'id_menu' => $request->id,
            'id_cart' => $id_cart_integer
        ]);

        $cart_menus = DB::table('cart_menus')->latest('id_cart_menus')->value('id_cart_menus');
        $cart = DB::table('carts')->latest('id_cart')->value('id_cart');
        //dd($cart, $cart_menus);

        DB::table('cart_transactions')->insert([
            'id_cart_menus' => $cart_menus,
            'id_cart' => $id_cart_integer,
        ]);

        return redirect("/order/$id_cart_integer/cart/$id_tenant");
    }

    public function show_cart(Request $request, $id_cart_integer, $id_tenant){
        //$id_tenant = $request->id_tenant;
        $queryTenant = DB::table('Menus')
                ->where('id_tenant', $id_tenant)
                ->get();
        $tenant = DB::table('Users')
                ->where('id_tenant', $id_tenant)
                ->first();
                
        $id_tenant = $tenant->id_tenant;

        $cart_menus = DB::table('cart_menus')
        ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
        ->select('cart_menus.*', 'menus.name as menu_name', 'menus.photo as menu_image', 'menus.id_tenant as id_tenant')
        ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart') // Join dengan tabel carts
        ->where('carts.id_cart', $id_cart_integer) // Kondisi ID cart
        ->get();

        $jumlah = DB::table('cart_menus')
            ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
            ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart')
            ->select(DB::raw('SUM(cart_menus.total_price_per_menu) as total'))
            ->where('carts.id_cart', $id_cart_integer)
            ->groupBy('carts.id_cart')
            ->value('total');

        //dd($jumlah);

        //dd($cart_menus);
        return view('User.cart-confirm', [
            'cart_menus' => $cart_menus,
            'tenant' => $tenant,
            'jumlah' => $jumlah,
            'id_cart_integer' => $id_cart_integer,
            'id_tenant' => $id_tenant
        ]);
    }

    public function post_pembayaran(Request $request, $id_cart_integer, $id_tenant){
        //dd($id_tenant);
        $currentDate = Carbon::now();
        $day = $currentDate->day;
        $month = $currentDate->format('F');
        $year = $currentDate->year;
        $months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        $monthName = $months[$currentDate->month - 1];
        $dateValue = $day . ' ' . $monthName . ' ' . $year;

        $jumlah = DB::table('cart_menus')
        ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
        ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart')
        ->select(DB::raw('SUM(cart_menus.total_price_per_menu) as total'))
        ->where('carts.id_cart', $id_cart_integer)
        ->groupBy('carts.id_cart')
        ->value('total');

        DB::table('carts')->where('id_cart',$id_cart_integer)->update([
            'note' => $request->note,
        ]);

        DB::table('transactions')->insert([
            'receipt_payment' => "unpaid",
            'date' => $dateValue,
            'status_deliver' => "Diproses",
            'total_price' => $jumlah,
            'id_tenant' => $id_tenant,
            'id_cart' => $id_cart_integer
        ]);

        return redirect("/order/$id_cart_integer/cart/$id_tenant/pembayaran");
    }

    public function update_status(Request $request, $id_cart_integer){
        //dd($id_cart_integer);

        DB::table('transactions')->where('id_cart',$id_cart_integer)->update([
            'receipt_payment' => "paid",
        ]);

        return redirect("/pesanan/$id_cart_integer");
        //dd($id_cart_integer, $id_tenant);
    }

    public function get_metode(Request $request, $id_cart_integer, $id_tenant){
        $cart_menus = DB::table('cart_menus')
        ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
        ->select('cart_menus.*', 'menus.name as menu_name', 'menus.photo as menu_image', 'menus.id_tenant as id_tenant', 'carts.note', 'carts.customer_name', 'carts.service_type', 'carts.table_number')
        ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart') // Join dengan tabel carts
        ->where('carts.id_cart', $id_cart_integer) // Kondisi ID cart
        ->first();        

        $jumlah = DB::table('cart_menus')
            ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
            ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart')
            ->select(DB::raw('SUM(cart_menus.total_price_per_menu) as total'))
            ->where('carts.id_cart', $id_cart_integer)
            ->groupBy('carts.id_cart')
            ->value('total');

        //dd($cart_menus);

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;        
        $params = array(
            'transaction_details' => array(
                'order_id' => $id_cart_integer,
                'gross_amount' => $jumlah,
            ),
            'customer_details' => array(
                'first_name' => $cart_menus->customer_name,
                'last_name' => "",
            ),
        );      
    
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        //dd($snapToken);

        return view('User.handle-payment', [
            "snapToken" => $snapToken,
            "id_cart_integer" => $id_cart_integer,
            "id_tenant" => $id_tenant
        ]);

    }

    public function get_pembayaran(Request $request, $id_cart_integer, $id_tenant){
        $cart_menus = DB::table('cart_menus')
        ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
        ->select('cart_menus.*', 'menus.name as menu_name', 'menus.photo as menu_image', 'menus.id_tenant as id_tenant', 'carts.note', 'carts.customer_name', 'carts.service_type', 'carts.table_number')
        ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart') // Join dengan tabel carts
        ->where('carts.id_cart', $id_cart_integer) // Kondisi ID cart
        ->get();
        //dd($cart_menus[0]->customer_name);
        //dd($cart_menus);

        $jumlah = DB::table('cart_menus')
            ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
            ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart')
            ->select(DB::raw('SUM(cart_menus.total_price_per_menu) as total'))
            ->where('carts.id_cart', $id_cart_integer)
            ->groupBy('carts.id_cart')
            ->value('total');

        return view('User.pembayaran', [
            'cart_menus' => $cart_menus,
            'tenant' => $id_tenant,
            'jumlah' => $jumlah,
            'id_cart_integer' => $id_cart_integer,
            'id_tenant' => $id_tenant,
        ]);
    }

    public function delete_cart_menu(Request $request, $id_tenant, $id_cart_integer){
        dd($id_cart_integer);

        if ($request->input('delete_button') == 'delete') {
            DB::table('cart_transactions')->where('id_cart', $id_cart_integer)->delete();
            DB::table('cart_menus')->where('id_cart', $id_cart_integer)->delete();
        }
        
        return redirect("/menu/cart/$id_tenant");
    }

    public function post_search_tenant(Request $request, $id_cart_integer){
        $keyword = $request->input('keyword');

        $result_tenant = DB::table('users')
        ->where(function ($query) use ($keyword) {
            $query->where('tenant_name', 'like', '%' . $keyword . '%')
                ->orWhere('description_tenant', 'like', '%' . $keyword . '%');
        })
        ->get();
      
        //dd($result_tenant);

        return view('User.search-tenant', ['result_tenant' => $result_tenant, 'id_cart_integer' => $id_cart_integer]);
    }

    public function post_search_food(Request $request, $id_cart_integer, $id_tenant){
        //dd($id_tenant);
        $keyword = $request->input('keyword');

        $result_food = DB::table('Menus')
        ->where('category', 'foods')
        ->where('id_tenant', $id_tenant)
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

        //dd($result_food);

        return view('User.search-food', [
            'result_food' => $result_food,
            'id_tenant' => $id_tenant,
            'id_cart_integer' => $id_cart_integer
        ]);
    }

    public function post_search_drink(Request $request, $id_cart_integer, $id_tenant){
        //dd($id_tenant);
        $keyword = $request->input('keyword');

        $result_drink = DB::table('Menus')
        ->where('category', 'drinks')
        ->where('id_tenant', $id_tenant)
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

        //dd($result_drink);

        return view('User.search-drink', [
            'result_drink' => $result_drink,
            'id_tenant' => $id_tenant,
            'id_cart_integer' => $id_cart_integer
        ]);
    }

    public function get_pesanan(Request $request, $id_cart_integer){
        //dd($id_cart_integer, $id_tenant);
        $idCart = $id_cart_integer;

        $data = DB::table('cart_transactions')
        ->select(
            DB::raw("CONV(SUBSTRING(cart_transactions.id_cart, 1, 8), 16, 10) AS id_cart_short"),
            'cart_transactions.id_cart',
            'transactions.date',
            'menus.id_menu',
            'menus.name',
            'menus.price',
            'menus.photo',
            'carts.note',
            'carts.customer_name',
            'carts.table_number',
            'carts.service_type',
            'transactions.total_price',
            'transactions.status_deliver',
            'cart_menus.quantity'
        )
        ->join('cart_menus', 'cart_transactions.id_cart_menus', '=', 'cart_menus.id_cart_menus')
        ->join('menus', 'cart_menus.id_menu', '=', 'menus.id_menu')
        ->join('carts', 'cart_menus.id_cart', '=', 'carts.id_cart')
        ->join('transactions', 'cart_transactions.id_cart', '=', 'transactions.id_cart')
        ->where('cart_transactions.id_cart', $idCart)
        ->where('transactions.id_cart', $idCart)
        ->groupBy(
            'cart_transactions.id_cart',
            'transactions.date',
            'menus.id_menu',
            'menus.name',
            'menus.price',
            'menus.photo',
            'carts.note',
            'carts.customer_name',
            'carts.table_number',
            'carts.service_type',
            'transactions.total_price',
            'transactions.status_deliver',
            'cart_menus.quantity'
        )
        ->get();
        
        //dd($data);
        return view('User.pesanan', [
            'id_cart_integer' => $id_cart_integer,
            'data' => $data
        ]);
   
    }

}
  