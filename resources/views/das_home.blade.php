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
            <div class="bg-red-400 p-8 rounded ">
                <h3 class="text-3xl">Positive</h3>        
                <h4 class="text-4xl"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_deposite">00</span></h4>
            </div>
            <div class="bg-orange-400 p-8 rounded">
                <h3 class="text-3xl">Average</h3>
                <h4 class="text-4xl"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_withdraw">00</span></h4>
            </div>
            <div class="bg-lime-400 p-8 rounded">
                <h3 class="text-3xl">Bad</h3>
                <h4 class="text-4xl"><i class="fa fa-bell-o" aria-hidden="true"></i> <span id="initial_balance">400</span></h4>
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
