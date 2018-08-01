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
              <li class="breadcrumb-item active" aria-current="page">Verify Residence</li>
            </ol>
            <h6 class="slim-pagetitle">Verify Informaiton</h6>
          </div><!-- slim-pageheader -->
          <a id="managerNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
        </div><!-- manager-header -->

        <div class="manager-wrapper">
          <div class="manager-right">
            <div class="section-wrapper mg-t-20">
              <label class="section-title">Please verify Your address</label>
              <p class="mg-b-20 mg-sm-b-40">Proof of residence form</p>

              <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-md-4 mg-t--1 mg-md-t-0">
                    <div class="form-group mg-md-l--1">
                      <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-md-4 mg-t--1 mg-md-t-0">
                    <div class="form-group mg-md-l--1">
                      <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-md-8">
                    <div class="form-group bd-t-0-force">
                      <label class="form-control-label">Mail address: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="address" value="Market St., San Francisco" placeholder="Enter address">
                    </div>
                  </div><!-- col-8 -->
                  <div class="col-md-4">
                    <div class="form-group mg-md-l--1 bd-t-0-force">
                      <label class="form-control-label mg-b-0-force">Country: <span class="tx-danger">*</span></label>
                      <select id="select2-a" class="form-control" data-placeholder="Choose country">
                        <option label="Choose country"></option>
                        <option value="USA" selected>United States of America</option>
                        <option value="UK">United Kingdom</option>
                        <option value="China">China</option>
                        <option value="Japan">Japan</option>
                      </select>
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                  <button class="btn btn-primary bd-0">Submit Form</button>
                  <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- manager-right -->
          <div class="manager-left">
            <a href="" class="btn btn-contact-new">Upload File</a>
            <nav class="nav">
              <a href="<?= URL::to('/');?>/verify/" class="nav-link">
                <span>Identity</span>
                <span>120</span>
              </a>
              <a href="<?= URL::to('/');?>/verify/residence" class="nav-link active">
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
