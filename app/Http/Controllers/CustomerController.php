<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Contracts\Service\Attribute\Required;

class CustomerController extends Controller
{
    public function index(){
        $data = DB::table('customers')->paginate(5);
        $data = customer::paginate(5);
        return view('dashboard',compact('data'));
    }

    public function createorder(){
        return view('createorder');
    }

    public function insertdata(Request $request){
        customer::create($request->all());
        return redirect()->route('dashboard')->with('Success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){

        $data = customer::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = customer::Find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('Success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data = customer::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('Success','Data Berhasil Di Hapus');
    }

    public function status($id){
        $data = DB::table('customers')->where('id', $id)->first();
        
        $status_sekarang = $data->status;

        if ($status_sekarang == 1){
            DB::table('customers')->where('id', $id)->update([
                'status' =>0
            ]);
        }else{
            DB::table('customers')->where('id', $id)->update([
                'status' =>1
            ]);
        }
    }
}
