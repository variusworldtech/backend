@extends('layouts.app')

@section('content')
<div class="container">

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL::to('/');?>/home">Home</a></li>
            <!--<li class="breadcrumb-item"><a href="page-pricing3.html#">Pages</a></li>
            <li class="breadcrumb-item"><a href="page-pricing3.html#">Pricing</a></li>-->
            <li class="breadcrumb-item active" aria-current="page">Buy Vox Tokens</li>
          </ol>
          <h6 class="slim-pagetitle">Buy Vox Tokens</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-xs">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-pricing-three">
              <div class="card-header">Personal</div>
              <div class="card-pricing">
                <h1>$100,000</h1>
                <p>VoX TOkens</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>10 times uplift</li>
                  <li>Sent 26th September 2018</li>
                  <li>Insured up to 55%</li>
                  <li>MetaMask Complient</li>
                  <li>Locked in for 12 months</li>
                </ul><!-- pricing-list -->
                <a href="<?= URL::to('/buy/1');?>" class="btn btn-primary btn-pricing">Reserve Now!</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-sm-t-0">
            <div class="card card-pricing-three card-pricing-primary">
              <div class="card-header bg-primary">Corporate</div>
              <div class="card-pricing">
                <h1>$500,000</h1>
                <p>VoX TOkens</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>10 times uplift</li>
                  <li>Sent 26th September 2018</li>
                  <li>Insured up to 55%</li>
                  <li>MetaMask Complient</li>
                  <li>Locked in for 12 months</li>
                </ul><!-- pricing-list -->
                <a href="<?= URL::to('/buy/2');?>" class="btn btn-primary btn-pricing">Reserve Now!</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-xl-t-0">
            <div class="card card-pricing-three">
              <div class="card-header">Institutional</div>
              <div class="card-pricing">
                <h1>$750,000</h1>
                <p>VoX TOkens</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>10 times uplift</li>
                  <li>Sent 26th September 2018</li>
                  <li>Insured up to 55%</li>
                  <li>MetaMask Complient</li>
                  <li>Locked in for 12 months</li>
                </ul><!-- pricing-list -->
                <a href="<?= URL::to('/buy/3');?>" class="btn btn-primary btn-pricing">Reserve Now!</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-xl-t-0">
            <div class="card card-pricing-three">
              <div class="card-header">Partner</div>
              <div class="card-pricing">
                <h1>$1,000,000+</h1>
                <p>VoX TOkens</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>10 times uplift</li>
                  <li>Sent 26th September 2018</li>
                  <li>Insured up to 55%</li>
                  <li>MetaMask Complient</li>
                  <li>Locked in for 12 months</li>
                </ul><!-- pricing-list -->
                <a href="" class="btn btn-primary btn-pricing">Request Callback</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
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
@endsection
