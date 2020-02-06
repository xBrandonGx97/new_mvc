<?php if($data['pageData']['nav'] === true): ?>
  <?php 
    Display('register_form_modal','<i class="fas fa-user-plus"></i>','0','2','Registration Form');
    Display('login_form_modal','<i class="fas fa-sign-in-alt"></i>','0','2','Login Form');
   ?>
  <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
      <div class="nk-nav-table">
        <a href="/" class="nk-nav-logo">
          <img src="/resources/themes/core/images/logos/logo.png" alt="" width="150">
        </a>
        <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
          <li class="active  ">
            <a href="/">Home</a>
		  </li>
          <li class="  ">
            <a href="/community/downloads">Downloads</a>
          </li>
          <li class="  nk-drop-item">
            <a href="#">Server Info</a>
            <ul class="dropdown">
              <li class="  ">
                <a href="/serverinfo/about">About</a>
              </li>
              <li class="  ">
                <a href="/serverinfo/drops">Droplist</a>
              </li>
              <li class="  ">
                <a href="/serverinfo/dropfinder">Dropfinder</a>
              </li>
              <li class="  ">
                <a href="/serverinfo/bossrecords">Boss Records</a>
              </li>
              <li class="  ">
                <a href="/serverinfo/terms">Terms and Conditions</a>
              </li>
            </ul>
          </li>
          <li class="  nk-drop-item">
            <a href="#">Community</a>
            <ul class="dropdown">
              <li class="  ">
                <a href="/community/discord">Discord</a>
              </li>
              <li class="  ">
                <a href="/community/news">News</a>
              </li>
              <li class="  ">
                <a href="/community/patchnotes">Patch Notes</a>
              </li>
              <li class="  ">
                <a href="/community/pvprankings">PvP Rankings</a>
              </li>
              <li class="  ">
                <a href="/community/guildrankings">Guild Rankings</a>
              </li>
              <li class="  ">
                <a href="/community/staffteam">Staff Team</a>
              </li>
              <li class="  ">
                <a href="/community/guilds">Guilds</a>
              </li>
            </ul>
          </li>
          <li class="  nk-drop-item">
            <a href="">About Notorious</a>
            <ul class="dropdown">
              <li class="  nk-drop-item">
                <a href="#">Game Guide</a>
                <ul class="dropdown">
                  <li class="  ">
                    <a href="/aboutnotorious/gettingstarted">Getting Started</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nk-nav nk-nav-right nk-nav-icons">
          <li class="single-icon hidden-lg-up">
            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
              <span class="nk-icon-burger">
                <span class="nk-t-1"></span>
                <span class="nk-t-2"></span>
                <span class="nk-t-3"></span>
              </span>
            </a>
          </li>
          <?php if(!isset($_SESSION['User']['UserUID'])): ?>
            <?php if($_SESSION['Settings']['LOGIN_TYPE']=='Modal'): ?>
              <li class="  nk-drop-item">
                <a href="#">
                  <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown">
                  <li class="  ">
                    <a href="#" class="open_login_form_modal" title="Login" data-id="" data-target="#login_form_modal" data-toggle="modal">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                  </li>
                  <li class="  ">
                    <a href="#" class="open_register_form_modal" title="Register" data-id="" data-target="#register_form_modal" data-toggle="modal">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                  </li>
                </ul>
              </li>
            <?php endif; ?>
            <?php if($_SESSION['Settings']['LOGIN_TYPE']=='Default'): ?>
              <li class="single-icon">
                <a href="#" class="nk-sign-toggle no-link-effect">
                  <span class="nk-icon-toggle">
                    <span class="nk-icon-toggle-front">
                      <span class="fas fa-user"></span>
                    </span>
                    <span class="nk-icon-toggle-back">
                      <span class="nk-icon-close"></span>
                    </span>
                  </span>
                </a>
              </li>
            <?php endif; ?>
            <?php else: ?>
              <?php if($_SESSION['Settings']['LOGIN_TYPE']=='Modal'): ?>
                <li class="  nk-drop-item">
                <a href="#">
                  <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown">
                  <li class="  ">
                    <a href="/member/account">Account</a>
                  </li>
                </ul>
              </li>
              <?php endif; ?>
              <?php if($_SESSION['Settings']['LOGIN_TYPE']=='Default'): ?>
              <?php endif; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

<?php elseif($data['pageData']['nav'] === false): ?>
  <h2>nav is false :)</h2>
<?php endif; ?>
