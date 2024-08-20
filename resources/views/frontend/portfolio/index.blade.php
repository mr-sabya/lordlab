@extends('frontend.layouts.app')

@section('content')
<!-- Inner Banner html start-->
<livewire:frontend.theme.banner title="Portfolio" />
<!-- Inner Banner html end-->

<!-- home gallery section html start -->
<section class="gallery-section">
    <div class="container">
        <livewire:frontend.components.portfolio />
    </div>
</section>
<!-- home gallery section html end -->

<!-- home subscribe section html start -->
<livewire:frontend.components.subscribe />
<!-- home subscribe section html end -->
@endsection