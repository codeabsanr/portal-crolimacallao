@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-primary/25 bg-white text-text-main focus:border-primary focus:ring-primary/30 rounded-md shadow-sm']) }}>

