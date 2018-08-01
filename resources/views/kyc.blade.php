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
              <li class="breadcrumb-item active" aria-current="page">Verify Identity</li>
            </ol>
            <h6 class="slim-pagetitle">Verify Informaiton</h6>
          </div><!-- slim-pageheader -->
          <a id="managerNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
        </div><!-- manager-header -->

        <div class="manager-wrapper">
          <div class="manager-right">
            <label class="section-label">Today</label>
            <div class="file-group">
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-image-o"></i>
                    <a href="">IMG_12292017.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">123kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">20 minutes ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href="">
                    <i class="icon ion-checkmark-circled" title="passed"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-image-o"></i>
                    <a href="">IMG_12292016.jpg</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">204kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">1 hour ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href="">
                    <i class="icon ion-android-time" title="pending"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
              <div class="file-item">
                <div class="row no-gutters wd-100p">
                  <div class="col-9 col-sm-5 d-flex align-items-center">
                    <i class="fa fa-file-pdf-o"></i>
                    <a href="">Getting_Started.pdf</a>
                  </div><!-- col-6 -->
                  <div class="col-3 col-sm-2 tx-right tx-sm-left">31kb</div>
                  <div class="col-6 col-sm-4 mg-t-5 mg-sm-t-0">2 hours ago</div>
                  <div class="col-6 col-sm-1 tx-right mg-t-5 mg-sm-t-0"><a href="">
                    <i class="icon ion-close-circled" title="failed"></i></a></div>
                </div><!-- row -->
              </div><!-- file-item -->
            </div><!-- file-group -->
          </div><!-- manager-right -->
          <div class="manager-left">
            <a href="" class="btn btn-contact-new">Upload File</a>
            <nav class="nav">
              <a href="<?= URL::to('/');?>/verify/  " class="nav-link active">
                <span>Identity</span>
                <span>120</span>
              </a>
              <a href="<?= URL::to('/');?>/verify/residence" class="nav-link">
                <span>Residence</span>
                <span>16</span>
              </a>
              <a href="<?= URL::to('/');?>/verify/contact" class="nav-link">
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
