{{-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.dark.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('register')}}">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
    </div>
    <!-- phone -->
    <div class="mt-4">
        <x-label for="phone" :value="__('Number')" />
        <x-input id="phone" class="form-control" type="text" name="phone" />
    </div>
    <!-- role  -->
    <div class="mt-4">
        <x-label for="role" :value="__('Role')" />
        <select name="role" id="" class="form-control" value="old('email')">
            <option value="">==Select Role==</option>
            <option value="1">Admin</option>
            <option value="2">Vendor</option>
            <option value="3">User</option>
        </select>

        
    </div>
    <!-- phone -->
    <div class="mt-4">
        <x-label for="image" :value="__('')" />
        <x-input id="image" class="form-control" type="file" name="image" />
    </div>
    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="form-control"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-button class="ml-4">
            {{ __('Register') }}
        </x-button>
    </div>
</form>

        <div class="mg-t-40 tx-center">Not yet a member? <a href="{{route('login')}}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Online Medicine Shop</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Sign <span class="tx-info">in</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">sign up here</div>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
        <input name="name" type="text" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input name="email" type="email" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <input name="phone" type="text" class="form-control" placeholder="Enter your Phone">
          </div><!-- form-group -->
        <div class="mt-4">
            <select name="role" id="role" class="form-control mb-3">
                <option value="3">User</option>
            </select>
        </div>
        <div class="form-group">
          <input name="password" id="password" type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <div class="form-group">
        <input  name="password_confirmation" id="password_confirmation" type="password" class="form-control" placeholder="Confirm password">
        </div><!-- form-group -->
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>
        <div class="mg-t-40 tx-center">Not yet a member? <a href="{{ route('login')}}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>

