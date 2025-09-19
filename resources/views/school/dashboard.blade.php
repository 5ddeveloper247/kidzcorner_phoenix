@extends('admin.layout.master')

@section('title', 'School Dashboard')

@push('styles')
@endpush



@section('content')
    <div class="page-container">

        <!-- Start Container Fluid -->
        <div class="page-content">

             @include('admin.layout.page_content')

            {{-- @include('admin.dashboard.charts')

            @include('admin.dashboard.bottom_cards')  --}}
        </div>
        <!-- End Container Fluid -->

    </div>
@endsection


@push('scripts')
    
@endpush
