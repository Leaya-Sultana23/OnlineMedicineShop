
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend/includes/head')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Medicine <i>Shop</i><span>]</span></a></div>
    @include('backend/includes/leftpanel')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend/includes/toppanel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    {{-- @include('backend/includes/rightpanel') --}}
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      
      @yield('content')
      @include('backend/includes/footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    {{-- @include('backend/includes/footer') --}}


    @include('backend/includes/script')
  </body>
</html>
