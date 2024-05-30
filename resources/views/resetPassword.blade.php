<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/public/assets')}}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/public/assets')}}/css/styles.min.css" />
  <link rel="stylesheet" href="{{asset('/public/assets')}}/css/app.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    {{-- main content --}}
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('assets')}}/images/logos/fita-logo-01.svg" width="180" alt="">
                </a>
                <p class="text-center">FORGET PASSWORD</p>
                @if($errors->any())
                @foreach ($errors->all() as $error)
                  <p style="color: red;">{{ $error }}</p>                    
                  @endforeach
                @endif
                
                <form action="{{ route('resetPassword') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $user[0]['id'] }}">
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Nhập mật khẩu mới">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password Confirm</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Reset Password</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('/public/assets')}}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('/public/assets')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/public/assets')}}/js/sidebarmenu.js"></script>
  <script src="{{asset('/public/assets')}}/js/app.min.js"></script>
  <script src="{{asset('/public/assets')}}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{asset('/public/assets')}}/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{asset('/public/assets')}}/js/dashboard.js"></script>
</body>
</html>
