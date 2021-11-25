@extends('layout.master')
@section('content')
    <section class="section video" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">

                    <div class="left-content">
                        <h4 data-aos="zoom-out-right">Make
                            <em>Maps</em></h4>
                        <div data-aos="fade-up">
                            <p>Build interactive
                                maps that explain your data and encourage users to explore. Map your
                                own
                                data and gain perspective by adding the authoritative location-based data included in
                                ArcGIS
                                Online. Use smart mapping to guide your data exploration and visualization.
                            </p>
                            <div class="main-button"><a rel="nofollow" href="#" target="_parent">SEE MORE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-aos="zoom-out-up">
                        <article class="video-item">
                            <figure>
                                <img src="{{asset('/images/content-01.jpg')}}">
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <div data-aos="zoom-out-up">
                        <article class="video-item">
                            <figure>
                                <img src="{{asset('/images/content-01.jpg')}}">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4 data-aos="zoom-out-right">Share maps <em>and
                                apps</em></h4>
                        <div data-aos="fade-up">
                            <p>Share your maps
                                with specific groups or everyone. Create web apps with your maps for a
                                focused, interactive experience. Then integrate the apps you built into your digital
                                presence including your website, social media posts, and blog articles.</p>
                            <div class="main-button"><a rel="nofollow" href="#" target="_parent">SEE MORE</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Kontak</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-aos="zoom-in">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                               placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                               placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                              placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-aos="zoom-in">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15824.545431695931!2d112.7059402!3d-7.4501628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0f5f64092cb48de!2sDinas%20Pemberdayaan%20Masyarakat%20dan%20Desa%20(DPMD)%20Sidoarjo!5e0!3m2!1sid!2sid!4v1637552789935!5m2!1sid!2sid"
                                    width="100%" height="422px" frameborder="0" style="border:0"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('jquery')
    <script></script>
@endsection