<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget">
                        <a href="{{url('/')}}" class="footer-logo"><img style="max-width: 200px" src="{{asset('User/assets/images/TmLogo2.png')}}" alt="logo"></a>
                        <p> (CONTINOUSLY INNOVATING & CREATING) </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget">
                        <h5 class="footer-title">Products</h5>
                        <div class="widget-wrapper">
                            <ul>
                                <li><a href="{{url('/crops')}}">All</a></li>
                                <li><a href="{{url('/new-crops')}}">New</a></li>
                                <li><a href="{{url('/special-crops')}}">Special</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget">
                        <h5 class="footer-title">Useful Links</h5>
                        <div class="widget-wrapper">
                            <ul>
                                <li><a href="{{route('about-us.index')}}">About Us</a></li>
                                <li><a href="{{route('events')}}">Events</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="copyright">Copyright &copy; 2022 <a href="{{url('/')}}">Terramonte</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


