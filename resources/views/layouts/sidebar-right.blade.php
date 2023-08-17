<a class="visually-hidden visually-hidden-focusable" href="#app">
    {{ __('Skip to content') }}
</a>

<main id="app">

    @include('sections.header')

    <div class="main-content my-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-12 col-lg-9">
                    @yield('content')
                </div>
                
                <div class="col-12 col-lg-3">
                    @yield('sidebar')
                </div>
                
            </div>
        </div>
    </div>

</main>

@include('sections.footer')
