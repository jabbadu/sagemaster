{{--
    Template Name: Page Builder
--}}

@extends('layouts.pagebuilder')

@section('content')
    @hasposts

        @includeFirst(['partials.single.pagebuilder', 'partials.single.post'])

    @endhasposts
@endsection