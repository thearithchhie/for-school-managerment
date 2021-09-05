@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
  <div class="container-full">
    <section class="content">
      <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Department</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form method="post" action="{{ route('departments.store') }}">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h5>Name<span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text" name="name" class="form-control" required="">
                          </div>
                        </div>
                      </div><!-- End Col Md-6 -->
                    </div> <!-- End Row -->
                    <h5>Descrption</h5>
                    <div class="controls">
                      <textarea name="description" id="description" class="form-control"
                        placeholder="descrption" aria-invalid="false"></textarea>
                      <div class="help-block"></div>
                    </div>
                    <div class="text-xs-right mt-3">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                    </div>
              </form>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
  </div>
</div>
@endsection