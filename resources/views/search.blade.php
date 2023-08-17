@extends('layouts.sidebar-right')

@section('content')
    <div class="container">

        <div class="page-header h1 my-5">

            <?php
                printf(
                    /* translators: %s: search term. */
                    esc_html( 'Search results for: "%s"', 'sage' ),
                    '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
                );
            ?>

        </div>

        @noposts
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endnoposts

        @posts
            @includeFirst( ['loops.search', 'loops.' . get_post_type(), 'loops.content'] )
        @endposts

        {!! get_the_posts_navigation() !!}
    </div>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
