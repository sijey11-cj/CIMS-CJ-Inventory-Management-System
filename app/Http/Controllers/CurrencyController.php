<?php

namespace App\Http\Controllers;

use App\Helpers\CurrencyHelper;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Switch the application currency
     */
    public function switch(Request $request)
    {
        $currency = $request->input('currency');
        
        if (CurrencyHelper::setCurrency($currency)) {
            return response()->json([
                'success' => true,
                'message' => 'Currency switched to ' . CurrencyHelper::getName($currency),
                'currency' => $currency
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Invalid currency selected'
        ], 400);
    }

    /**
     * Get current currency information
     */
    public function current()
    {
        $currentCurrency = CurrencyHelper::getCurrentCurrency();
        
        return response()->json([
            'currency' => $currentCurrency,
            'name' => CurrencyHelper::getName(),
            'available_currencies' => CurrencyHelper::getAvailableCurrencies()
        ]);
    }
} 