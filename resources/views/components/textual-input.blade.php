@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1 @error($name) relative rounded-md shadow-sm @enderror">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) ?? $value }}" class="block w-full rounded-md focus:outline-none sm:text-sm @error($name) pr-10 border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @else appearance-none px-3 py-2 border border-gray-300 shadow-sm placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 @enderror" {{ $attributes }}>
        @error($name)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        </div>
        @enderror
    </div>
    @error($name)<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
</div>
