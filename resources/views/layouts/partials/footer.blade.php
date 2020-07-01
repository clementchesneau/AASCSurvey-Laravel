<footer class="top-space">

    <div class="footer pb-5" id="divfooter">
        <div class="container mt-5">    
            <div class="row">      
                <div class="col-sm pt-3 text-center">
                    <h5 class="widget-title "><a class="text-white"href="{{ route('account', app()->getLocale()) }}">{{ __('messages.footer.profil') }}</a></h5> 
                    <h5 class="text-white">{{ __('messages.footer.premium') }}</h5>
                </div>
                <div class="col-sm pt-3 text-center">
                    <h5 class="widget-title "><a class="text-white" href="{{ route('home', app()->getLocale()) }}">{{ __('messages.header.dashboard') }}</a></h5> 
                    <h5 class="widget-title "><a class="text-white" href="{{ route('surveys.index', app()->getLocale()) }}">{{ __('messages.header.surveys') }}</a></h5>    
                </div>
                <div class="col-sm text-center">
                    <a class="navbar-brand text-white" href="{{ url('/' . app()->getLocale()) }}">
                    <img src="{{ asset('img/logo_AASC.png') }}">
                    </a>
                    <div class="justify-content-md-center row">
                        <div class = "p-1 d-flex justify-content-center"><a href="https://twitter.com/AASC07770281" target="_blank"><i class="fab fa-twitter-square fa-3x colortextCA3E47"></i></a></div>
                        <div class = "p-1 d-flex justify-content-center"><a href="https://www.linkedin.com/in/aasc-survey-44b0721b0/" target="_blank"><i class="fab fa-linkedin fa-3x colortextCA3E47"></i></a></div>
                        <div class = "p-1 d-flex justify-content-center"><a href="https://www.facebook.com/AASC-108309260918270/?view_public_for=108309260918270" target="_blank"><i class="fab fa-facebook fa-3x colortextCA3E47"></i></a></div>                            
                    </div>
                </div>  
                <div class="col-sm pt-3 text-center">
                    <h5 class="widget-title "><a class="text-white">{{ __('messages.footer.contactus') }}</a></h5> 
                    <h5 class="widget-title "><a class="text-white" href="{{ route('about', app()->getLocale()) }}">{{ __('messages.footer.whoarewe') }}</a></h5>    
                </div>    
                <div class="col-sm pt-3 text-center">
                    <h5 class="widget-title "><a class="text-white" href="{{ route('legalnotice', app()->getLocale()) }}">{{ __('messages.footer.legal') }}</a></h5>                 
                </div>               
            </div>
        </div>
    </div>
    <div class="col py-2 color45464B text-white-50">
        <div class="container py-2 text-white-50 text-center">
            <small>Copyright &copy; AASC</small>
        </div>            
    </div>
</footer>
