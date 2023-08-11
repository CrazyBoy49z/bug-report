@aware(['color' => 'gray'])

@dump($color)
<li {{ $attributes->merge(['class' => 'text-'.$color.'-800']) }}>
    {{ $slot }}
</li>
