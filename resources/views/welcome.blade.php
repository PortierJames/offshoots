@extends('layouts.app')

@section('content')
<div class="container">
  <!-- Hero Section-->
  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
          <h1>Global Look</h1>
          <p class="lead">Protect your company from financial crime, reduce regulatory compliance risk, and improve investigator efficiency with our <b>KYC</b> and <b>due diligence</b> screening.</p>
          <p><a href="landing" class="btn btn-primary shadow mr-2">Discover More</a></p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2"><img src="img/main.png" alt="" class="img-fluid"></div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section>
    <div class="container">
      <h2>Features</h2>
      <p class="text-muted mb-5">Global Look is a KYC and due diligence screening app satisfying your regulatory compliance needs.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/global.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Global Reach</a></h5>
              <p class="text-muted card-text">Search profiles from 100+ countries around the globe.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/timely.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Up-to-Date Intelligence</a></h5>
              <p class="text-muted card-text">Regular updates keep the information fresh and timely for use.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/compliance.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Regulatory Compliance</a></h5>
              <p class="text-muted card-text">Satisfy KYC and due diligence requirements with our screening solution.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/advanced.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Advanced Search</a></h5>
              <p class="text-muted card-text">Search by country, watchlist, or relations with advanced search.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/export.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Export Profiles</a></h5>
              <p class="text-muted card-text">Export entity profiles for reference and as evidence.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/custom.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Customize Options</a></h5>
              <p class="text-muted card-text">Tailor your screening search with your own options.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio-->
  <section class="bg-light">
    <div class="container">
      <h2>Use Cases</h2>
      <p class="lead text-muted mb-5">Global Look integrates easily into your existing processes.</p>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/kyc.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">KYC Screening</a></h5>
              <p class="text-muted card-text">Easy, effortless screening to Know Your Client better.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/diligence.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Due Diligence</a></h5>
              <p class="text-muted card-text">Fully sourced and vetted information for your due diligence requirements.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/sanctioned.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Sanctioned Entities</a></h5>
              <p class="text-muted card-text">Discover sanctioned, high-risk, and watchlisted entities.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/thirdparty.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Third-Party Screening</a></h5>
              <p class="text-muted card-text">Find out more about your counterparties and third-parties.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/PEP.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Politically Exposed Persons</a></h5>
              <p class="text-muted card-text">Identify PEPs and deemed PEPs quickly for regulatory requirements.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow border-0 h-100"><a href="#"><img src="img/reputation.png" alt="" class="card-img-top"></a>
            <div class="card-body">
              <h5> <a href="#" class="text-dark">Reputational Risk</a></h5>
              <p class="text-muted card-text">Find out who you're dealing with, before it's a problem.</p>
              <p class="card-text"><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <h5>Global Look</h5>
          <ul class="contact-info list-unstyled">
            <li><a href="mailto:sales@fortitudenorth.ca" class="text-dark">sales@fortitudenorth.ca</a></li>
            <li><p class="text-dark">1 King Street West, Toronto, ON</p></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>Product</h5>
          <ul class="links list-unstyled">
            <li> <a href="landing#kyc" class="text-muted">KYC Screening</a></li>
            <li> <a href="landing#pep" class="text-muted">PEP Search</a></li>
            <li> <a href="landing#diligence" class="text-muted">Due Diligence</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>About Us</h5>
          <ul class="links list-unstyled">
            <li> <a href="about#contact" class="text-muted">Contact</a></li>
            <li> <a href="about#us" class="text-muted">About Us</a></li>
            <li> <a href="about#privacy" class="text-muted">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-center text-md-left">
          <p class="mb-md-0">&copy; 2019 Fortitude North. All rights reserved.                        </p>
        </div>
        <div class="col-md-5 text-center text-md-right">
          <p class="mb-0">Alea Iacta Est</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
