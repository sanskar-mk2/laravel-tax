
<div class="mt-6">
    <label for="{{ $name }}"
        class="block text-sm font-medium text-gray-700 leading-5">{{ s2t($name) }}</label>
    <div class="mt-1 rounded-md shadow-sm">
        <select wire:model.lazy="{{ $name }}"
            id="{{ $name }}"
            required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
            @foreach ($listdata as $key => $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
