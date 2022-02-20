@extends('site.layout')
@section('section')
<div class="middle_bar">
    <div class="featured_sliderarea">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item"> <img src="images/668x328.jpg" alt="">
            <div class="carousel-caption">
              <h1><a href="#"> Aliquam malesuada diam eget turpis varius 1</a></h1>
            </div>
          </div>
          <div class="item"> <img src="images/668x328.jpg" alt="">
            <div class="carousel-caption">
              <h1><a href="#"> Aliquam malesuada diam eget turpis varius 2</a></h1>
            </div>
          </div>
          <div class="item"> <img src="images/668x328.jpg" alt="">
            <div class="carousel-caption">
              <h1><a href="#"> Aliquam malesuada diam eget turpis varius 3</a></h1>
            </div>
          </div>
          <div class="item active"> <img src="images/668x328.jpg" alt="">
            <div class="carousel-caption">
              <h1><a href="#"> Aliquam malesuada diam eget turpis varius 4</a></h1>
            </div>
          </div>
        </div>
        <a class="left left_slide" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a> <a class="right right_slide" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a></div>
    </div>
    <div class="single_category wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <div class="category_title"> <a href="pages/category-archive.html">Category 1</a></div>
      <div class="single_category_inner">
        <ul class="catg_nav">
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
            <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
         </li>
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
            <a class="catg_title" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
         </li>
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/310x150.jpg" alt=""> </a></div>
            <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="pages/single_page.html"><i class="fa fa-comments"></i>20 Comments</a></div>
         </li>
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x150.jpg" alt=""> </a></div>
            <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
         </li>
        </ul>
      </div>
    </div>
    <div class="single_category  wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <div class="category_title"> <a href="pages/category-archive.html">Category 2</a></div>
      <div class="single_category_inner">
        <ul class="catg_nav catg_nav2">
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
            <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
            <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
         </li>
          <li>
            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="images/310x300.jpg" alt=""> </a></div>
            <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
            <div class="sing_commentbox">
              <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
              <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
            <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
         </li>
        </ul>
      </div>
    </div>
    <div class="category_three_fourarea  wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <div class="category_three">
        <div class="single_category">
          <div class="category_title"> <a href="pages/single_page.html">Category 3</a></div>
          <div class="single_category_inner">
            <ul class="catg_nav catg_nav3">
              <li>
                <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/292x150.jpg" alt=""> </a></div>
                <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
             </li>
            </ul>
            <div class="catg3_bottompost wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
              <ul class="catg3_snav">
                <li>
                  <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="category_four wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="single_category">
          <div class="category_title"> <a href="#">Category 4</a></div>
          <div class="single_category_inner">
            <ul class="catg_nav catg_nav3">
              <li>
                <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="images/292x150.jpg" alt=""> </a></div>
                <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                <p class="post-summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
             </li>
            </ul>
            <div class="catg3_bottompost wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
              <ul class="catg3_snav">
                <li>
                  <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
                <li>
                  <div class="media"> <a class="media-left" href="#"> <img src="images/70x70.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                      <div class="sing_commentbox">
                        <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                    </div>
                  </div>
               </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single_category wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <div class="category_title"> <a href="#">Category 5</a></div>
      <div class="single_category_inner">
        <ul class="catg3_snav catg5_nav">
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
          <li>
            <div class="media"> <a href="#" class="media-left"> <img alt="" src="images/70x70.jpg"> </a>
              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                <div class="sing_commentbox">
                  <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                  <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
              </div>
            </div>
         </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
