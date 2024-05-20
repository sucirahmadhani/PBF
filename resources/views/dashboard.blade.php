@extends('layouts.admin')

@section('page-title')
  <h1>Dashboard</h1>
@endsection

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-hero">
                <div class="card-header">
                <div class="card-icon">
                    <i class="far fa-star"></i>
                </div>
                <h4>Welcome, Admin!</h4>
                <div class="card-description">Monday, 1 April 2024</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mb-5">
          <div class="card card-statistic-2" style="height: 155px;">
            <div class="card-icon shadow-success bg-success">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Inbox</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mb-5">
          <div class="card card-statistic-2" style="height: 155px;">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Outbox</h4>
              </div>
              <div class="card-body">
                15
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>Letter Submission Request</h4>
            </div>
            <div class="card-body">
              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">80</div>
                <div class="font-weight-bold mb-1">Bidang 1</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">67</div>
                <div class="font-weight-bold mb-1">Bidang 2</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">58</div>
                <div class="font-weight-bold mb-1">Bidang 3</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">35</div>
                <div class="font-weight-bold mb-1">Bidang 4</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">28</div>
                <div class="font-weight-bold mb-1">Bidang 5</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mb-5">
            <div class="card card-statistic-2" style="height: 155px;">
              <div class="card-icon shadow-warning bg-warning">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Disposisi</h4>
                </div>
                <div class="card-body">
                  10
                </div>
              </div>
            </div>
          </div>
            <div class="col-6 col-md-3 col-lg-2 mb-5">
            <div class="card card-statistic-2" style="height: 155px;">
              <div class="card-icon shadow-danger bg-danger">
                <i class="fas fa-circle"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>User</h4>
                </div>
                <div class="card-body">
                  5
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection
