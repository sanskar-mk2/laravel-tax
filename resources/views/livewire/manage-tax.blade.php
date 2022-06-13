<div>
    <form wire:submit.prevent="store">
        <x-text-input-with-label name="name" />
        <x-text-input-with-label name="tax" />
        <x-select-with-label name="type"
            listdata="country,state,city" />
        <x-submit-button text="Add Tax" />
    </form>

    <main class="flex flex-wrap gap-4 mt-4 mb-4">
        @foreach ($taxes as $value)
            <div class="p-8 bg-gradient-to-r from-blue-400 to-cyan-300 rounded-xl">
                <p class="text-xl">{{ $value->name }}({{ $value->type }})</p>
                <p class="text-4xl">{{ $value->tax }}</p>
            </div>
        @endforeach
    </main>
</div>
