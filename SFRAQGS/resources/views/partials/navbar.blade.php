<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
                </button>
                <div class="navbar-brand">   
                </div>
            </div>

            <form action="" class="navbar-form navbar-left">
                <div class="input-group">
                <div class="input-group-btn">
                    <button class="btn  search-btn-icon">
                    <i class="fa fa-search" aria-hidden="true"></i>                  
                    </button>
                </div>
                <input type="Search" placeholder="Search..." class="form-control-serch search-box" />   
                </div>     
            </form>

            <!-- Top Menu Items -->
            <div class="items">
            <ul class="nav navbar-right top-nav">        
                <li class="editpro">
                <i class="fasett fa-cog" aria-hidden="true" class="menu-button" id="menu-button"></i> 
                <h5 class="pull-left login-person-head"> {{Auth::user()->name}} </h5> 
                </li>
            </ul>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #3f0aee; border:1px solid #3f0aee;">
                <ul class="nav navbar-nav side-nav">
                <a href="#"><img class="logostyle" src="image/nstu_logo.png" alt="LOGO"></a>
                    <li>
                    <a class="active" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home" aria-hidden="true"></i>   <span style="color:white;">  Home </span></a>
                    </li>
                    <li>
                        <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-user-o" aria-hidden="true"></i>   <span style="color:white;">  Profile </span></a>
                    </li>
                    <li>
                        <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-calendar" aria-hidden="true"></i>   <span style="color:white;"> Events </span></a>
                    </li>
                    <li>
                        <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-envelope" aria-hidden="true"></i>  <span style="color:white;"> Messages </span></a>
                    </li>
                    <li>
                        <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-cogs" aria-hidden="true"></i>   <span style="color:white;"> Settings </span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
    </nav>