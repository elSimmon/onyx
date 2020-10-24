@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">ICT Training Section</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Registration for Training</li>
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
          <div class="card-header bg-purple">
            <h3 class="card-title">Course Overview</h3>
          </div>
          <!-- <div class="card-image">
            <img class="img img-fluid img-responsive" src="{{asset('img/workplace.png')}}" />
          </div> -->
          <div class="card-body">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Computer Appreciation</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Graphic Design</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Digital Marketing</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Video Editing and Animations</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Web Design(UX/UI)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Full Stack Web Development</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>


            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Mobile Application Development</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Java Programming</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Python Programming</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div><!-- /.card -->

      </div>

      <!-- /.col-md-6 -->


      <div class="col-lg-6">
        <div class="card card-warning">
              <div class="card-header bg-purple">
                <h3 class="card-title text-white">Please Fill the Registration Form to start a new course</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body text-purple">
                @if(Session::has('success'))
                <p role="alert" class="alert alert-success">Registration was successful, Congratulations!</p>
                @endif
                <form role="form" method="post" action="{{route('new_training')}}">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Training Center/Location</label>
                        <select class="form-control" name="center" style="border: 1px purple solid; color:purple" >
                          <option>Abuja</option>
                          <option>Adikpo</option>
                          <option>Gboko</option>
                          <option>Makurdi</option>
                          <option>Online Tutorials</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Contact or Home address</label>
                        <textarea style="border: 1px purple solid; color:purple" name="address" class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Desired Course</label>
                        <select name="course" class="form-control" style="border: 1px purple solid; color:purple" >
                          <option>Computer Appreciation</option>
                          <option>Graphic Design</option>
                          <option>Digital Marketing</option>
                          <option>Video Editing /Animations</option>
                          <option>Web Design (User Interface/User Experience) </option>
                          <option>FullStack Web Development</option>
                          <option>Mobile Application Development</option>
                          <option>Java Programming</option>
                          <option>Python Programming</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Highest qualification</label>
                        <select name="qualification" class="form-control" style="border: 1px purple solid; color:purple">
                          <option>SSCE</option>
                          <option>OND</option>
                          <option>HND</option>
                          <option>Undergraduate</option>
                          <option>Bachelors Degree</option>
                          <option>Masters Degree</option>
                          <option>Others</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker" disabled="disabled">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> -->

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">I accept the <a href="#">terms</a></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment_status" checked>
                          <label class="form-check-label">Pay Online</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary bg-purple btn-block text-white" value="Register" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.card card-warning -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
