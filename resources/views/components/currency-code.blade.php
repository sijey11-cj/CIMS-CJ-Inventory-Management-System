@php
    $currentCurrency = session('currency', config('currency.default'));
@endphp
{{ $currentCurrency }} 