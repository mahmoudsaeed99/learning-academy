@extends('Front.layout.master')


@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>HomePage<span>/</span>Courses<span>/</span>{{$course->cat->name}}<span>/</span>{{$course->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="{{asset('uploads/courses/'.$course->img)}}" alt="">
                </div>
                <div class="content_wrapper mt-5">
                    {!! $course->desc !!}
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="color">{{$course->trainer->name}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>${{$course->price}}</span>
                            </a>
                        </li>

                    </ul>
                </div>
                @include('front.include.errors')
                <form class="form-contact contact_form" action="{{route('front.message.enroll')}}" method="post" id="contactForm">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="spec" id="spec" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your speciality'" placeholder='Enter Subject'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">submit course</button>
                    </div>
                </form>


                <div class="feedeback">
                    <h6>Your Feedback</h6>
                    <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                    <div class="mt-10 text-right">
                        <a href="#" class="btn_1">Read more</a>
                    </div>
                </div>
                <div class="comments-area mb-30">
                    <div class="comment-list">
                        <div class="single-comment single-reviews justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/cource/cource_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Emilly Blunt</a>
                                    </h5>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p class="comment">
                                        Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                        form
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="single-comment single-reviews justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/cource/cource_2.png" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Elsie Cunningham</a>
                                    </h5>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p class="comment">
                                        Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                        form
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="single-comment single-reviews justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/cource/cource_3.png" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Maria Luna</a>
                                    </h5>
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p class="comment">
                                        Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                        form
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--================ End Course Details Area =================-->

@endsection