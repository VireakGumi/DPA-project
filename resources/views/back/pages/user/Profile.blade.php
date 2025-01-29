@extends('back.layout.user.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @livewire('user.profile')
            </div>
        </section>
    </main>
@endsection
