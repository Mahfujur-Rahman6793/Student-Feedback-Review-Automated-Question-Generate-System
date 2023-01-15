@extends('index')
  @section('style')
  @parent

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
    <h1> Welcome To My ProFile</h1>
    </div>
    </div>
    </div>
<!-- // -->

    @endsection
    
    @endsection
   
    @section('script')
    @parent
    @endsection
