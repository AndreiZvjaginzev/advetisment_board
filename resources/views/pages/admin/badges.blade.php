@extends('templates.'.$template)

@section('content')
    <!--start content-->
    <main class="page-content">


<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Component</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Badges</li>
      </ol>
    </nav>
  </div>
  <div class="ms-auto">
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Settings</button>
      <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
        <a class="dropdown-item" href="javascript:;">Another action</a>
        <a class="dropdown-item" href="javascript:;">Something else here</a>
        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
      </div>
    </div>
  </div>
</div>
<!--end breadcrumb-->

<div class="row">
  <div class="col col-lg-9 mx-auto">
  <div class="card radius-10">
    <div class="card-body">
      <h5 class="card-title">Basic Badge</h5>
      <hr>	<span class="badge bg-primary">Primary</span>
      <span class="badge bg-secondary">Secondary</span>
      <span class="badge bg-success">Success</span>
      <span class="badge bg-danger">Danger</span>
      <span class="badge bg-warning text-dark">Warning</span>
      <span class="badge bg-info text-dark">Info</span>
      <span class="badge bg-light text-dark">Light</span>
      <span class="badge bg-dark">Dark</span>
      <hr>	<span class="badge rounded-pill bg-primary">Primary</span>
      <span class="badge rounded-pill bg-secondary">Secondary</span>
      <span class="badge rounded-pill bg-success">Success</span>
      <span class="badge rounded-pill bg-danger">Danger</span>
      <span class="badge rounded-pill bg-warning text-dark">Warning</span>
      <span class="badge rounded-pill bg-info text-dark">Info</span>
      <span class="badge rounded-pill bg-light text-dark">Light</span>
      <span class="badge rounded-pill bg-dark">Dark</span>
    </div>
  </div>

<div class="card radius-10">
  <div class="card-body">
    <h5 class="card-title">Buttons Badge</h5>
    <hr>
    <div class="row row-cols-auto g-3">
      <div class="col">
        <button type="button" class="btn btn-primary">Notifications <span class="badge bg-dark">4</span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger">Notifications <span class="badge bg-dark">4</span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-success">Notifications <span class="badge bg-dark">4</span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-warning">Notifications <span class="badge bg-dark">4</span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-info">Notifications <span class="badge bg-dark">4</span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-dark">Notifications <span class="badge bg-secondary">4</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="card radius-10">
  <div class="card-body">
    <h5 class="card-title">Badge Usage</h5>
    <hr>
    <div class="row row-cols-auto gy-4">
      <div class="col">
        <button type="button" class="btn btn-dark position-relative me-lg-5"> <i class="bi bi-chat-left-text-fill"></i> Comments <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">+18 <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary position-relative me-lg-5"> <i class="bi bi-hand-thumbs-up-fill"></i> Likes <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+22 <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-outline-success position-relative me-lg-5"> <i class="bi bi-bell-fill"></i> Notifications <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">New <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger position-relative me-lg-5"><i class="bi bi-bag-check-fill"></i> Events <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">4 <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-warning position-relative me-lg-5"><i class="bi bi-bookmark-check-fill"></i> Projects <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">8k <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-info position-relative me-lg-5"> <i class="bi bi-collection-play-fill"></i> Teams <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">24 <span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary position-relative"> <i class="bi bi-house-door-fill"></i> Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-secondary position-relative"> <i class="bi bi-person-circle"></i> Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-secondary position-relative"><i class="bi bi-award-fill"></i><span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
        </button>
      </div>
      <div class="col">
        <div class="icon-badge position-relative bg-dark me-lg-5"> <i class="bi bi-calendar-day-fill text-white"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">+18 <span class="visually-hidden">unread messages</span></span>
        </div>
      </div>
      <div class="col">
        <div class="icon-badge position-relative bg-primary me-lg-5"> <i class="bi bi-cloud-check-fill text-white"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">+22 <span class="visually-hidden">unread messages</span></span>
        </div>
      </div>
    </div>
    <!--end row-->
  </div>
</div>

</div>
</div>
</main>
<!--end page main-->
@endsection