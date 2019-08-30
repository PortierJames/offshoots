@extends('layouts.app')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing Plans</h1>
      <p class="lead">Pricing plans for Global Look</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Professional</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$249 <small class="text-muted"><br >/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Single user power mode</li>
              <li>Unlimited searches</li>
              <li>Search result exporting</li>
              <li>Advanced search functions</li>
              <li>Email support</li>
            </ul>
            <br />
            <br />
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Start your free trial</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Department</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$375 <small class="text-muted">/ user <br >/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2-100 users included</li>
              <li>Unlimited searches</li>
              <li>Search result exporting</li>
              <li>Advanced search functions</li>
              <li><b>Email & phone support</li>
              <li><b>Batch file upload</b></li>
              <li><b>Exportable audit logs</b></li>

            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
      </div>
    </div>
@endsection('content')
