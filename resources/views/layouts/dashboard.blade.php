<a class="visually-hidden visually-hidden-focusable" href="#app">
    {{ __('Skip to content') }}
</a>

@include('sections.dashboard.header')

<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0">
            @yield('sidebar-navigation')
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                @yield('content')
            </div>
        </main>
    </div>
</div>

{{-- @include('sections.footer') --}}
