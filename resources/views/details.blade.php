@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Restaurant</a></li>
            <li class="active">Details</li>
        </ol>
        <section class="page-title pull-left">
            <h1>{{ $name }}</h1>
            <h3>{{ $address }}</h3>
            <div class="rating-passive" data-rating="4">
                <span class="stars"></span>
                <span class="reviews">6</span>
            </div>
        </section>
        <!--end page-title-->
        <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
    </div>
    <!--end container-->
    <section>
        <div class="gallery detail">
            <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
                <div class="image">
                    <div class="bg-transfer"><img src="{{ asset('assets/img/items/24.jpg') }}" alt=""></div>
                </div>
                <div class="image">
                    <div class="bg-transfer"><img src="{{ asset('assets/img/items/30.jpg') }}" alt=""></div>
                </div>
                <div class="image">
                    <div class="bg-transfer"><img src="{{ asset('assets/img/items/31.jpg') }}" alt=""></div>
                </div>
                <div class="image">
                    <div class="bg-transfer"><img src="{{ asset('assets/img/items/21.jpg') }}" alt=""></div>
                </div>
                <div class="image">
                    <div class="bg-transfer"><img src="{{ asset('assets/img/items/23.jpg') }}" alt=""></div>
                </div>
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end gallery-->
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div id="gallery-nav"></div>
                <section>
                    <h2>About this listing</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt
                        massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit
                        enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique
                        ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant
                        morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    <p>
                        In ut varius magna. Integer ullamcorper tincidunt molestie. Morbi consequat sem non nulla laoreet,
                        non commodo tellus elementum. Sed tincidunt, lorem vitae rhoncus pharetra, diam ex pharetra erat, eu
                        lacinia mi libero vitae lectus. Nullam cursus bibendum magna ut elementum. Fusce eget mauris in erat
                        gravida pretium sed eget massa.
                        gravida pretium sed eget massa.
                    </p>
                </section>
                <section>
                    <h2>Menu</h2>
                    <ul class="tags">
                        @foreach ($menus as $menu)
                            <li> {{ $menu }} </li>
                        @endforeach
                    </ul>
                </section>
                <section>
                    <h2>Reviews</h2>
                    <div class="review">
                        <div class="image">
                            <div class="bg-transfer"><img src="{{ asset('assets/img/person-02.jpg') }}" alt=""></div>
                        </div>
                        <div class="description">
                            <figure>
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <span class="date">09.05.2016</span>
                            </figure>
                            <p>Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis</p>
                        </div>
                    </div>
                    <!--end review-->
                    <div class="review">
                        <div class="image">
                            <div class="bg-transfer"><img src="{{ asset('assets/img/person-01.jpg') }}" alt=""></div>
                        </div>
                        <div class="description">
                            <figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <span class="date">09.05.2016</span>
                            </figure>
                            <p>Vestibulum vel est massa. Integer pellentesque non augue et accumsan. Maecenas molestie elit nibh,
                                vel vestibulum leo condimentum quis. Duis ac orci a magna auctor vehicula.
                            </p>
                        </div>
                    </div>
                    <!--end review-->
                </section>
                <section id="write-a-review">
                    <h2>Write a Review</h2>
                    <form class="clearfix form inputs-underline">
                        <div class="box">
                            <div class="comment">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="comment-title">
                                            <h4>Review your experience</h4>
                                        </div>
                                        <!--end title-->
                                        <div class="form-group">
                                            <label for="name">Title of your review<em>*</em></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your Message<em>*</em></label>
                                            <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="comment-title">
                                            <h4>Rating</h4>
                                        </div>
                                        <!--end title-->
                                        <dl class="visitor-rating">
                                            <dt>Comfort</dt>
                                            <dd class="star-rating active" data-name="comfort"></dd>
                                            <dt>Location</dt>
                                            <dd class="star-rating active" data-name="location"></dd>
                                            <dt>Facilities</dt>
                                            <dd class="star-rating active" data-name="facilities"></dd>
                                            <dt>Staff</dt>
                                            <dd class="star-rating active" data-name="staff"></dd>
                                            <dt>Value for money</dt>
                                            <dd class="star-rating active" data-name="value"></dd>
                                        </dl>
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end comment-->
                        </div>
                        <!--end review-->
                    </form>
                    <!--end form-->
                </section>
            </div>
            <!--end col-md-7-->
            <div class="col-md-5 col-sm-5">
                <div class="detail-sidebar">
                    <section class="shadow">
                        <div class="map height-250px" id="map-detail"></div>
                        <!--end map-->
                        <div class="content">
                            <div class="vertical-aligned-elements">
                                <div class="element"><img src="{{ asset('assets/img/logo-2.png') }}" alt=""></div>
                                <!--<div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>-->
                            </div>
                            <hr>
                            <address>
                                <figure><i class="fa fa-map-marker"></i>{{ $address }}</figure>
                                <figure><i class="fa fa-envelope"></i><a href="#">{{ $email }}</a></figure>
                                <figure><i class="fa fa-phone"></i>{{ $phone_number }}</figure>
                                <figure><i class="fa fa-globe"></i><a href="{{ $website }}">{{ $website }}</a></figure>
                            </address>
                        </div>
                    </section>
                    <section class="box">
                        <h2>Opening Hours</h2>
                        <dl>
                            <dt>Monday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Tuesday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Wednesday</dt>
                            <dd>12:00am - 11:00pm</dd>
                            <dt>Thursday</dt>
                            <dd>08:00am - 11:00pm</dd>
                            <dt>Friday</dt>
                            <dd>03:00pm - 02:00am</dd>
                            <dt>Saturday</dt>
                            <dd>03:00pm - 02:00am</dd>
                            <dt>Sunday</dt>
                            <dd>Closed</dd>
                        </dl>
                    </section>
                </div>
                <!--end detail-sidebar-->
            </div>
            <!--end col-md-5-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
<!--end page-content-->
@endsection
