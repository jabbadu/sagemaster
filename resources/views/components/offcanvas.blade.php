@if ($button)
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#{{ $id }}" aria-controls="{{ $id }}">
        {{ $button }}
    </button>
@endif

<div
    {{ $attributes->merge(['class' => 'offcanvas '. $align, 'id' => $id]) }}
    tabindex="-1" 
    aria-labelledby="{{ $id }}Label">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="{{ $id }}Label">{!! $title !!}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {!! $slot !!}
    </div>
</div>