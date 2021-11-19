<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index(){
        return view('quotes.index', ['quotes' => Quote::all()]);
    }
}
