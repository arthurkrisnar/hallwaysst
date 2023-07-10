<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\User;
use App\Models\cart;
use App\Models\transactionData;
use Carbon\Carbon;


class tenantController extends Controller
{
    public function menuTenant(){
        $userId = Auth::id();
        $name = Auth::user()->tenant_name; 
        $email = Auth::user()->email; 
        $photo = Auth::user()->photo_tenant;
        //dd($name);
        $menus = Menu::where('id_tenant', $userId)->get();
        //$user = Menu::where('tenant_name', $userId)->get();
        //$menus = Menu::with('MenuTenant')->get();
        //return view('Tenant.menu', ['menus' => $menus], ['name' => $name], ['email' => $email]);
        //dd($menus);

        return view('Tenant.menu', [
            'menus' => $menus,
            'name' => $name,
            'email' => $email,
            'photo' => $photo,
        ]);
    }

    public function postMenuTenant(Request $request){
        $user = Auth::user();
        $userId = $user->id_tenant;
        //return $request->file('photo')->store('post-images');
        //ddd($request);
        //dd($request->file('photo')->store('post-images'));
        DB::table('menus')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $request->file('photo')->store('post-images'),
            'price' => $request->price,
            'category' => $request->category,
            'id_tenant' => $userId
        ]);

        return redirect('/tenant/menu');
    }

    public function editMenuTenant(Request $request){
        DB::table('menus')->where('id_menu',$request->id_menu)->update([
            'name' => $request->name,
            'description' => $request->description,
            //'photo' => $request->file('photo')->store('post-images'),
            'price' => $request->price,
            'category' => $request->category,
        ]);
        return redirect('/tenant/menu');
    }

    public function show_pesanan(Request $request){        
        $userId = Auth::id();
        $name = Auth::user()->tenant_name;
        $email = Auth::user()->email;
        $photo = Auth::user()->photo_tenant;
        $menus = Menu::where('id_tenant', $userId)->get();

        //dd($userId);

        $allTransaction = DB::table('transactions')->where("id_tenant", $userId)->where("receipt_payment", "paid")->where("status_deliver", "Diproses")->get();
        //dd($allTransaction);
        $transactionData = [];

        foreach ($allTransaction as $transaction) {
            $transactionDetails = Cart::select(
                'c.customer_name',
                'c.table_number',
                'c.service_type',
                'c.note',
                'm.name',
                'cm.quantity',
                't.id_cart'
            )
                ->from('carts as c')
                ->join('cart_transactions as ct', 'c.id_cart', '=', 'ct.id_cart')
                ->join('cart_menus as cm', 'ct.id_cart_menus', '=', 'cm.id_cart_menus')
                ->join('menus as m', 'cm.id_menu', '=', 'm.id_menu')
                ->join('transactions as t', 'ct.id_cart', '=', 't.id_cart')
                ->where('c.id_cart', $transaction->id_cart)
                ->get();

            $menusData = [];

            foreach ($transactionDetails as $detail) {
                $menu = new Menu();
                $menu->name = $detail->name;
                $menu->quantity = $detail->quantity;

                $menusData[] = $menu;
            }
            //dd($transaction);
            $transactionDataItem = new transactionData();
            $transactionDataItem->customerName = $transactionDetails[0]->customer_name;
            $transactionDataItem->tableNumber = $transactionDetails[0]->table_number;
            $transactionDataItem->serviceType = $transactionDetails[0]->service_type;
            $transactionDataItem->note = $transactionDetails[0]->note;
            $transactionDataItem->id_cart = $transactionDetails[0]->id_cart;
            $transactionDataItem->menus = $menusData;
            $transactionData[] = $transactionDataItem;

        }
        
        return view('Tenant.pesanan', [
            'datas' => $transactionData,
            'name' => $name,
            'email' => $email,
            'photo' => $photo,
        ]);
        
    }

    public function show_profile(){
        $userId = Auth::id();
        $name = Auth::user()->tenant_name;
        $email = Auth::user()->email;
        $photo = Auth::user()->photo_tenant;
        $menus = Menu::where('id_tenant', $userId)->get();

        return view('Tenant.profile', [
            'name' => $name,
            'email' => $email,
            'photo' => $photo,
          
        ]);
    }


    public function end_pesanan(Request $request){
        $userId = Auth::id();

        DB::table('transactions')
        ->where('id_tenant', $userId)
        ->where('id_cart', $request->id_cart)
        ->update([
            'status_deliver' => "Selesai"
        ]);

        return redirect("/tenant/pesanan");
    }

    public function laporan_penjualan(Request $request){
        $userId = Auth::id();
        $name = Auth::user()->tenant_name;
        $email = Auth::user()->email;
        $photo = Auth::user()->photo_tenant;
        $menus = Menu::where('id_tenant', $userId)->get();

        $laporan =  DB::table('transactions')
        ->where('id_tenant', $userId)
        ->where('status_deliver', "Selesai")
        ->get();

        $total = DB::table('transactions')
        ->select(DB::raw('SUM(total_price) as total'))
        ->where('id_tenant', $userId)
        ->where('status_deliver', "Selesai")
        ->pluck('total')
        ->first();

        $formattedTotal = number_format($total, 0, ".", ".");

        //dd($total);

        return view('Tenant.laporan', [
            'laporan' => $laporan,
            'total' => $formattedTotal,
            'name' => $name,
            'email' => $email,
            'photo' => $photo,
        ]);

    }

    public function filter_laporan_penjualan(Request $request){
        $userId = Auth::id();
        $name = Auth::user()->tenant_name;
        $email = Auth::user()->email;
        $photo = Auth::user()->photo_tenant;
        $menus = Menu::where('id_tenant', $userId)->get();

        $months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        $date = $request->date;
        $carbonDate = Carbon::createFromFormat('Y-m-d', $date);

        $monthIndex = $carbonDate->format('n') - 1;
        $monthName = $months[$monthIndex];
        $formattedDate = $carbonDate->format('j') . ' ' . $monthName . ' ' . $carbonDate->format('Y');
        
        //dd($formattedDate);

        $laporan =  DB::table('transactions')
        ->where('id_tenant', $userId)
        ->where('status_deliver', "Selesai")
        ->where('date', $formattedDate)
        ->get();

        $total = DB::table('transactions')
        ->select(DB::raw('SUM(total_price) as total'))
        ->where('id_tenant', $userId)
        ->where('status_deliver', "Selesai")
        ->where('date', $formattedDate)
        ->pluck('total')
        ->first();

        $formattedTotal = number_format($total, 0, ".", ".");

        return view('Tenant.filter-laporan', [
            'laporan' => $laporan,
            'total' => $formattedTotal,
            'name' => $name,
            'email' => $email,
            'photo' => $photo,
        ]);

    }

    public function delete_menu(){

    }
}
