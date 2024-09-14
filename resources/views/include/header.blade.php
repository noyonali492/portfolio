<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
<header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
        </ul>  
        @foreach ($herolists as $hero)
           
        
        <div class="header-content">
            <h4 class="header-subtitle" >{{ $hero->hello_text }}</h4>
            <h2 class="header-title">{{ $hero->user_name }}</h2>
            <h6 class="header-mono" >{{ $hero->designation }}</h6>
            <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
        </div>
        @endforeach
    </div>
</header>