@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Welcome aboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Welcome</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-header bg-purple text-white">
            <h5 class="card-title">Recharge Cards, Data Loaders, TV Subscription, PHCN Power Subscriptions &amp; Mobile Banking Agents</h5>
          </div>
          <div class="card-image">
            <img class="img img-fluid img-responsive" src="{{asset('img/pos_machine.jpg')}}" />
          </div>
          <div class="card-body">


            <!-- <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p> -->

            <a href="#" class="btn btn-primary text-white btn-block bg-purple">Proceed &raquo;</a>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-header bg-purple">
            <h5 class="card-title">Onypay your trusted payment partner: get an Onyx savings account, save your money on our secure platform, get loans and profit accrued.</h5>
          </div>
          <div class="card-image">
            <img class="img img-fluid img-responsive" src="{{asset('img/money_savings.jpg')}}" alt="Money Savings" />
          </div>
          <div class="card-body">
            <h6 class="card-title text-purple">Your money is secured with us.</h6>

            <p class="card-text text-purple">Your Money is available for withdrawal anytime, anywhere and anyday, you can easily transfer to your account or withdraw cash from our offices or agents.</p>
            <a href="#" class="btn btn-primary bg-purple btn-block">Create new Account &raquo;</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->

      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-header bg-purple text-white">
            <h5 class="card-title">Acquire First class training in diverse ICT programmes, from beginner to advanced.</h5>
          </div>
          <div class="card-image">
            <img class="img img-fluid img-responsive" src="{{asset('img/computer_lab.jpg')}}" />
          </div>
          <div class="card-body">

            <!-- <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p> -->
            <a href="{{route('register_for_training')}}" class="btn btn-primary text-white btn-block bg-purple">Proceed &raquo;</a>
          </div>
        </div><!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h5 class="m-0">Featured</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Special title treatment</h6>

            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
