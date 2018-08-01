@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="form-layouts.html#">Home</a></li>
            <li class="breadcrumb-item"><a href="form-layouts.html#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
          </ol>
          <h6 class="slim-pagetitle">Personal Information</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <!-- <label class="section-title">Top Label Layout</label> -->
          <!-- <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->



            <!-- <div class="form-layout-footer">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

      </div><!-- container -->

      <div class="container">
        <div class="slim-pageheader">

          <h6 class="slim-pagetitle">Purchase Details</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <!-- <label class="section-title">Top Label Layout</label> -->
          <!-- <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <div class="row mg-b-25">
              
              <!-- <div class="col-lg-4"> -->
                <!-- <div class="form-group">
                  <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!--col-4 -->

              <div class="col-lg-4">
                <div class="input-group">
                  <label class="form-control-label" style="min-width: 100%;">Amount: <span class="tx-danger">*</span></label>
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                    <input type="text" value= {{$amount}} class="form-control">
                    <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div><!-- input-group
              </div><!-- col-sm-4 -->
              <!-- <div class="col-lg-4"> --> 
                <!-- <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 --> 
             <!--  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <!-- <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div> -->
              <!-- </div>col-8 --> 
              <!-- <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            

            <!-- <div class="form-layout-footer">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

      </div><!-- container -->

      <div class="container">
        <div class="slim-pageheader">
          <h6 class="slim-pagetitle">Payment details</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <!-- <label class="section-title">Top Label Layout</label> -->
          <!-- <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p> -->

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            

            <div class="form-layout-footer">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

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
