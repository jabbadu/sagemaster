<a class="visually-hidden visually-hidden-focusable" href="#app">
    {{ __('Skip to content') }}
</a>

<main id="app">

    @include('sections.header')

    <div class="main-content mb-5">
        <div class="container-fluid px-0">
            @yield('content')
        </div>
    </div>

</main>

@include('sections.footer')
