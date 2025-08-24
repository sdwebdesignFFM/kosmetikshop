@b2bCanSeePrices
    <div class="max-md:[&>*]:leading-6 max-sm:[&>*]:leading-4 grid gap-1.5 max-md:flex">
        @if ($prices['from']['regular']['price'] != $prices['from']['final']['price'])
            <p class="flex items-center gap-4 max-sm:text-sm">
                <span
                    class="final-price text-zinc-500 line-through max-sm:text-sm"
                    aria-label="{{ $prices['from']['regular']['formatted_price'] }}"
                >
                    {{ $prices['from']['regular']['formatted_price'] }}
                </span>
                
                {{ $prices['from']['final']['formatted_price'] }}
            </p>
        @else
            <p class="final-price flex items-center gap-4 max-sm:text-sm">
                {{ $prices['from']['regular']['formatted_price'] }}
            </p>
        @endif

        @if (
            $prices['from']['regular']['price'] != $prices['to']['regular']['price']
            || $prices['from']['final']['price'] != $prices['to']['final']['price']
        )
            <p class="text-base font-normal max-sm:text-sm">To</p>
            
            @if ($prices['to']['regular']['price'] != $prices['to']['final']['price'])
                <p class="flex items-center gap-4 max-sm:text-sm">
                    <span
                        class="final-price text-zinc-500 line-through max-sm:text-sm"
                        aria-label="{{ $prices['to']['regular']['formatted_price'] }}"
                    >
                        {{ $prices['to']['regular']['formatted_price'] }}
                    </span>
                    
                    {{ $prices['to']['final']['formatted_price'] }}
                </p>
            @else
                <p class="final-price flex items-center gap-4 max-sm:text-sm">
                    {{ $prices['to']['regular']['formatted_price'] }}
                </p>
            @endif
        @endif
    </div>
@elseb2bCanSeePrices
    @auth('customer')
        @b2bIsPending
            <div class="text-center p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <p class="text-sm text-yellow-800 font-medium">
                    <i class="icon-clock text-yellow-600 mr-2"></i>
                    B2B-Freigabe läuft noch
                </p>
            </div>
        @else
            <div class="text-center p-4 bg-red-50 border border-red-200 rounded-lg">
                <p class="text-sm text-red-800 font-medium">
                    <i class="icon-exclamation text-red-600 mr-2"></i>
                    B2B-Zugang erforderlich
                </p>
            </div>
        @endb2bIsPending
    @else
        <div class="text-center p-4 bg-blue-50 border border-blue-200 rounded-lg">
            <p class="text-sm text-blue-800 font-medium">
                <i class="icon-user text-blue-600 mr-2"></i>
                Für Preise anmelden
            </p>
            <a href="{{ route('shop.customer.session.index') }}" class="text-xs text-blue-700 underline mt-1 block">
                Jetzt anmelden
            </a>
        </div>
    @endauth
@endb2bCanSeePrices