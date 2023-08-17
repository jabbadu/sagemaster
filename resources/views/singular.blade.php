@extends('layouts.sidebar-right')

@section('content')
    @hasposts

        @includeFirst(['partials.single.' . get_post_type(), 'partials.single.post'])

    @endhasposts
@endsection

@section('sidebar')
    @includeIf('sections.sidebar')
@endsection