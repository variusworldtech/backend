@extends('layouts.app')

@section('content')
<div class="container">
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL::to('/');?>/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="slim-pagetitle">Dashboard</h6>
        </div><!-- slim-pageheader -->

        <div class="dash-headline">
          <div class="dash-headline-left">
            <div class="dash-headline-item-one">
              <div id="chartArea1" class="dash-chartist"></div>
              <div class="dash-item-overlay">
                <h1>{{$tokens}} <span class="tx-24">VoX</span></h1>
                <p class="earning-label">Tokens purchased</p>
                <p class="earning-desc">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
                <a href="index.html#" class="statement-link">View Statements <i class="fa fa-angle-right mg-l-5"></i></a>
              </div>
            </div><!-- dash-headline-item-one -->
          </div><!-- dash-headline-left -->

          <div class="dash-headline-right">
            <div class="dash-headline-right-top">
              <div class="dash-headline-item-two">
                <div id="chartMultiBar1" class="chart-rickshaw"></div>
                <div class="dash-item-overlay">
                  <h4>&dollar;{{ $value }}<span class="tx-20"> USD</span></h4>
                  <p class="item-label">Current Value</p>
                  <p class="item-desc">You bought during the first trance at 20c USD...</p>
                  <a href="index.html#" class="report-link">View Chart <i class="fa fa-angle-right mg-l-5"></i></a>
                </div>
              </div><!-- dash-headline-item-two -->
            </div><!-- dash-headline-right-top -->
            <div class="dash-headline-right-bottom">
              <div class="dash-headline-right-bottom-left">
                <div class="dash-headline-item-three">
                  <div>
                    <h1>$15/$25 M</h1>
                    <p class="item-label">Left for the soft cap!</p>
                    <!-- <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p> -->
                  </div>
                </div><!-- dash-headline-item-three -->
              </div><!-- dash-headline-right-bottom-left -->
            </div><!-- dash-headline-right-bottom -->
          </div><!-- wd-50p -->
        </div><!-- d-flex ht-100v -->

        <div class="card card-dash-one mg-t-20">
          <div class="row no-gutters">
            <div class="col-lg-3">
              <i class="icon ion-ios-analytics-outline"></i>
              <div class="dash-content">
                <label class="tx-primary">Tokens Owned</label>
                <h2>325,000</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-pie-outline"></i>
              <div class="dash-content">
                <label class="tx-success">Percentage</label>
                <h2>9% owned</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-stopwatch-outline"></i>
              <div class="dash-content">
                <label class="tx-purple">Remaining</label>
                <h2>364 days</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-world-outline"></i>
              <div class="dash-content">
                <label class="tx-danger">Gain</label>
                <h2>$1,873</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card card-table">
              <div class="card-header">
                <h6 class="slim-card-title">Token Transactions</h6>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                  <thead>
                    <tr class="tx-10">
                      <th class="wd-10p pd-y-5">&nbsp;</th>
                      <th class="pd-y-5">TxHash</th>
                      <th class="pd-y-5 tx-right">Block</th>
                      <th class="pd-y-5">Amount</th>
                      <th class="pd-y-5 tx-center">Timestamp</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pd-l-20">
                        <img src="../img/img28.jpg" class="wd-55" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">T0x598fdb85bf17f7510a273180cc0f784558aebc8c2bf21f79377dadaa711e3cf2</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                      </td>
                      <td class="valign-middle tx-right">3,345</td>
                      <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                      <td class="valign-middle tx-center">
                        <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pd-l-20">
                        <img src="../img/img29.jpg" class="wd-55" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">0x998b7f5f0f6b7cc0838004f16be3a1cc5b29052df2e8c0a0a68e367ef01c878e</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                      </td>
                      <td class="valign-middle tx-right">720</td>
                      <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                      <td class="valign-middle tx-center">
                        <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pd-l-20">
                        <img src="../img/img30.jpg" class="wd-55" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">0x38018fff0422171fea03b450355f7a38b72a47506c378865c72c04cbc0e8c0a2</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                      </td>
                      <td class="valign-middle tx-right">1,445</td>
                      <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                      <td class="valign-middle tx-center">
                        <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pd-l-20">
                        <img src="../img/img31.jpg" class="wd-55" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">0x495260ddcc4fa68465d3b9b9a716cd4e3a21f78c5c98113d31f2901ba04d007a</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                      </td>
                      <td class="valign-middle tx-right">2,500</td>
                      <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                      <td class="valign-middle tx-center">
                        <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pd-l-20">
                        <img src="../img/img32.jpg" class="wd-55" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">0x87ce28655dacb5e057ef4753bc812a182e7c9698613a68b0cc43b30348acd023</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                      </td>
                      <td class="valign-middle tx-14 tx-right">223</td>
                      <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                      <td class="valign-middle tx-center">
                        <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transactions</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
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
