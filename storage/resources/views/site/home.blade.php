<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="{{ asset('site/home/css/style.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <title>Home</title>
</head>
<body>

  <div class="bg-img">

    <nav>
      <div class="logo">
         <img src="{{ asset('site/home/images/img1.png') }}" alt="" id="img1">
      </div>
      <div class="toggle">

          <i class="fa fa-bars ouvrir"></i>
          <i class="fa fa-times fermer"></i>
      </div>

    <ul class="menu">
        <li><a href="/">الرئيسية</a></li>
        <li><a href="/aboutas">من نحن</a></li>
        <li><a href="/newsCategory">أخر الأخبار</a></li>
        <li><a href="#">الفعاليات </a></li>
        <li><a href="#">العضوية</a></li>

    </ul>


      <ul class="login">
          <li><a href="/login"> الدخول</a> </li>
          <li id="user"><a><i class="fa fa-user-o"></i></a></li>
          <li><a href="#"><i class="fa fa-search" style="font-size:24px"></i></a></li>
      </ul>
     </nav>

  <div class="container1">

     <h1>7th Annual IBA Finance &amp; Capital Markets Tax Conference</h1>
      <button id="bt1">SIGN UP</button>
      <button id="bt2">LEARN MORE</button>
    </div>

        <a class="prev">❮</a>
        <a class="next">❯</a>

      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      </div>
      <div class="container">


        <div class="titel">
            <h1><i class="i"></i>   الفعاليات القادمة</h1>
            <button>رؤية جميع الفعاليات</button>
        </div>



        <div class="cadrs">

            <div class="card-deck" id="deck">


          <div class="card" style="width: 13rem;">
            <img src="{{ asset('site/home/images/img6.jpg') }}" class="card-img-top" alt="..." style="height:14rem;">
            <div class="card-body1" id="card-body1">
              <div class="article"><h5 class="card-title">عنوان الفعالية</h5>
              <p class="card-text">
              محتوى النص في الفعالية </p>
              <div class="bor">
              <a href="#" class="a" style="color:#d84f45;font-weight: 700; padding-right: 5rem;">أنضم الأن  <span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color:#d84f45;"></i></span></a>
              <a href="#" class="a" style="color:#4b505a;font-weight: 700;">رؤية المزيد</a>
            </div>
            </div>
            </div>
          </div>

          <div class="card" style="width: 13rem;">
            <img src="{{ asset('site/home/images/img4.jpg') }}" class="card-img-top" alt="..." style="height:14rem;">
            <div class="card-body1" id="card-body1">
              <div class="article"><h5 class="card-title">عنوان الفعالية</h5>
              <p class="card-text">محتوى النص للفعالية
              </p>
              <div class="bor">
              <a href="#" class="a" style="color:#d84f45;font-weight: 700;padding-right: 5rem;"> أنضم الأن<span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color:#d84f45;"></i></span></a>
              <a href="#" class="a" style="color:#4b505a;font-weight: 700;">رؤية المزيد</a>
            </div>
            </div>
            </div>
          </div>

          <div class="card" style="width: 13rem;">
            <img src="{{ asset('site/home/images/img2.png') }}" class="card-img-top" alt="..." style="height:14rem;">
            <div class="card-body1" id="card-body1">
              <div class="article"><h5 class="card-title">عنوان الفعالية</h5>
              <p class="card-text">محتوى النص  للفعالية               </p>
              <div class="bor">
              <a href="#" class="a" style="color:#d84f45;font-weight: 700;padding-right: 5rem;">أنضم الأن <span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color:#d84f45;"></i></span></a>
              <a href="#" class="a" style="color:#4b505a;font-weight: 700;"> رؤية المزيد</a>
              </div>
            </div>
            </div>
          </div>


        </div>
      </div>
    </div>



<div class="goodnews">
  <div class="titel">
      <h1><i class="i"></i>   أخر الأخبار</h1>
      <button>رؤية جميع الأخبار</button>
