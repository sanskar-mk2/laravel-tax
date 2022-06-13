<div>
    <form wire:submit.prevent="show">
        <x-select-with-label name="product"
            :listdata="$products" />
        <x-select-with-label name="country"
            :listdata="$countries" />
        <x-select-with-label name="state"
            :listdata="$states" />
        <x-select-with-label name="city"
            :listdata="$cities" />
        <x-submit-button text="Calculate Tax" />
    </form>

    <main class="flex flex-wrap justify-center gap-4 mt-4 mb-4">
            <div class="p-8 bg-gradient-to-r from-blue-400 to-cyan-300 rounded-xl">
                <p class="text-xl">Product(Price): {{ $product }}({{ $price }})</p>
                <p>Country(Tax): {{ "$country($tax_country%)" }}</p>
                <p>State(Tax): {{ "$state($tax_state%)" }}</p>
                <p>City(Tax): {{ "$city($tax_city%)" }}</p>
                <p class="text-xl">Local Tax: {{ $tax_local }}</p>
                <p class="text-xl">Global Tax: {{ $tax_global }}</p>
            </div>
    </main>
</div>
