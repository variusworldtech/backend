@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="page-timeline.html#">Home</a></li>
            <li class="breadcrumb-item"><a href="page-timeline.html#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Timeline</li>
          </ol>
          <h6 class="slim-pagetitle">Timeline</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm row-timeline">
          <div class="col-lg-9">

            <div class="card pd-30">
              <div class="timeline-group">
                <div class="timeline-item timeline-day">
                  <div class="timeline-time">&nbsp;</div>
                  <div class="timeline-body">
                    <p class="timeline-date">Today</p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">10:30pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">Building a Simple User Interface</a></p>
                    <p class="timeline-author"><a href="">Elisse Joson</a> San Francisco, CA</p>
                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-12 mg-b-0"><a href="">Like</a> &nbsp;&nbsp; <a href="">Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">8:15pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">Blueberry Cheesecake Dessert Recipe</a></p>
                    <p class="timeline-author"><a href="">Katherine Lumaad</a> Oakland, CA</p>
                    <p class="timeline-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>

                    <div class="row mg-b-15">
                      <div class="col-6">
                        <a href=""><img src="../img/img17.jpg" class="img-fluid" alt=""></a>
                      </div><!-- col-6 -->
                    </div><!-- row -->

                    <p class="tx-12 mg-b-0"><a href="">Like</a> &nbsp;&nbsp; <a href="">Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">3:30pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">Your Finances Don't Have to Be Perfect to Work</a></p>
                    <p class="timeline-author"><a href="">Elisse Joson</a> San Francisco, CA</p>
                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-12 mg-b-0"><a href="">Like</a> &nbsp;&nbsp; <a href="">Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item timeline-day">
                  <div class="timeline-time">&nbsp;</div>
                  <div class="timeline-body">
                    <p class="timeline-date">Yesterday</p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">6:30pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">An Engineer Explains Why You Should Always Order the Larger Pizza</a></p>
                    <p class="timeline-author"><a href="">Elisse Joson</a> San Francisco, CA</p>
                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>

                    <div class="row row-xs mg-b-15">
                      <div class="col-6">
                        <a href=""><img src="../img/img19.jpg" class="img-fluid" alt=""></a>
                      </div><!-- col-6 -->
                      <div class="col-6">
                        <a href=""><img src="../img/img18.jpg" class="img-fluid" alt=""></a>
                      </div><!-- col-6 -->
                    </div><!-- row -->

                    <p class="tx-12 mg-b-0"><a href="">2 Likes</a> &nbsp;&nbsp; <a href="">1 Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">1:15pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">The Strange Persistence of First Languages</a></p>
                    <p class="timeline-author"><a href="">Elisse Joson</a> San Francisco, CA</p>
                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-12 mg-b-0"><a href="">Like</a> &nbsp;&nbsp; <a href="">Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item timeline-day">
                  <div class="timeline-time">&nbsp;</div>
                  <div class="timeline-body">
                    <p class="timeline-date">December 20, 2017</p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
                <div class="timeline-item">
                  <div class="timeline-time">11:45pm</div>
                  <div class="timeline-body">
                    <p class="timeline-title"><a href="">How to Win Your Next Political Argument</a></p>
                    <p class="timeline-author"><a href="">Elisse Joson</a> San Francisco, CA</p>
                    <p class="timeline-text">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the </p>
                    <p class="tx-12 mg-b-0"><a href="">Like</a> &nbsp;&nbsp; <a href="">Comment</a></p>
                  </div><!-- timeline-body -->
                </div><!-- timeline-item -->
              </div><!-- timeline-group -->
            </div><!-- card -->

          </div><!-- col-9 -->
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <div id="datepicker" class="timeline-datepicker"></div>

            <div class="card pd-20 mg-t-20">
              <label class="slim-card-title">My Latest Updates</label>
              <div class="post-group">
                <div class="post-item">
                  <span class="post-date">Today, 3:30pm</span>
                  <p class="post-title"><a href="">Maybe Just Don't Drink Coffee</a></p>
                  <p class="tx-12 mg-b-0"><a href="">Elisse Joson</a> San Francisco, CA</p>
                </div><!-- post-item -->
                <div class="post-item">
                  <span class="post-date">Yesterday, 10:00am</span>
                  <p class="post-title"><a href="">Your Finances Don't Have to Be Perfect to Work</a></p>
                  <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
                  <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
                </div><!-- post-item -->
                <div class="post-item">
                  <span class="post-date">Dec 22, 2017 10:00am</span>
                  <p class="post-title"><a href="">The Condensed Guide to Running Meetings</a></p>
                  <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
                  <p class="tx-12 mg-b-15">We love to hate meetings. And with good reason — they clog up our days, making it hard to get work done in the gaps...</p>
                  <a href=""><img src="../img/img20.jpg" class="img-fluid" alt=""></a>
                </div><!-- post-item -->
                <div class="post-item">
                  <span class="post-date">Dec 21, 2017 5:00am</span>
                  <p class="post-title"><a href="">What Romance Really Means After 10 Years of Marriage</a></p>
                  <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
                  <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
                </div><!-- post-item -->
                <div class="post-item">
                  <span class="post-date">Dec 20, 2017 4:20am</span>
                  <p class="post-title"><a href="">
                Buying organic veggies at the supermarket is a waste of money</a></p>
                  <p class="tx-12 mg-b-10"><a href="">Elisse Joson</a> San Francisco, CA</p>
                  <p class="tx-12 mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button...</p>
                </div><!-- post-item -->
              </div><!-- post-group -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->



      </div><!-- container -->
    </div><!-- slim-mainpanel -->

      <div class="slim-footer">
        <div class="container">
          <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
          <p>Designed by: <a href="">ThemePixels</a></p>
        </div><!-- container -->
      </div><!-- slim-footer -->
  </div>
</div>
@endsection
