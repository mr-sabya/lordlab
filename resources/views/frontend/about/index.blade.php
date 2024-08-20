@extends('frontend.layouts.app')

@section('content')
<!-- Inner Banner html start-->
<livewire:frontend.theme.banner title="About Us"/>
<!-- Inner Banner html end-->

<!-- About page html start -->
<livewire:frontend.about.index />
<!-- About page html end -->

<!-- home team section html start -->
<livewire:frontend.components.team />
@endsection