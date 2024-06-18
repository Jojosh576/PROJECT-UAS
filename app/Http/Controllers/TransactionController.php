<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $amount = $request->input('amount');
        $description = $request->input('description');

        // Simpan transaksi ke database 
        // menampilkan data transaksi
        return view('transaction.index', [
            'amount' => $amount,
            'description' => $description,
        ]);
    }
}