</div>
<div class="container" id="container">

      @foreach ($blogs as $blog)
        <div class="card" style="max-width: 750px; border: none;">
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ asset('Attachments/'.$blog->image) }}" class="card-img" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"> {{ $blog->title }}</h5>
                <p class="card-text"> {{ $blog->short_description}}</p>
                <a href="{{ route('blog' , $blog->id) }}" class="a" style="color:#d84f45;font-weight: 700;">  رؤية المزيد <span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color:#d84f45;"></i></span></a>

                </div>
            </div>
            </div>
        </div>
      @endforeach


</div>
</div>


	 <footer class="">
		<div class="footer">
<div>
<img src="{{ asset('site/home/images/img1.png') }}" id="logo" style="height:20">

		<div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--entypo-social" width="30" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" data-icon="entypo-social:facebook-with-circle" data-width="30" data-height="40" style="color: gray; cursor: pointer;"><path fill="currentColor" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"></path></svg>
            <!-- twitter-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--entypo-social" width="30" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" data-icon="entypo-social:twitter-with-circle" data-width="30" data-height="40" style="color: gray; cursor: pointer;"><path fill="currentColor" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244c0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025c.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312a1.9 1.9 0 0 0 .853-.033a1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526a5.376 5.376 0 0 0 3.897 1.977a1.891 1.891 0 0 1 3.222-1.725a3.797 3.797 0 0 0 1.2-.459a1.9 1.9 0 0 1-.831 1.047a3.799 3.799 0 0 0 1.086-.299a3.834 3.834 0 0 1-.943.979z"></path></svg>
            <!-- instagram -->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--entypo-social" width="30" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" data-icon="entypo-social:instagram-with-circle" data-width="30" data-height="40" style="color: gray; cursor: pointer;"><path fill="currentColor" d="M13 10a3 3 0 1 1-6 0c0-.171.018-.338.049-.5H6v3.997c0 .278.225.503.503.503h6.995a.503.503 0 0 0 .502-.503V9.5h-1.049c.031.162.049.329.049.5zm-3 2a2 2 0 1 0-.001-4.001A2 2 0 0 0 10 12zm2.4-4.1h1.199a.301.301 0 0 0 .301-.3V6.401a.301.301 0 0 0-.301-.301H12.4a.301.301 0 0 0-.301.301V7.6c.001.165.136.3.301.3zM10 .4A9.6 9.6 0 0 0 .4 10a9.6 9.6 0 0 0 9.6 9.6a9.6 9.6 0 0 0 9.6-9.6A9.6 9.6 0 0 0 10 .4zm5 13.489C15 14.5 14.5 15 13.889 15H6.111C5.5 15 5 14.5 5 13.889V6.111C5 5.5 5.5 5 6.111 5h7.778C14.5 5 15 5.5 15 6.111v7.778z"></path></svg>
        </div>
</div>
			<div>
			<ul class="menuAdress">
                <li class="contact"><a href="#">Address</a></li>
                <li><a href="#">International Trade Law Advisors</a></li>
                <li><a href="#">1025 Connecticut Ave,N,W,Suit 1012</a></li>
                <li><a href="#"> Washingtong.D.D.20036</a></li>

            </ul>
			</div>

			<div>
			<ul class="menuAdress">
                <li class="contact"><a href="#">Contact</a></li>
                <li><a href="#">Tel: +01 202.642.4850</a></li>
                <li><a href="#">Fax: +01 202.318.1412</a></li>
                <li><a href="#"> Email: info@GlobalTradeLawAdvisors.com</a></li>

            </ul>
			</div>

			<div>
			<ul class="menuAdress">
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#"> Membership</a></li>

            </ul>
			</div>

		</div>

<div class="footer1">
<div>
Global Tride Advisions - All rights reserved
</div>

<ul class="menuFooter">
                <li class="contact"><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#"> Pricing</a></li>

 </ul>
</div>
    </footer>

<script src="{{ asset('site/home/script.js') }}"></script>


</body></html>
