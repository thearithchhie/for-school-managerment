@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
  <div class="container-full">
    {{-- <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="page-title">Data Tables</h3>
          <div class="d-inline-block align-items-center">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item" aria-current="page">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Department List</h3>
              <a href="{{ route('departments.create') }}" class="btn btn-success btn-rounded mb-5 float-right">Add Department</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departments as $key => $department)
                    <tr>
                      <td width="1%">{{ $key + 1 }}</td>
                      <td>{{ $department->name }}</td>
                      <td>{{ $department->description }}</td>
                      <td>
                        <div style="position: relative; left: 22%;">
                          <a href="{{ route('departments.edit', $department->id) }}" class="mr-2"><i
                              class="fa fa-edit text-success font-size-13"></i></a>
                            <a href="{{ route('departments.delete', $department->id) }}" id="delete"><i
                              class="fa fa-trash-o text-danger font-size-13"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
  </div>
  <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
</div>

@endsection