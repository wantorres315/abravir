@extends('layout.internas')

@section('title', getConfig('text_sobre')->valor)

@section('content')
<section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-50">
                  <div class="cell-xs-12">
                   
                    <div class="p text-width-medium">
                      <p class="big">{!!getConfig('descricao_inicial_sobre')->valor!!}</p>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="range range-30">
                      @foreach($servicos as $servico)
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                        
                          <p class="box-icon-header"><a class="link-underlined" href="services.html">{{$servico->nome}}</a></p>
                          <p class="box-icon-text">{{$servico->descricao}}</p>
                        </article>
                      </div>
                     @endforeach
                    
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-75">
                  <div class="cell-xs-12">
                    <h2>{!!getConfig('texto_pessoas')->valor!!}</h2>
                    <div class="p text-width-medium">
                      <p class="big">These reviews that our clients have recently submitted are the best way to learn more about our barbershop’s level of service and customer support.</p>
                    </div>
                  </div>
                  <div class="cell-lg-10">
                    <blockquote class="quote-review">
                      <div class="quote-review-left">
                        <div class="quote-review-avatar"><img class="quote-review-image" src="images/testimonials-1-100x100.jpg" alt="" width="100" height="100">
                        </div>
                      </div>
                      <div class="quote-review-body">
                        <div class="quote-review-header">
                          <p class="quote-review-title">My Son is Very Happy! </p>
                          <ul class="quote-review-rating">
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                          </ul>
                        </div>
                        <div class="quote-review-meta"><span>By</span><span class="quote-review-user">Matt Parker</span><span>on</span>
                          <time datetime="2017-06-08">June 8, 2017</time>
                        </div>
                        <p class="quote-review-text">
                          <q>I have taken my 3 yr old son for his first men’s haircut and now I’m glad he has such a fantastic look. I recommend any of the barbers at Barbershop for service and pride in their work. I believe my son would never be allowed to leave the chair without a really handsome cut.</q>
                        </p>
                      </div>
                    </blockquote>
                    <blockquote class="quote-review">
                      <div class="quote-review-left">
                        <div class="quote-review-avatar"><span class="quote-review-letter">J</span>
                        </div>
                      </div>
                      <div class="quote-review-body">
                        <div class="quote-review-header">
                          <p class="quote-review-title">The Best Place in the City</p>
                          <ul class="quote-review-rating">
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                          </ul>
                        </div>
                        <div class="quote-review-meta"><span>By</span><span class="quote-review-user">John Miller</span><span>on</span>
                          <time datetime="2017-03-21">May 21, 2017</time>
                        </div>
                        <p class="quote-review-text">
                          <q>I wouldn't go anywhere else in San Francisco. I've been coming here for the last year and I've never felt better about paying good money for a haircut. The guys know what they are doing, give solid advice, and cut like pros. I wasn't used to this before but I’ll visit Barbershop again.</q>
                        </p>
                      </div>
                    </blockquote>
                    <blockquote class="quote-review">
                      <div class="quote-review-left">
                        <div class="quote-review-avatar"><img class="quote-review-image" src="images/testimonials-3-100x100.jpg" alt="" width="100" height="100">
                        </div>
                      </div>
                      <div class="quote-review-body">
                        <div class="quote-review-header">
                          <p class="quote-review-title">Professional Barber Service</p>
                          <ul class="quote-review-rating">
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                            <li class="icon icon-xs icon-primary fa fa-star"></li>
                          </ul>
                        </div>
                        <div class="quote-review-meta"><span>By</span><span class="quote-review-user">Anthony Smith</span><span>on</span>
                          <time datetime="2017-04-15">April 15, 2017</time>
                        </div>
                        <p class="quote-review-text">
                          <q>Polite, professional, charming and courteous team. The best haircut I have ever had! Simon was full of crack, was more than happy to suggest the best cut for me and he even offered a free beverage - what more could you want?! This barbershop is indeed my favorite one.</q>
                        </p>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </section>

@endsection