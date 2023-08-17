@extends('layouts.sidebar-right')

@section('content')
    @hasposts

        @includeFirst(['partials.single.content-' . get_post_type(), 'partials.single.content'])

    @endhasposts
@endsection

@section('sidebar')
    @includeIf('sections.sidebar')
@endsection