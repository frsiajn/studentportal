@props(['type' => 'view', 'href' => '#'])

@php
    $colors = [
        'view' => '#588061',
        'edit' => '#E7B5AC',
        'delete' => '#dc3545',
    ];
    
    $textColors = [
        'view' => 'white',
        'edit' => '#333',
        'delete' => 'white',
    ];
    
    $icons = [
        'view' => '',
        'edit' => '',
        'delete' => '',
    ];
    
    $color = $colors[$type] ?? '#588061';
    $textColor = $textColors[$type] ?? 'white';
    $icon = $icons[$type] ?? '';
@endphp

<a href="{{ $href }}" 
   style="display: inline-block; padding: 6px 12px; background-color: {{ $color }}; color: {{ $textColor }}; text-decoration: none; border-radius: 4px; font-size: 13px; margin: 0 2px;"
   {{ $attributes }}>
    @if($icon)
        <span style="margin-right: 4px;">{{ $icon }}</span>
    @endif
    {{ $slot }}
</a>