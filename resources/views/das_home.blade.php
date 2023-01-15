@extends('index')
  @section('style')
  @parent
  <link rel="stylesheet" href="css/home.css">
  @endsection
    @section('main')
    
        @parent
        <!-- Navigation -->
        @section('navbar')
        @parent
        @endsection

    @section('editable')
    <!-- edit here -->
    <div class="container-fluid">
    <div class="row text-center">
    <div class="col-md-12 dashhead">
  <!-- home   -->
  
  <!-- grid grid-cols-3 gap-4  -->

   <div class="home_top">
            <div class="first">
                <h3 class="text-3xl font-size">Positive</h3>        
                <h4 class="text-4xl font-size"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_deposite">00</span></h4>
            </div>
            <div class="second">
                <h3 class="text-3xl font-size">Average</h3>
                <h4 class="text-4xl font-size"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_withdraw">00</span></h4>
            </div>
            <div class="third">
                <h3 class="text-3xl font-size">Bad</h3>
                <h4 class="text-4xl font-size"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_balance">400</span></h4>
            </div>
            
    </div>
    <!-- end_home -->
    

    </div>
    </div>
    </div>
<!-- // -->

    @endsection
    
    @endsection
   
    @section('script')
    @parent
    @endsection
