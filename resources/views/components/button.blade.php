<a href="{!! $link !!}" {{ $attributes->merge([
            'class' => 'btn ' . $type, 
            'target' => $target,
            'disabled'  => $disabled,
            'tab-index' => $tabIndex
        ]) }}>
    {!! $title ?? $slot !!}
    @if ($icon)
        <i class="bi bi-{{ $iconType }}"></i>
    @endif
</a>
