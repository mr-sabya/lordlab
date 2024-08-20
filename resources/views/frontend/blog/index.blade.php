@extends('frontend.layouts.app')

@section('content')
<!-- Inner Banner html start-->
<livewire:frontend.theme.banner title="Blog" />
<!-- Inner Banner html end-->

<!-- blog archive start -->
<div class="archive-section blog-archive">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 primary right-sidebar">
                <!-- blog post item html start -->
                <div class="grid blog-inner row">
                    <div class="grid-item col-md-6">
                        <article class="post">
                            <figure class="feature-image">
                                <a href="single-blog.html">
                                    <img src="{{ url('assets/frontend/img/agency-img16.jpg') }}" alt="">
                                </a>
                                <span class="cat-meta">
                                    <a href="single-post.html">MANAGEMENT</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h4>
                                    <a href="single-blog.html">Maxime rhoncus aliquet sint eu accusantium illum.</a>
                                </h4>
                                <p>
                                    Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur? Itaque mus
                                </p>
                                <div class="readmore-btn">
                                    <a href="single-blog.html">LEARN MORE..</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item col-md-6">
                        <article class="post">
                            <figure class="feature-image">
                                <a href="single-blog.html">
                                    <img src="{{ url('assets/frontend/img/agency-img15.jpg') }}" alt="">
                                </a>
                                <span class="cat-meta">
                                    <a href="single-post.html">BUSINESS</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h4>
                                    <a href="single-blog.html">Cursus egestas tristique viverra cum harum, ulla.</a>
                                </h4>
                                <p>
                                    Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur? Itaque mus
                                </p>
                                <div class="readmore-btn">
                                    <a href="single-blog.html">LEARN MORE..</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item col-md-6">
                        <article class="post">
                            <figure class="feature-image">
                                <a href="single-blog.html">
                                    <img src="{{ url('assets/frontend/img/agency-img14.jpg') }}" alt="">
                                </a>
                                <span class="cat-meta">
                                    <a href="single-post.html">MANAGEMENT</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h4>
                                    <a href="single-blog.html">Felis platea eget justo, esse cumque dolorum.</a>
                                </h4>
                                <p>
                                    Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur? Itaque mus
                                </p>
                                <div class="readmore-btn">
                                    <a href="single-blog.html">LEARN MORE..</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="grid-item col-md-6">
                        <article class="post">
                            <figure class="feature-image">
                                <a href="single-blog.html">
                                    <img src="{{ url('assets/frontend/img/agency-img13.jpg') }}" alt="">
                                </a>
                                <span class="cat-meta">
                                    <a href="single-post.html">BUSINESS</a>
                                </span>
                            </figure>
                            <div class="entry-content">
                                <h4>
                                    <a href="single-blog.html">Tellus sapien viverra posuere dolores archit.</a>
                                </h4>
                                <p>
                                    Malesuada error laudantium quibusdam, voluptas recusandae, corporis nec, metus numquam, facilis, nascetur? Itaque mus
                                </p>
                                <div class="readmore-btn">
                                    <a href="single-blog.html">LEARN MORE..</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- blog post item html end -->
                <!-- pagination html start-->
                <div class="post-navigation-wrap">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">..</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- pagination html start-->
            </div>
            <div class="col-lg-4 secondary ps-lg-4">
                <div class="sidebar">
                    <aside class="widget author_widget">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">ABOUT DIRECTOR</span>
                            </span>
                        </div>
                        <div class="widget-content text-center">
                            <div class="profile">
                                <figure class="avatar">
                                    <a href="#">
                                        <img src="{{ url('assets/frontend/img/agency-img20.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="text-content">
                                    <div class="name-title">
                                        <h5>
                                            <a href="#">William Wright</a>
                                        </h5>
                                    </div>
                                    <p>
                                        Ultricies augue sem fermentum deleniti ac odio curabitur, dolore mus corporis nisl. Class alias lorem omnis numquam ipsum.
                                    </p>
                                </div>
                                <div class="socialgroup">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.google.com/">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.twitter.com/">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.pinterest.com/">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget_latest_post widget-post-thumb">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">RECENT POSTS</span>
                            </span>
                        </div>
                        <ul>
                            <li>
                                <figure class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ url('assets/frontend/img/agency-img13.jpg') }}" alt=""></a>
                                </figure>
                                <div class="post-content">
                                    <h5>
                                        <a href="single-blog.html">Tellus sapien viverra posuere dolores archit.</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="single-blog.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="single-blog.html">August 17, 2022</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <figure class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ url('assets/frontend/img/agency-img14.jpg') }}" alt=""></a>
                                </figure>
                                <div class="post-content">
                                    <h5>
                                        <a href="single-blog.html">Anim purus in posuere itaque irure donec.</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="single-blog.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="single-blog.html">August 17, 2022</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <figure class="post-thumb">
                                    <a href="single-blog.html"><img src="{{ url('assets/frontend/img/agency-img15.jpg') }}" alt=""></a>
                                </figure>
                                <div class="post-content">
                                    <h5>
                                        <a href="single-blog.html">Sequi in molestie dolor sociosqu tellus eros.</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="single-blog.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="single-blog.html">August 17, 2022</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_social">
                        <div class="divider-wrapper">
                            <span class="title-divider">
                                <span class="top-title">FOLLOW US ON</span>
                            </span>
                        </div>
                        <div class="social-icon-wrap">
                            <div class="social-icon social-facebook">
                                <a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <div class="social-icon social-pinterest">
                                <a href="https://www.pinterest.com/">
                                    <i class="fab fa-pinterest"></i>
                                    <span>Pinterest</span>
                                </a>
                            </div>
                            <div class="social-icon social-whatsapp">
                                <a href="https://www.whatsapp.com/">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </a>
                            </div>
                            <div class="social-icon social-linkedin">
                                <a href="https://www.linkedin.com/">
                                    <i class="fab fa-linkedin"></i>
                                    <span>Linkedin</span>
                                </a>
                            </div>
                            <div class="social-icon social-twitter">
                                <a href="https://www.twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </div>
                            <div class="social-icon social-google">
                                <a href="https://www.google.com/">
                                    <i class="fab fa-google-plus-g"></i>
                                    <span>Google</span>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog archive end -->

@endsection