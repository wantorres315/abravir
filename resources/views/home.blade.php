@extends('layout.layout')

@section('title', 'Abravir')

@section('content')
<section class="jumbotron-custom jumbotron-custom-3 bg-white bg-image bg-image-custom bg-image-center" style="background-image: url(images/fundo.jpg);">
        <div class="jumbotron-custom-content text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-7">
                <h1>{{ getConfig('texto_inicial')->valor }}</h1>
                <p class="large"> {{ getConfig('descricao_inicial')->valor }}</p><a class="btn btn-style-1 btn-primary" href="{{getConfig('associe-se')->valor}}">{{getConfig('associe-se')->nome}}</a>
              </div>
            </div>
          </div>
        </div>
      </section>

     <section class="section-lg bg-periglacial-blue text-center">
        <div class="shell">
          <div class="range range-sm-center range-75">
            <div class="cell-xs-12">
              <h2>Ultimas Notícias</h2>
              <div class="p text-width-medium">
                <p class="big">Barbershop is not only a place where you can get a first-class haircut. Our barbers also write interesting articles on everything concerning their sphere of interest.</p>
              </div>
            </div>
            <div class="cell-xs-12">
              <div class="slick-slider carousel-center-mode" data-arrows="false" data-loop="true" data-dots="true" data-swipe="true" data-autoplay="false" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.0">
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="images/blog-1-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.html">Visiting a Barber</a></p>
                        <div class="post-classic-text">
                          <p>A barber knows how to cut men’s hair. If you’re like most men these days, you’re probably going to some unisex chain salon. Most of the time, you’d walk out of these places with an average haircut. Sometimes...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="images/blog-2-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.html">What Haircut Suits You</a></p>
                        <div class="post-classic-text">
                          <p>Different people have different face shapes. And not you, but your face shape decides will this haircut suit you or not. The Barbershop has prepared some advice for you, how to choose a proper haircut for...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="images/blog-3-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.html">Top 7 Shaving Products</a></p>
                        <div class="post-classic-text">
                          <p>The right shaving cream can make the difference between a healthy skin and one plagued by ingrown hairs, razor burns, irritation, and a variety of other issues that arise from nicks and cuts. In the times of old, people used soap when shaving and although there are still plenty of...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="images/blog-2-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.html">Visiting a Barber</a></p>
                        <div class="post-classic-text">
                          <p>A barber knows how to cut men’s hair. If you’re like most men these days, you’re probably going to some unisex chain salon. Most of the time, you’d walk out of these places with an average haircut. Sometimes...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.html">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     <section class="section-xl bg-gray-dark bg-image text-center" style="background-image: url(images/bg-image-1.jpg);">
        <div class="shell">
          <div class="range range-50">
            <div class="cell-xs-12">
              <h2>Nossos Parceiros</h2>
              <div class="p text-width-medium">
                <p class="big">We employ only highly qualified barbers who are not just professionals, but also enjoy maintaining the atmosphere of a classic barbershop.</p>
              </div>
            </div>
            <div class="cell-xs-12">
              <div class="range range-30">
                <div class="cell-sm-6 cell-md-4 height-fill">
                  <div class="thumbnail-card"><img class="thumbnail-card-image" src="images/barbers-1-370x310.jpg" alt="" width="370" height="310"/>
                    <div class="thumbnail-card-body">
                      <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">simon Wilson</p>
                      <div class="thumbnail-card-text">
                        <p>Mr. Wilson is the founder and owner of our barbershop.</p>
                      </div>
                      <ul class="inline-list inline-list-md">
                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 height-fill">
                  <div class="thumbnail-card"><img class="thumbnail-card-image" src="images/barbers-2-370x310.jpg" alt="" width="370" height="310"/>
                    <div class="thumbnail-card-body">
                      <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Harry Anderson</p>
                      <div class="thumbnail-card-text">
                        <p>Harry brings a detailed, meticulous approach to styling.</p>
                      </div>
                      <ul class="inline-list inline-list-md">
                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 height-fill">
                  <div class="thumbnail-card"><img class="thumbnail-card-image" src="images/barbers-3-370x310.jpg" alt="" width="370" height="310"/>
                    <div class="thumbnail-card-body">
                      <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Matthew phillips</p>
                      <div class="thumbnail-card-text">
                        <p>Matthew has several years of experience in the barber industry.</p>
                      </div>
                      <ul class="inline-list inline-list-md">
                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-xs-12"><a class="btn btn-sm btn-style-1 btn-primary" href="barbers.html">VIEW all team</a></div>
          </div>
        </div>
      </section>
@endsection
