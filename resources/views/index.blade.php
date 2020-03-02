
@extends('layout/main')

@section('title', 'Home')

@section('container')

   
    </ul>
    <!-- End of Sidebar -->
    <div class="container">
    <div class="row">
    <div class="colum-10">
    <h1 class="mt-3">Login</h1>

    <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-5 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-5 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>

    </div>
    </div>
    </div>

    <!-- /.col-md-6 -->
</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

