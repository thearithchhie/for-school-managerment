@extends('admin.admin_master')
@section('admin')

<form method="POST" action="{{ route('roles.create') }}">
  @csrf
  <div class="content-wrapper">
    <div class="container-full">
      <label for="">Role</label>
      <input type="text" class="form-control" name="name" />
      <ol>
        @foreach ($permissions as $key => $items)
        <div>{{ $key }}</div>

        @foreach ($items as $item)
        <fieldset>
          <input type="checkbox" name="permission[]" class="form-control" id="{{ $item->id }}" value="{{ $item->id  }}" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" aria-invalid="false">
          <label for="{{  $item->id }}">{{ $item->action->name }}</label>
        </fieldset>
        @endforeach

        @endforeach
      </ol>
    </div>
    <div class="text-xs-right">
      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
    </div>
  </div>

</form>


@endsection
