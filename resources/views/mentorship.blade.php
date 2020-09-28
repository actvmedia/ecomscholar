@extends('layouts.app')

@section('title', 'Mentorship')


@section('content')
  <div class="page-hero mentorship-hero">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-lg-6">
                  <img src="img/career-progress.svg" class="responsive-img show-mobile">
                  <h1>Become <br>Your Own Boss</h1>
                  <h2>by Learning Directly From <br>Ecommerce Experts</h2>
                  <p>Take the first step towards building your dream life. EcomScholar allows you to work 1-on-1 with us and build the essential skills to create your own successful ecommerce business.</p>
                  <a href="/register" class="btn btn-def">Register Now</a>
              </div>
              <div class="col-md-4 col-lg-6 hide-mobile">
                  <img src="img/career-progress.svg" class="responsive-img">
              </div>
          </div>
      </div>
  </div>

  <div class="page-content">
      <div class="container">
          <div class="row v-middle">
              <div class="col-md-6">
                  <img src="img/navigator.svg" class="responsive-img sec-img">
              </div>
              <div class="col-md-6">
                  <ul class="questions">
                      <li>
                        <span class="question-heading">What is it?</span>
                        <div class="question-content">EcomScholar is a private 1-on-1 mentorship program that teaches you everything about the ecommerce business from start to finish. It is created to give you the best chances of success by working directly with us to prevent beginner mistakes.</div>
                      </li>
                      <li>
                        <span class="question-heading">How does it work?</span>
                        <div class="question-content">Upon joining, you will be invited to our private student groupchat where you will have a personal discussion channel created that only you and us have access to. You will also get access to additional videos and updated strategies curated by us.</div>
                      </li>
                      <li>
                        <span class="question-heading">Who is it for?</span>
                        <div class="question-content">This program is for anyone looking to become a successful business owner. Whether you are unemployed or have a full-time job, if you are willing to put in the work then you can succeed!</div>
                      </li>
                      <li>
                        <span class="question-heading">What do I need to get started?</span>
                        <div class="question-content">All you need is a laptop and internet connection. No previous experience or knowledge is required.</div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="versus-section">
        <div class="container">
          <div class="row v-middle">
              <div class="col-md-5">
                  <div class="content-box orange-box">
                      <h3>EcomScholar</h3>
                      <ul class="checklist">
                          <li>Work 1-on-1 directly with experts</li>
                          <li>Prevent beginner mistakes that waste time and money</li>
                          <li>Stay updated on the best working strategies</li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-2 text-center">
                  <span class="vs-text">Vs</span>
              </div>
              <div class="col-md-5">
                <div class="content-box">
                    <h3>Other Trainings</h3>
                    <ul class="checklist">
                        <li>Video training with no personal support from “expert”</li>
                        <li>Unrealistic promise of success</li>
                        <li>Teaching outdated information in a constantly changing industry</li>
                    </ul>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12 text-center">
                <a href="/register" class="btn btn-def">Register now</a>
              </div>
          </div>
        </div>
      </div>

      <div class="first-step-section">
          <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Take the <span class="orange">first step</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <img src="img/icon-book.svg" class="first-step-icon">
                        <p><strong>Join Now:</strong> We limit enrollment to only 5 students per month. Act now to secure your spot.</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="img/icon-rocket.svg" class="first-step-icon">
                        <p><strong>Take Action:</strong> Begin working directly with us and learn our proven strategies from start to finish.</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="img/icon-diamond.svg" class="first-step-icon">
                        <p><strong>Get Connected:</strong> Join our EcomScholar community where you can chat with other students, share resources, and participate in weekly live Q&As.</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="img/icon-coin.svg" class="first-step-icon">
                        <p>Discover the endless opportunities that ecommerce can open up for you.</p>
                    </div>
                </div>
          </div>
      </div>


      <div class="full-layout-section">
          <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Full Mentorship Layout</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <ul class="questions">
                          <li>
                            <span class="question-heading">Product Research</span>
                            <div class="question-content">We will provide our specific product criteria along with multiple strategies that we use for finding winning products. Throughout your research, we will review the products you find to ensure you are on the right path and pick a product that we deem is viable.</div>
                          </li>
                          <li>
                            <span class="question-heading">Store Creation</span>
                            <div class="question-content">We will walk you through the correct process of setting up your store which includes overall branding, product page optimization, apps for automating order fulfillment, etc.</div>
                          </li>
                          <li>
                            <span class="question-heading">Advertisement creation</span>
                            <div class="question-content">Learn how to create winning advertisements that effectively drive traffic to your store.</div>
                          </li>
                          <li>
                            <span class="question-heading">Product Launch</span>
                            <div class="question-content">We will launch your product using our proven, up-to-date Facebook ad strategies. These are the exact strategies that we currently use on our own stores.</div>
                          </li>
                          <li>
                            <span class="question-heading">Optimization</span>
                            <div class="question-content">We will show you exactly how to read the data from your advertisements and how to make changes based on that data. This is by far the most important skill in the ecommerce business because without it, you are simply wasting money.</div>
                          </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="questions">
                          <li>
                            <span class="question-heading">Scaling</span>
                            <div class="question-content">Once your store becomes profitable, we will show you our exact scaling strategies that will take your store to the next level.</div>
                          </li>
                          <li>
                            <span class="question-heading">Store Automation</span>
                            <div class="question-content">Most of your store’s operations can be automated through apps and by hiring virtual agents. This allows your store to run mostly autopilot and gives you more time to expand your store and/or launch new stores.</div>
                          </li>
                          <li>
                            <span class="question-heading">Extra “Pro” Strategies to Maximize Earnings</span>
                            <div class="question-content">Throughout our ecommerce experience, we have picked up several “tricks” and expert strategies that open up several opportunities such as: significant increase to your earnings, utilizing credit card rewards for free money, and many more.</div>
                          </li>
                          <li>
                            <span class="question-heading">Launching New Stores</span>
                            <div class="question-content">You will take all of the skills you learned and apply it towards future stores, allowing you to grow your income exponentially and build your ecommerce empire.</div>
                          </li>
                      </ul>
                    </div>
                </div>
          </div>
      </div>

      <div class="more-info white-bg">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2>What’s Stopping You?</h2>
                      <p>Whether you're a complete beginner or an experienced seller, EcomScholar has you covered.</p>
                      <a href="/register" class="btn btn-def">Register Now</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
