<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/logins/login-2/assets/css/login-2.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
        
      <div class="col-8 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h4>Login your account</h4>
              </div>
            </div>
          </div>
          <form action="{{route('login')}}" method="POST">
            @csrf
           
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="" required>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                  <label class="form-check-label text-secondary" for="remember_me">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Sign in</button>
                </div>
              </div>
          
            </div>
          </form>
      
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>