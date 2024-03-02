    <style>
        /* HIDE RADIO */
.hiddenradio [type=radio] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
.hiddenradio [type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
.hiddenradio [type=radio]:checked + img {
  outline: 5px solid #fff;
  transition: outline 0.1s linear;
  margin: 0.5em;
  -webkit-transition-duration: 0.2s; /* Safari */
  transition-duration: 0.2s;
  text-decoration: none;
}

.hiddenradio [type=radio]:checked + img:after:active {
    transition: all 0.8s;
    opacity: 1;
  transition: 0s;
}

    </style>

    <div class="nk-main">
            <div class="nk-gap-2"></div>

            <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-12">
                <div class="nk-widget">
                <img src="<?=base_url('assets/')?>images/number1.png" alt="" width="30"><h3 class="nk-decorated-h-2"><span><span class="text-main-1">Masukkan</span> User ID</span></h3>
                    <div class="nk-widget-content">
                        <form action="<?=base_url('MobileLegends')?>" class="nk-form nk-form-ajax" method="POST">
                            <div class="row vertical-gap sm-gap">

                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="id" placeholder="User ID">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="server" placeholder="Server ID">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control required" name="server" placeholder="Konfirmasi Nickname">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
        <img src="<?=base_url('assets/')?>images/number2.png" alt="" width="30">
    </div>
    <!-- START: Categories -->

<div class="container">
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Pilih</span> Metode Pembayaran</span></h3>
<div class="nk-gap-2"></div>
<div class="nk-gap-2"></div>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <div class="hiddenradio">
                    <div class="col-md-12 ">
                        <label>
                            <input type="radio" name="test"  checked>
                            <img src="<?=base_url('assets/')?>images/shopee.png">
                        </label>
                </div>
            </div>
            <div class="col-md-12">
            <div class="hiddenradio">
                        <label>
                            <input type="radio" name="test"  checked>
                            <img src="<?=base_url('assets/')?>images/gopay.png">
                        </label>
                    </div>
            </div>
            <div class="col-md-12">
            <div class="hiddenradio">
                        <label>
                            <input type="radio" name="test"  checked>
                            <img src="<?=base_url('assets/')?>images/dana.png">
                        </label>
                    </div>
            </div>
            <div class="col-md-12">
            <div class="hiddenradio">
                        <label>
                            <input type="radio" name="test"  checked>
                            <img src="<?=base_url('assets/')?>images/ovo.png">
                        </label>
                    </div>
            </div>
            <div class="col-md-12">
            <div class="hiddenradio">
                        <label>
                            <input type="radio" name="test"  checked>
                            <img src="<?=base_url('assets/')?>images/bca.png">
                        </label>
                    </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-2"></div>

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-12">
                <div class="nk-widget">
                <img src="<?=base_url('assets/')?>images/number3.png" alt="" width="30"><h3 class="nk-decorated-h-2"><span><span class="text-main-1">Masukkan</span> No Whatsapp</span></h3>
                    <div class="nk-widget-content">
                        <form action="" class="nk-form nk-form-ajax" method="POST">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-12">
                                    <input type="text" class="form-control required" name="server" placeholder="No Whatsapp">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 " >
            <button class="nk-btn nk-btn-rounded nk-btn-color-white" type="submit" name="check" style="width: 150px; height:40px; border-radius:100px;">
                                <span>Konfirmasi</span>
                            </button>
                            </div>
                            </form>
    </div>
            <!-- END: Best Selling -->

    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>

    <div class="nk-gap"></div>

        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-gap-2"></div>
    <div class="nk-blog-grid">
        <div class="row">
            <div class="col-md-6 col-lg-3">

            </div>
        </div>
    </div>
    <!-- END: Latest News -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">
                    </div>
                </div>
            </div>
            <!-- END: Tabbed News -->
        </div>
        <div class="col-lg-4">
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
</div>
            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-12">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">

                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                    <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
    </div>
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="<?=base_url('assets/')?>images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="<?=base_url('assets/')?>images/bg-bottom.png" alt="">

<!-- END: Page Background -->




        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->



        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->




<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="<?=base_url('assets/')?>vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="<?=base_url('assets/')?>vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="<?=base_url('assets/')?>vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="<?=base_url('assets/')?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="<?=base_url('assets/')?>vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="<?=base_url('assets/')?>vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="<?=base_url('assets/')?>vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="<?=base_url('assets/')?>vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="<?=base_url('assets/')?>vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="<?=base_url('assets/')?>vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="<?=base_url('assets/')?>vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/moment/min/moment.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="<?=base_url('assets/')?>vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="<?=base_url('assets/')?>vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="<?=base_url('assets/')?>vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?=base_url('assets/')?>vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="<?=base_url('assets/')?>vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="<?=base_url('assets/')?>plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="<?=base_url('assets/')?>js/goodgames.min.js"></script>
<script src="<?=base_url('assets/')?>js/goodgames-init.js"></script>
<!-- END: Scripts -->



</body>
</html>
