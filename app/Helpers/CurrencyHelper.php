<?php

namespace App\Helpers;

class CurrencyHelper
{
    /**
     * Get the current selected currency from session
     */
    public static function getCurrentCurrency()
    {
        return session('currency', config('currency.default'));
    }

    /**
     * Get currency configuration
     */
    public static function getCurrencyConfig($currency = null)
    {
        $currency = $currency ?? self::getCurrentCurrency();
        return config("currency.currencies.{$currency}");
    }

    /**
     * Format amount with current currency
     */
    public static function format($amount, $currency = null)
    {
        $currency = $currency ?? self::getCurrentCurrency();
        $config = self::getCurrencyConfig($currency);
        
        if (!$config) {
            return $amount;
        }

        $convertedAmount = self::convert($amount, 'PHP', $currency);
        
        return $config['symbol'] . number_format($convertedAmount, $config['decimal_places']);
    }

    /**
     * Convert amount between currencies
     */
    public static function convert($amount, $fromCurrency = 'PHP', $toCurrency = null)
    {
        $toCurrency = $toCurrency ?? self::getCurrentCurrency();
        
        if ($fromCurrency === $toCurrency) {
            return $amount;
        }

        $rates = config('currency.exchange_rates');
        
        // Convert to PHP first (base currency)
        $phpAmount = $amount / ($rates[$fromCurrency] ?? 1);
        
        // Then convert to target currency
        return $phpAmount * ($rates[$toCurrency] ?? 1);
    }

    /**
     * Get all available currencies
     */
    public static function getAvailableCurrencies()
    {
        return config('currency.currencies');
    }

    /**
     * Set currency in session
     */
    public static function setCurrency($currency)
    {
        if (array_key_exists($currency, config('currency.currencies'))) {
            session(['currency' => $currency]);
            return true;
        }
        
        return false;
    }

    /**
     * Get currency symbol
     */
    public static function getSymbol($currency = null)
    {
        $config = self::getCurrencyConfig($currency);
        return $config['symbol'] ?? '';
    }

    /**
     * Get currency name
     */
    public static function getName($currency = null)
    {
        $config = self::getCurrencyConfig($currency);
        return $config['name'] ?? '';
    }
} 