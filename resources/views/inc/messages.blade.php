<div class="row justify-content-center">
  <div class="col-xs-8 col-sm-8 col-md-4">
      @if(count($errors) > 0)
      @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show">
          {{$error}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endforeach
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
          {{session('success')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
          {{session('error')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
  </div>
</div>