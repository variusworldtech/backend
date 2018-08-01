<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Varius World Tech | ICO Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('css/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/chartist/css/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/slim.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
    <? $uri = $_SERVER['REQUEST_URI'];?>
    <div id="app">
            @guest
            @else
            <div class="slim-header">
              <div class="container">
                <div class="slim-header-left">
                  <h2 class="slim-logo"><a href="<?= URL::to('/');?>/home">Varius World Tech</a></h2>

                  <div class="search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div><!-- search-box -->
                </div><!-- slim-header-left -->
                <div class="slim-header-right">
                  <div class="dropdown dropdown-a">
                    <a href="" class="header-notification" data-toggle="dropdown">
                      <i class="icon ion-ios-bolt-outline"></i>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-menu-header">
                        <h6 class="dropdown-menu-title">Activity Logs</h6>
                        <div>
                          <a href="">Filter List</a>
                          <a href="">Settings</a>
                        </div>
                      </div><!-- dropdown-menu-header -->
                      <div class="dropdown-activity-list">
                        <div class="activity-label">Today, July 13, 2018</div>
                        <div class="activity-item">
                          <div class="row no-gutters">
                            <div class="col-2 tx-right">9:15am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">325,000 VoX tokens delivered to <a href="#">a7382d43s...</a></div>
                          </div><!-- row -->
                        </div><!-- activity-item -->
                        <div class="activity-item">
                          <div class="row no-gutters">
                            <div class="col-2 tx-right">9:48am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                            <div class="col-8">Purchase failed</div>
                          </div><!-- row -->
                        </div><!-- activity-item -->
                        <div class="activity-item">
                          <div class="row no-gutters">
                            <div class="col-2 tx-right">7:29am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                            <div class="col-8">You've almost reached you VoX token limit.</div>
                          </div><!-- row -->
                        </div><!-- activity-item -->
                        <div class="activity-item">
                          <div class="row no-gutters">
                            <div class="col-2 tx-right">3:21am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">Made an order for <strong>325,000</strong> Vox Tokens</div>
                          </div><!-- row -->
                        </div><!-- activity-item -->
                        <div class="activity-label">Yesterday, July 12, 2018</div>
                        <div class="activity-item">
                          <div class="row no-gutters">
                            <div class="col-2 tx-right">6:57am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">Verified identity for <strong>James Vince</strong></div>
                          </div><!-- row -->
                        </div><!-- activity-item -->
                      </div><!-- dropdown-activity-list -->
                      <div class="dropdown-list-footer">
                        <a href="http://themetrace.com/templates/slim/template/page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
                      </div>
                    </div><!-- dropdown-menu-right -->
                  </div><!-- dropdown -->
                  <div class="dropdown dropdown-b">
                    <a href="" class="header-notification" data-toggle="dropdown">
                      <i class="icon ion-ios-bell-outline"></i>
                      <span class="indicator"></span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-menu-header">
                        <h6 class="dropdown-menu-title">Notifications</h6>
                        <div>
                          <a href="">Mark All as Read</a>
                          <a href="">Settings</a>
                        </div>
                      </div><!-- dropdown-menu-header -->
                      <div class="dropdown-list">
                        <!-- loop starts here -->
                        <a href="" class="dropdown-link">
                          <div class="media">
                            <img src="../img/img8.jpg" alt="">
                            <div class="media-body">
                              <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                              <span>October 03, 2017 8:45am</span>
                            </div>
                          </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="dropdown-link">
                          <div class="media">
                            <img src="../img/img9.jpg" alt="">
                            <div class="media-body">
                              <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                              <span>October 02, 2017 12:44am</span>
                            </div>
                          </div><!-- media -->
                        </a>
                        <a href="" class="dropdown-link read">
                          <div class="media">
                            <img src="../img/img10.jpg" alt="">
                            <div class="media-body">
                              <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                              <span>October 01, 2017 10:20pm</span>
                            </div>
                          </div><!-- media -->
                        </a>
                        <a href="" class="dropdown-link read">
                          <div class="media">
                            <img src="../img/img2.jpg" alt="">
                            <div class="media-body">
                              <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                              <span>October 01, 2017 6:08pm</span>
                            </div>
                          </div><!-- media -->
                        </a>
                        <div class="dropdown-list-footer">
                          <a href="http://themetrace.com/templates/slim/template/page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                        </div>
                      </div><!-- dropdown-list -->
                    </div><!-- dropdown-menu-right -->
                  </div><!-- dropdown -->
                      @guest
                        Login
                      @else
                      <div class="dropdown dropdown-c">
                        <a href="<?= URL::to('/');?>" class="logged-user" data-toggle="dropdown" aria-expanded="true">
                          <img src="{{ Auth::user()->avatar }}" alt="">
                          <span>{{ Auth::user()->name }}</span>
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <nav class="nav">
                            <a href="<?= URL::to('/');?>/verify" class="nav-link">
                            <i class="icon ion-checkmark-round"></i> Verify informaiton</a>
                            <a href="<?= URL::to('/');?>/profile" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                            <a href="http://themetrace.com/templates/slim/template/page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                            <a href="http://themetrace.com/templates/slim/template/page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                            <a href="http://themetrace.com/templates/slim/template/page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                            <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="icon ion-forward"></i>{{ __('Logout') }}
                            </a>
                          </nav>
                        </div><!-- dropdown-menu -->
                      </div><!-- dropdown -->
                      @endguest
                </div><!-- header-right -->
            @endguest
          </div><!-- container -->
        </div><!-- slim-header -->
        @guest

        @else
            <div class="slim-navbar">
              <div class="container">
                <ul class="nav">
                  <li class="nav-item <?php $uri = $_SERVER['REQUEST_URI']; if($uri== "/home" || $uri== "/" ){ echo("active");}?>">
                    <a class="nav-link" href="<?= URL::to('/');?>/home">
                      <i class="icon ion-ios-home-outline"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item <?php $uri = $_SERVER['REQUEST_URI']; if($uri== "/buy"){ echo("active");}?>">
                    <a class="nav-link" href="<?= URL::to('/');?>/buy">
                      <i class="icon ion-android-playstore"></i>
                      <span>Buy VoX tokens</span>
                    </a>
                    <div class="sub-item">
                      <div class="row">
                        <div class="col-lg-5">
                          <label class="section-label">Basic Elements</label>
                          <div class="row">
                            <div class="col">
                              <ul>
                                <li><a href="elem-accordion.html">Accordion</a></li>
                                <li><a href="elem-alerts.html">Alerts</a></li>
                                <li><a href="elem-buttons.html">Buttons</a></li>
                                <li><a href="elem-cards.html">Cards</a></li>
                                <li><a href="elem-carousel.html">Carousel</a></li>
                                <li><a href="elem-dropdowns.html">Dropdown</a></li>
                                <li><a href="elem-icons.html">Icons</a></li>
                                <li><a href="elem-images.html">Images</a></li>
                                <li><a href="elem-lists.html">Lists</a></li>
                              </ul>
                            </div><!-- col -->
                            <div class="col-lg">
                              <ul>
                                <li><a href="elem-modal.html">Modal</a></li>
                                <li><a href="elem-media.html">Media Object</a></li>
                                <li><a href="elem-navigation.html">Navigation</a></li>
                                <li><a href="elem-pagination.html">Pagination</a></li>
                                <li><a href="elem-tooltip.html">Tooltip</a></li>
                                <li><a href="elem-popover.html">Popover</a></li>
                                <li><a href="elem-progress.html">Progress</a></li>
                                <li><a href="elem-spinner.html">Spinner</a></li>
                                <li><a href="elem-typography.html">Typography</a></li>
                              </ul>
                            </div><!-- col -->
                          </div><!-- row -->
                        </div><!-- col -->
                        <div class="col-lg mg-t-30 mg-lg-t-0">
                          <label class="section-label">Charts</label>
                          <ul>
                            <li><a href="chart-morris.html">Morris Charts</a></li>
                            <li><a href="chart-flot.html">Flot Charts</a></li>
                            <li><a href="chart-chartjs.html">ChartJS</a></li>
                            <li><a href="chart-echarts.html">ECharts</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-rickshaw.html">Rickshaw</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                          </ul>
                        </div><!-- col -->
                        <div class="col-lg mg-t-30 mg-lg-t-0">
                          <label class="section-label">Maps</label>
                          <ul>
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-leaflet.html">Leaflet Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                          </ul>

                          <label class="section-label mg-t-20">Tables</label>
                          <ul>
                            <li><a href="table-basic.html">Basic Table</a></li>
                            <li><a href="table-datatable.html">Data Table</a></li>
                          </ul>
                        </div><!-- col -->
                        <div class="col-lg mg-t-30 mg-lg-t-0">
                          <label class="section-label">Helper / Utilities</label>
                          <ul>
                            <li><a href="util-background.html">Background</a></li>
                            <li><a href="util-border.html">Border</a></li>
                            <li><a href="util-height.html">Height</a></li>
                            <li><a href="util-margin.html">Margin</a></li>
                            <li><a href="util-padding.html">Padding</a></li>
                            <li><a href="util-position.html">Position</a></li>
                            <li><a href="util-typography.html">Typography</a></li>
                            <li><a href="util-width.html">Width</a></li>
                          </ul>
                        </div><!-- col -->
                      </div><!-- row -->
                    </div><!-- dropdown-menu -->
                  </li>
                  <li class="nav-item <?php $uri = $_SERVER['REQUEST_URI']; if($uri== "/price"){ echo("active");}?>">
                    <a class="nav-link" href="<?= URL::to('/');?>/price">
                      <i class="icon ion-ios-book-outline"></i>
                      <span>Price</span>
                    </a>
                    <!--
                    <div class="sub-item">
                      <ul>
                        <li><a href="page-profile.html">Profile Page</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-contact.html">Contact Manager</a></li>
                        <li><a href="page-file-manager.html">File Manager</a></li>
                        <li><a href="page-calendar.html">Calendar</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li class="sub-with-sub">
                          <a href="<?= URL::to('/');?>#">Pricing</a>
                          <ul>
                            <li><a href="page-pricing.html">Pricing 01</a></li>
                            <li><a href="page-pricing2.html">Pricing 02</a></li>
                            <li><a href="page-pricing3.html">Pricing 03</a></li>
                          </ul>
                        </li>
                        <li class="sub-with-sub">
                          <a href="page-signin.html">Sign In</a>
                          <ul>
                            <li><a href="page-signin.html">Signin Simple</a></li>
                            <li><a href="page-signin2.html">Signin Split</a></li>
                          </ul>
                        </li>
                        <li class="sub-with-sub">
                          <a href="page-signup.html">Sign Up</a>
                          <ul>
                            <li><a href="page-signup.html">Signup Simple</a></li>
                            <li><a href="page-signup2.html">Signup Split</a></li>
                          </ul>
                        </li>
                        <li class="sub-with-sub">
                          <a href="<?= URL::to('/');?>#">Error Pages</a>
                          <ul>
                            <li><a href="page-404.html">404 Not Found</a></li>
                            <li><a href="page-505.html">505 Forbidden</a></li>
                            <li><a href="page-500.html">500 Internal Server</a></li>
                            <li><a href="page-503.html">503 Service Unavailable</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- dropdown-menu -->
                  </li>
                  <li class="nav-item with-sub">
                    <a class="nav-link" href="<?= URL::to('/');?>#" data-toggle="dropdown">
                      <i class="icon ion-ios-gear-outline"></i>
                      <span>Settings</span>
                    </a>
                    <div class="sub-item">
                      <ul>
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-layouts.html">Form Layouts</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizards.html">Form Wizards</a></li>
                        <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                        <li><a href="form-select2.html">Select2</a></li>
                        <li><a href="form-rangeslider.html">Range Slider</a></li>
                        <li><a href="form-datepicker.html">Datepicker</a></li>
                      </ul>
                    </div><!-- dropdown-menu -->
                  </li>
                  <li class="nav-item <?php $uri = $_SERVER['REQUEST_URI']; if($uri== "/messages"){ echo("active");}?>">
                    <a class="nav-link" href="<?= URL::to('/');?>/messages">
                      <i class="icon ion-ios-chatboxes-outline"></i>
                      <span>Messages</span>
                      <span class="square-8"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="widgets.html">
                      <i class="icon ion-ios-analytics-outline"></i>
                      <span>Share</span>
                    </a>
                  </li>
                </ul>
              </div><!-- container -->
            </div><!-- slim-navbar --> 
        @endguest

        <main class="py-4">
            @yield('content')
        </main>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>        
    </div>
    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('lib/chartist/js/chartist.js') }}"></script>
    <script src="{{ asset('lib/d3/js/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/js/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/slim.js') }}"></script>

    <script src="{{ asset('js/chart.chartjs.js') }}"></script>
    <script src="{{ asset('lib/chart.js/js/Chart.js') }}"></script>
</body>
</html>
