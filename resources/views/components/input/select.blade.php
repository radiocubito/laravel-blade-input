@props([
    'leadingAddOn' => false,
    'options' => [],
])

<div class="flex rounded-md mt-2 sm:mt-3">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <select
        {{ $attributes }}
        class="{{ $leadingAddOn ? 'rounded-none rounded-r-md' : '' }} block form-select w-full py-2 px-3 py-0 border border-gray-200 bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
    >
        <option value=""></option>

        @foreach ($options as $key => $option)
            <option value="{{ $key }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
