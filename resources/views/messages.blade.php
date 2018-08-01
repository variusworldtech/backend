@extends('layouts.app')

@section('content')
<div class="container">

     <div class="slim-mainpanel">
      <div class="container container-messages">
        <div class="messages-left">
          <div class="slim-pageheader">
            <h6 class="slim-pagetitle">Messages</h6>
            <a href="" class="messages-compose"><i class="icon ion-compose"></i></a>
          </div><!-- slim-pageheader -->

          <div class="messages-list">
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img2.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Socrates Itumay</h6>
                  <p>The new common language will be more simple and regular...</p>
                </div>
                <div>
                  <span>Dec 14</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media unread">
              <div class="media-left">
                <img src="../img/img4.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Joyce Chua</h6>
                  <p>To an English person, it will seem like simplified english...</p>
                </div>
                <div>
                  <span>Dec 14</span>
                  <span>1</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img3.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Isidore Dilao</h6>
                  <p>The new common language will be more simple and regular...</p>
                </div>
                <div>
                  <span>Dec 12</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img5.jpg" alt="">
                <span class="square-10 bg-gray-600"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Dyanne Aceron</h6>
                  <p>To an English person, it will seem like simplified english...</p>
                </div>
                <div>
                  <span>Dec 10</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img6.jpg" alt="">
                <span class="square-10 bg-gray-600"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Roven Galeon</h6>
                  <p>To an English person, it will seem like simplified english...</p>
                </div>
                <div>
                  <span>Dec 08</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img7.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Helder Bongcaras</h6>
                  <p>The new common language will be more simple and regular...</p>
                </div>
                <div>
                  <span>Dec 07</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img8.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Maricel Villalon</h6>
                  <p>The new common language will be more simple and regular...</p>
                </div>
                <div>
                  <span>Dec 07</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
            <a href="" class="media">
              <div class="media-left">
                <img src="../img/img9.jpg" alt="">
                <span class="square-10 bg-success"></span>
              </div><!-- media-left -->
              <div class="media-body">
                <div>
                  <h6>Maritte Rejas</h6>
                  <p>To an English person, it will seem like simplified english...</p>
                </div>
                <div>
                  <span>Dec 05</span>
                </div>
              </div><!-- media-body -->
            </a><!-- media -->
          </div><!-- messages-list -->

          <div class="messages-left-footer">
            <button class="btn btn-slim btn-uppercase-sm btn-block">Load Older Messages</button>
          </div><!-- messages-left-footer -->
        </div><!-- messages-left -->

        <div class="messages-right d-none d-lg-block">
          <div class="message-header">
            <a href="" class="message-back"><i class="fa fa-angle-left"></i></a>
            <div class="media">
              <img src="../img/img4.jpg" alt="">
              <div class="media-body">
                <h6>Joyce Chua</h6>
                <p>Last seen: 2 hours ago</p>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="message-option">
              <div class="d-none d-sm-flex">
                <a href=""><i class="icon ion-ios-telephone-outline"></i></a>
                <a href=""><i class="icon ion-ios-videocam-outline"></i></a>
                <a href=""><i class="icon ion-ios-gear-outline"></i></a>
                <a href=""><i class="icon ion-ios-information-outline"></i></a>
              </div>
              <div class="d-sm-none">
                <a href=""><i class="icon ion-more"></i></a>
              </div>
            </div>
          </div><!-- message-header -->
          <div class="message-body">
            <div class="media-list">
              <div class="media">
                <img src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/22885881_10203315880175400_6237908513470907895_n.jpg?_nc_cat=0&oh=608983892dccb103ec54dc99831d5276&oe=5BC3C76F" alt="">
                <div class="media-body">
                  <div class="msg">
                    <p>Hi, there?</p>
                  </div>
                  <div class="msg">
                    <p>Are you ready for our party tonight?</p>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body reverse">
                  <div class="msg">
                    <p>So this is where you plan to do it?</p>
                  </div>
                </div><!-- media-body -->
                <img src="../img/img4.jpg" class="wd-50 rounded-circle" alt="">
              </div><!-- media -->
              <div class="media">
                <img src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/22885881_10203315880175400_6237908513470907895_n.jpg?_nc_cat=0&oh=608983892dccb103ec54dc99831d5276&oe=5BC3C76F" alt="">
                <div class="media-body">
                  <div class="msg">
                    <p>As good a place as any.</p>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body reverse">
                  <div class="msg">
                    <p>At least have the balls to call this what it is: murder. You really believe if you walk back onto that farm alone, no me, no Randall... </p>
                  </div>
                  <div class="msg">
                    <p>You really believe they're gonna buy whatever bullshit story you cook up?</p>
                  </div>
                </div><!-- media-body -->
                <img src="../img/img4.jpg" class="wd-50 rounded-circle" alt="">
              </div><!-- media -->
              <div class="media">
                <img src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/22885881_10203315880175400_6237908513470907895_n.jpg?_nc_cat=0&oh=608983892dccb103ec54dc99831d5276&oe=5BC3C76F" alt="">
                <div class="media-body">
                  <div class="msg">
                    <p>That's just it, it ain't no story. I saw that prisoner shoot you down. I ran after him, I snapped his neck. It ain't gonna be easy, but Lori and Carl, they'll get over you. They done it before. They just gonna have to.</p>
                  </div>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- media-list -->
          </div><!-- message-body -->
          <div class="message-footer">
            <div class="row row-sm">
              <div class="col-9 col-sm-8 col-xl-9">
                <input type="text" class="form-control" placeholder="Type something here...">
              </div><!-- col-8 -->
              <div class="col-3 col-sm-4 col-xl-3 tx-right">
                <div class="d-none d-sm-block">
                  <a href=""><i class="icon ion-happy-outline"></i></a>
                  <a href=""><i class="icon ion-ios-game-controller-b-outline"></i></a>
                  <a href=""><i class="icon ion-ios-camera-outline"></i></a>
                  <a href=""><i class="icon ion-ios-mic-outline"></i></a>
                </div>
                <div class="d-sm-none">
                  <a href=""><i class="icon ion-more"></i></a>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div><!-- message-footer -->
        </div><!-- messages-right -->
      </div><!-- container -->
    </div><!-- slim-mainpanel --> 
</div>
@endsection
