@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-white dark:text-gray-900 focus:border-orange-500 dark:focus:border-orange-600 focus:ring-orange-500 dark:focus:ring-orange-600 rounded-md shadow-sm']) }}>
