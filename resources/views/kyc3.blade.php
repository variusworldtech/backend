@extends('layouts.app')

@section('content')
<div class="container">
    <div class="slim-mainpanel">
      <div class="container">
        <div class="manager-header">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="<?= URL::to('/');?>/home">Home</a></li><!--
              <li class="breadcrumb-item"><a href="page-file-manager.html#">Pages</a></li>-->
              <li class="breadcrumb-item active" aria-current="page">Verify Contact Information</li>
            </ol>
            <h6 class="slim-pagetitle">Verify Informaiton</h6>
          </div><!-- slim-pageheader -->
          <a id="managerNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
        </div><!-- manager-header -->
        <div class="manager-wrapper">
          <div class="manager-right">
            <div class="section-wrapper mg-t-20">
              <label class="section-title">Contact Infomration</label>
              <p class="mg-b-20 mg-sm-b-40">Please use this form to varify your contact information</p>

              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username">
                  </div><!-- input-group -->
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username">
                    <div class="input-group-append">
                      <span class="input-group-text">@ex.com</span>
                    </div>
                  </div><!-- input-group -->
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div><!-- input-group -->
                </div><!-- col-sm-4 -->
              </div><!-- row -->

              <div class="row pd-t-20">
                <div class="col-lg-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <label class="ckbox wd-16 mg-b-0">
                          <input type="checkbox"><span></span>
                        </label>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Text input with checkbox">
                  </div><!-- input-group -->
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <label class="rdiobox wd-16 mg-b-0">
                          <input type="radio"><span></span>
                        </label>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Text input with radiobox">
                  </div><!-- input-group -->
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn bd bd-l-0 bg-white tx-gray-600" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div><!-- input-group -->
                </div><!-- col-4 -->
              </div><!-- row -->
            </div><!-- section-wrapper -->
          </div><!-- manager-right -->
          <div class="manager-left">
            <a href="" class="btn btn-contact-new">Upload File</a>
            <nav class="nav">
              <a href="<?= URL::to('/');?>/verify/  " class="nav-link">
                <span>Identity</span>
                <span>120</span>
              </a>
              <a href="<?= URL::to('/');?>/verify/residence" class="nav-link">
                <span>Residence</span>
                <span>16</span>
              </a>
              <a href="<?= URL::to('/');?>/verify/contact" class="nav-link active">
                <span>Contact Information</span>
                <span>68</span>
              </a>
              <!--
              <a href="" class="nav-link">
                <span>Videos</span>
                <span>38</span>
              </a>
              <a href="" class="nav-link">
                <span>Sounds</span>
                <span>9</span>
              </a>
            -->
            </nav>

          </div><!-- manager-left -->
        </div><!-- manager-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
</div>
@endsection
