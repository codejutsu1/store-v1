@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'dark:bg-zinc-200 dark:text-gray-900 rounded-md shadow-sm dark:focus:shadow-none dark:focus:ring-0 dark:outline-none dark:focus:outline-none dark:focus:border-0 dark:border-0 placeholder-zinc-500']) !!}>
