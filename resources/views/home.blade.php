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
      <section class="bg-white">
        <div class="shell-fluid shell-condensed">
          <div class="range range-condensed">
            <div class="cell-md-12 cell-md-12-mod-1 text-center jumbotron-custom-3 bg-white bg-image" style="">
              <div class="image-wrap-inner">
                <h2>{{getConfig('text_sobre')->valor}}</h2>
                <p class="big">{!!getConfig('descricao_inicial_sobre')->valor!!}</p><a class="btn btn-style-1 btn-primary" href="{{getConfig('Sobre-nós')->valor}}">{{getConfig('Sobre-nós')->nome}}</a>
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
      <section class="box-wrap box-wrap-md bg-white">
              <div class="box-wrap-map" style = "background-color:#b1c7cf">
                
              </div>
              <div class="box-wrap-content">
                <div class="shell">
                  <div class="range">
                    <div class="cell-xs-12">
                      <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive">
                      <div class="box-contacts-col">
                          <div class="box-contacts-block">
                            <h3>{!!getConfig('texto_endereco')->valor!!}</h3>
                            <address>{!!getConfig('endereco')->valor!!}</address>
                          </div>
                          <div class="divider divider-nebula"></div>
                          <h3>{!!getConfig('texto_fale_conosco')->valor!!}</h3>
                            <p>{!!getConfig('fale_conosco')->valor!!}</p>
                        </div>
                        <div class="box-contacts-col box-contacts-right">
                          <div class="box-contacts-block">
                            
                            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-full-name">Nome Completo</label>
                                <input class="form-control form-control-has-validation form-control-last-child" id="contact-full-name" type="text" name="name" ><span class="form-validation"></span>
                              </div>
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-phone">Telefone</label>
                                <input class="form-control form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="phone" ><span class="form-validation"></span>
                              </div>
                              <div class="form-group">
                                <label class="form-label-outside" for="contact-phone">Mensagem</label>
                                <textarea class="form-control form-control-has-validation form-control-last-child" id="message" type="text" name="message" ></textarea><span class="form-validation"></span>
                              </div>
                              <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">{!!getConfig('enviar')->valor!!}</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      @include('modulos.parceiros')
@endsection
