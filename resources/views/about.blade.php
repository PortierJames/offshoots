@extends('layouts.app')

@section('content')
<div class="container">
  <!-- About -->
  <section>
    <div class="container">
      <h2>About Global Look</h2>
      <div class="row" id="contact">
        <div class="col-md-8 mb-6">
          <div class="card shadow border-0 h-100">
            <div class="card-body">
              <h5>Contact Us</h5>
              <p class="text-muted card-text">We are pleased to make your acquaintance. Kindly feel free to contact us at your convenience.</p>
              <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="us">
        <div class="col-md-8 mb-6">
          <div class="card shadow border-0 h-100">
            <div class="card-body">
              <h5>About Us</h5>
              <p class="text-muted card-text">Global Look is a company founded to aid organizations in the twilight struggle to mitigate regulatory compliance risk.</p>
              <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="privacy">
        <div class="col-md-8 mb-6">
          <div class="card shadow border-0 h-100">
            <div class="card-body">
              <h5>Privacy Policy</h5>
              <p class="text-muted card-text">We take your privacy concerns with the utmost seriousness and dedication of purpose.</p>
              <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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
