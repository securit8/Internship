@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-red-500 focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full']) !!}>
