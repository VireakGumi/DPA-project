@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                <!-- Content -->
                @livewire('admin.profile-edit')
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush
