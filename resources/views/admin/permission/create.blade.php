@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
  <div class="container-full">
    <section class="content">
      <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Permission</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form method="post" action="{{ route('permissions.create') }}">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="controls">
                          <select name="role_id" id="select" required="" class="form-control" aria-invalid="false">
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="help-block"></div>
                      </div>
                    </div> <!-- End Row -->
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box">
                          <div class="box-header with-border">
                            <h4 class="box-title">Responsive Hover Table</h4>
                            <div class="box-controls pull-right">
                              <div class="lookup lookup-circle lookup-right">
                                <input type="text" name="s">
                              </div>
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body no-padding">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <tbody>
                                  <th>Permission</th>
                                  <th>can-add</th>
                                  <th>cad-edit</th>
                                  <th>can-delete</th>
                                  <th>can-view</th>
                                  <th>can-list</th>
                                  </tr>

                                  <tr>
                                    <td>1</td>
                                  </tr>

                                </tbody>
                              </table>
                               <div class="text-xs-left mt-3 float-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                    </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </section>
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

