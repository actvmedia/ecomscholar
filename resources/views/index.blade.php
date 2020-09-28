<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Homepage')


@section('content')
<div class="page-hero">
  <div class="container">
      <div class="row v-middle">
          <div class="col-sm-12 col-md-6">
              <img src="img/visual-data.svg" class="responsive-img show-mobile">
              <h1>Become an<br class="hide-mobile"> <span class="orange">Ecommerce</span><br class="hide-mobile"> Expert</h1>
              <p>The first and only 1-on-1 ecommerce<br class="hide-mobile"> mentorship program.</p>
              <a href="/register" class="btn btn-def">Get Started</a>
          </div>
          <div class="col-sm-6 hide-mobile">
             <img src="img/visual-data.svg" class="responsive-img">
          </div>
      </div>
  </div>
</div>

<div class="page-content">
  <div class="content-heading">
    <div class="container">
      <div class="row v-middle">
        <div class="col-md-4">
            <img src="img/graduation.svg" class="responsive-img">
        </div>
        <div class="col-md-8">
          <h2>What is <span class="orange">EcomScholar?</span></h2>
          <p>EcomScholar transforms dedicated students into <strong>ecommerce experts</strong>. We personally teach you every aspect of this business from start to finish, ensuring that you get results.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="page-callouts">
    <div class="page-callout">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <img src="img/feature-1.svg" class="feature-image show-mobile">
              <h3>Direct Mentorship</h3>
              <p>Work 1-on-1 with us throughout the entire process as we ensure that you are doing everything properly from start to finish.</p>
            </div>
            <div class="col-md-6 hide-mobile">
              <img src="img/feature-1.svg" class="feature-image">
            </div>
        </div>
      </div>
    </div>
    <div class="page-callout">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <img src="img/make-it-rain.svg" class="feature-image">
            </div>
            <div class="col-md-6">
              <h3>Save Time & Money</h3>
              <p>Learning on your own can be expensive and time consuming. We’ve gone through the trial and error for you, which means you get to do it right from the beginning.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="page-callout target-callout">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                <img src="img/feature-3.svg" class="feature-image show-mobile">
                <h3>Proven Process</h3>
                <p>Set yourself up for success by using our proven strategies backed by over $1,000,000 in advertising spend.</p>
              </div>
              <div class="col-md-6 hide-mobile">
                <img src="img/feature-3.svg" class="feature-image">
              </div>
          </div>
      </div>
    </div>
    <div class="page-callout">
      <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="img/feature-4.svg" class="feature-image">
            </div>
              <div class="col-md-6">
                <h3>Collaborative Environment</h3>
                <p>Get access to our private student chat group where you can socialize and share resources with us and our students.</p>
              </div>
          </div>
       </div>
    </div>
  </div>

  <div class="counter-section">
      <div class="counter-text"><span style="color:#313334;">$</span><span class="counter" data-count="5000000"></span></div>
      <div class="counter-subtext">Annual sales earned by students.</div>
  </div>

  <div class="page-steps">
      <h2>What is <span class="orange">the process?</span></h2>
      <div class="container">
          <div class="row">
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle">1</span>
                  <h4>Product Research</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle ">2</span>
                  <h4>Store Creation</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle">3</span>
                  <h4>Advertisement Creation</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle ">4</span>
                  <h4>Product Launch</h4>
              </div>
          </div>
          <div class="row m-t-50">
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle ">5</span>
                  <h4>Optimization</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle">6</span>
                  <h4>Scaling</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle ">7</span>
                  <h4>Store Automation</h4>
              </div>
              <div class="col-6 col-sm-3 step-col">
                  <span class="step-circle">8</span>
                  <h4>Repeat!</h4>
              </div>
          </div>
          <div class="row m-t-50">
              <div class="col-12 text-center">
                  <a href="/mentorship" class="btn btn-def">Learn more</a>
              </div>
          </div>
      </div>
  </div>

  <div class="page-results ">
      <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2>What our students <span class="orange">are saying</span></h2>
            </div>
          </div>
          <div class="row m-t-50">
              <div class="col-sm-4">
                  <div class="results-tab active-tab" data-target="#content-1">
                    <span class="result-name">Alam</span>
                    <span class="result-earning">$750,000+ in earnings</span>
                  </div>

                  <div class="results-tab" data-target="#content-2">
                    <span class="result-name">Mario</span>
                    <span class="result-earning">$1,300,000+ in earnings</span>
                  </div>

                  <div class="results-tab" data-target="#content-3">
                    <span class="result-name">Alec</span>
                    <span class="result-earning">$3,300,000+ in earnings</span>
                  </div>
              </div>
              <div class="col-sm-8">
                <div class="results-content content-active" id="content-1">
                  <h4>This mentorship allowed me to quit my job!</h4>
                  <p>I joined EcomScholar in November of 2019. By the end of December of 2019, I generated over $120,000 in revenue. Alec and Chris walked me through every step and taught me the strategy that they used to generate over 7 figures. This mentorship is by far the best investment I have ever made. It allowed me to quit my job as a web developer and now I am making my yearly salary on a monthly basis. </p>
                </div>
                <div class="results-content" id="content-2">
                  <h4>This mentorship changed my life.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod lobortis feugiat. Donec eget erat pretium, vulputate risus vel, dictum turpis. Donec vulputate quam vel porta bibendum. Nam pellentesque posuere elit, at auctor quam efficitur a. In blandit est vel lectus eleifend, vitae elementum ipsum ultrices. Mauris posuere mauris sed finibus consequat. Integer rhoncus cursus massa, at dignissim arcu auctor condimentum.</p>
                </div>
                <div class="results-content" id="content-3">
                  <h4>I became financially free!</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod lobortis feugiat. Donec eget erat pretium, vulputate risus vel, dictum turpis. Donec vulputate quam vel porta bibendum. Nam pellentesque posuere elit, at auctor quam efficitur a. In blandit est vel lectus eleifend, vitae elementum ipsum ultrices. Mauris posuere mauris sed finibus consequat. Integer rhoncus cursus massa, at dignissim arcu auctor condimentum. Nullam pharetra justo et mauris eleifend eleifend. Vestibulum ac porttitor turpis. Phasellus consequat lorem sed nunc feugiat, et blandit est volutpat. Proin porttitor sem et tortor volutpat, et tempor magna laoreet. Sed ipsum leo, consectetur eu elit eget, ullamcorper volutpat justo. Cras egestas, dolor eu commodo facilisis, purus sem pellentesque nunc, ut pulvinar ligula libero at nunc. Nulla diam nulla, rutrum in tincidunt sed, aliquet eu lacus. Mauris imperdiet elit urna.</p>
                </div>
              </div>
          </div>
          <div class="row m-t-50">
              <div class="col-12 text-center">
                  <a href="/results" class="btn btn-def">View more reviews</a>
              </div>
          </div>
      </div>
  </div>

  <div class="more-info">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h2>Covering the Basics to Advanced</h2>
                  <p>Whether you're a complete beginner or an experienced seller, EcomScholar has you covered.</p>
                  <a href="/register" class="btn btn-def">Explore Our Training</a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
@endsection
