<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'About us')


@section('content')
<div class="about-hero">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
            <h1>Meet your <span class="orange">mentors</span></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="about-section">
    <div class="about-section-2">
      <div class="container">
          <div class="row">
              <div class="col-md-6 profile-div">
                <img src="img/alec-headshot.jpg" class="headshot-img">
                <h2 class="text-center">Alec Corum</h2>
                <p>Alec is a self-taught entrepreneur and digital marketer with almost 3 years of experience in the ecommerce industry. After noticing the large number of “experts” that sell outdated information and show fake results in their courses, he started a private mentorship program in mid-2019. Given the success of his original students, he decided to expand the mentorship by bringing in his business partner Chris. Together, they have grown the mentorship program to what is now known as EcomScholar.</p>
              </div>
              <div class="col-md-6">
                <img src="img/ccs-headshot.jpg" class="headshot-img">
                <h2 class="text-center">Chris Spencer</h2>
                <p>Chris graduated from The University of South Carolina with a bachelor’s degree in Finance, landing him in the heart of Corporate America working a 9-5. However, he knew this was not the life he wanted so; he began studying in ecommerce. Within 6 months he was able to grow a 7-figure ecommerce brand. Now he is a full-time marketer who runs multiple successful ecommerce companies. With this experience, Chris is indisputably capable of turning any venture into a success. Chris felt, in partnering with Alec to found EcomScholar and bring a revolution to the ecommerce industry is the best way to give every dedicated student the tools to become a professional.</p>
              </div>
          </div>
      </div>
    </div>
    <div class="about-section-3">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                    <h2>We drive <span class="orange">results</span></h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <img src="img/graph-white.png" class="about-icon">
                  <h3 class="text-center">Proven Process</h3>
                  <p>We teach you the exact same strategies that we are using on a daily basis with our stores; the same strategies that have given our students a collective $5M+ in annual revenue.</p>
              </div>
              <div class="col-md-6">
                  <img src="img/calendar-white.png" class="about-icon">
                  <h3 class="text-center">Constant Updates</h3>
                  <p>The ecommerce business is constantly changing and in order to stay ahead, you need to be able to adapt fast. We are actively looking for and testing new strategies and then share our findings with our students, keeping you ahead of the game.</p>
              </div>
              <div class="col-md-6">
                  <img src="img/meter-white.png" class="about-icon">
                  <h3 class="text-center">Prevent Mistakes</h3>
                  <p>The main goal of our mentorship is to provide a way to skip the “beginner” stage where you waste time on money learning from the ground up. We will ensure you are doing everything properly from the start.</p>
              </div>
              <div class="col-md-6">
                  <img src="img/message-white.png" class="about-icon">
                  <h3 class="text-center">Instant Networking</h3>
                  <p>Working with us means you get instant access to our network and all the benefits that come with it. Suppliers, order fulfillment, marketing agencies, processors, and many more.</p>
              </div>
          </div>
      </div>
    </div>
    <div class="about-section-4">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                    <h2>Still have <span class="orange">questions?</span></h2>
                    <a href="#" class="btn btn-contact">Get in touch with us</a>
              </div>
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
                        <a href="#" class="btn btn-def">Explore Our Training</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
