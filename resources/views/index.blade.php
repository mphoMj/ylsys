@extends('layouts.default')
@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_m.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Every adolescent everywhre for eternity</h1>
                            <h2>Free html5 templates Made by </h2>
                            <p>
                                <a href="#" class="btn btn-primary btn-lg">Get Involved</a>
                                <a href="donate.php" class="btn btn-white btn-outline btn-lg">Donate</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
							<i class="icon-eye"></i>
						</span>
                        <h3>Retina Ready</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident.
                        </p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
							<i class="icon-command"></i>
						</span>
                        <h3>Fully Responsive</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident.
                        </p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
							<i class="icon-power"></i>
						</span>
                        <h3>Web Starter</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident.
                        </p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gtco-counter" class="gtco-bg gtco-cover gtco-counter"
         style="background-image:url(images/ForwardSlideGreen.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                    <span class="icon">
									<i class="icon-eye"></i>
								</span>
                                <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000"
                                      data-refresh-interval="50">1</span>
                                <span class="counter-label">Creativity Fuel</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                    <span class="icon">
									<i class="icon-anchor"></i>
								</span>
                                <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000"
                                      data-refresh-interval="50">1</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                    <span class="icon">
									<i class="icon-briefcase"></i>
								</span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000"
                                      data-refresh-interval="50">1</span>
                                <span class="counter-label">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                    <span class="icon">
									<i class="icon-clock"></i>
								</span>
                                <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000"
                                      data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Subscribe</h2>
                    <p>Be the first to know about Young Life.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
