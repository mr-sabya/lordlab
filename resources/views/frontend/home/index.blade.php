@extends('frontend.layouts.app')

@section('content')
<!-- home banner section html start -->
<livewire:frontend.home.banner />

<!-- home service section html end -->
<livewire:frontend.home.service />

<!-- home about section html start -->
<livewire:frontend.home.about />

<!-- home client section html start -->
<livewire:frontend.components.client />

<!-- home fact section html start -->
<livewire:frontend.components.fact />

<!-- home gallery section html start -->
<livewire:frontend.home.gallery />

<!-- home team section html start -->
<livewire:frontend.components.team />

<!-- home testimonial section html start -->
<livewire:frontend.components.testimonial />

<!-- home contact section html start -->
<livewire:frontend.home.contact />
<livewire:frontend.components.counter />


<!-- home blog section html start -->
<livewire:frontend.home.blog />

<!-- home subscribe section html start -->
<livewire:frontend.components.subscribe />

@endsection