<header>
  <div class="container">
    <div class="header-data">
      <div class="logo">
        <a href="index.html" title=""><img src="{{url('customer')}}/images/logo.png" alt=""></a>
      </div><!--logo end-->
      <div class="search-bar">

      </div><!--search-bar end-->
      <nav>
        <ul>
          <li>
            <a href="{{ route('home') }}" title="">
              <span><img src="{{url('customer')}}/images/icon1.png" alt=""></span>
              Home
            </a>
          </li>

          <li>
            <a href="projects.html" title="">
              <span><img src="{{url('customer')}}/images/icon3.png" alt=""></span>
              Projects
            </a>
          </li>
          <li>
            <a href="profiles.html" title="">
              <span><img src="{{url('customer')}}/images/icon4.png" alt=""></span>
              Profiles
            </a>
            <ul>
              <li><a href="user-profile.html" title="">User Profile</a></li>
              <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
            </ul>
          </li>
          <li>
            <a href="jobs.html" title="">
              <span><img src="{{url('customer')}}/images/icon5.png" alt=""></span>
              Jobs
            </a>
          </li>

    @guest
          <li>
            <a href="{{ route('login') }}" title="">
              <span><i class="fas fa-sign-in-alt"></i></span>
              {{ __('Login') }}
            </a>
          </li>
      @if (Route::has('register'))
          <li>
            <a href="{{ route('register') }}" title="">
              <span><i class="fas fa-user-plus"></i></span>
              {{ __('Register') }}
            </a>
          </li>

      @endif



  @else

      <li>
        <a href="#" title="" class="not-box-openm">
          <span><img src="{{url('customer')}}/images/icon6.png" alt=""></span>
          Messages
        </a>
        <div class="notification-box msg" id="message">
          <div class="nt-title">
            <h4>Setting</h4>
            <a href="#" title="">Clear all</a>
          </div>
          <div class="nott-list">
            <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img1.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="messages.html" title="">Jassica William</a> </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img2.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="messages.html" title="">Jassica William</a></h3>
                  <p>Lorem ipsum dolor sit amet.</p>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img3.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="messages.html" title="">Jassica William</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="view-all-nots">
                <a href="messages.html" title="">View All Messsages</a>
              </div>
          </div><!--nott-list end-->
        </div><!--notification-box end-->
      </li>
      <li>
        <a href="#" title="" class="not-box-open">
          <span><img src="{{url('customer')}}/images/icon7.png" alt=""></span>
          Notification
        </a>
        <div class="notification-box noti" id="notification">
          <div class="nt-title">
            <h4>Setting</h4>
            <a href="#" title="">Clear all</a>
          </div>
          <div class="nott-list">
            <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img1.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img2.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img3.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="notfication-details">
                <div class="noty-user-img">
                  <img src="{{url('customer')}}/images/resources/ny-img2.png" alt="">
                </div>
                <div class="notification-info">
                  <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                  <span>2 min ago</span>
                </div><!--notification-info -->
              </div>
              <div class="view-all-nots">
                <a href="#" title="">View All Notification</a>
              </div>
          </div><!--nott-list end-->
        </div><!--notification-box end-->
      </li>
@endguest

        </ul>
      </nav><!--nav end-->





      <div class="menu-btn">
        <a href="#" title=""><i class="fa fa-bars"></i></a>
      </div><!--menu-btn end-->

  @auth
      <div class="user-account">

        <div class="user-info">
          <img src="{{url('customer')}}/images/resources/user.png" alt="">
          <a href="#" title="">{{ Auth::user()->name }}</a>
          <i class="la la-sort-down"></i>
        </div>

        <div class="user-account-settingss">


          <h3><a class="text-dark" href="#">Profile</a></h3>
          <h3><a class="text-dark" href="#">Saved posts</a></h3>
          <h3><a class="text-dark" href="#">Activty logs</a></h3>

          <ul class="us-links">
            <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
            <li><a href="#" title="">Privacy</a></li>
            <li><a href="#" title="">Faqs</a></li>
            <li><a href="#" title="">Terms & Conditions</a></li>
          </ul>


          <h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></h3>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>


        </div><!--user-account-settingss end-->
      </div>

      @endauth

    </div><!--header-data end-->
  </div>
</header><!--header end-->
