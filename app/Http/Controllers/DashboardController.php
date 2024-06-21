<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function updateTotalNominal(Request $request) {
        $totalNominal = $request->input('totalNominal');
        Session::put('totalNominal', $totalNominal);
        return response()->json(['success' => true]);
    }
}
