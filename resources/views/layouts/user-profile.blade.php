<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="user-profile.css">
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DAW StockBet</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../login/login.html">Logout</a>
        </li>
      </ul>
    </nav>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="../dashboard/dashboard.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Profile <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Bets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Classifications
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Charts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Stocks
                </a>
              </li>
            </ul>
    
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <a class="nav-link active" href="user-profile.html" style=color:black><span>User_example 100 points</span></a>
            </h6>
          </div>
        </nav>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="container bootstrap snippet">
            <div class="row" style="margin-top: 40px;">
              <div class="col-sm-10" style=color:steelblue><h1>User Profile</h1></div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-sm-3"><!--left col-->                 
        
              <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Nuno Realista</h6>
                <div class="file btn btn-sm btn-primary" id="file-upload" style= background-color:steelblue>
                  Upload photo
                  <input type="file" name="file" id="file-upload-input"/>
                </div>
              </div></hr><br>                  
                  
                  <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Points</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Wins</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Loses</strong></span> 37</li>
                  </ul>                   
                </div><!--/col-3-->
              <div class="col-sm-9" style="padding-left: 30px;">       
                      
                  <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                          <form class="form" action="##" method="post" id="registrationForm">
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="first_name"><h4>First name</h4></label>
                                      <p>Nuno Alexandre</p>
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <p>Realista Ferreira</p>
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="phone"><h4>Mobile Phone</h4></label>
                                      <p>+351 930 111 222</p>
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Email</h4></label>
                                      <p>example@gmail.com</p>
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Location</h4></label>
                                      <p>Lisbon, Portugal</p>
                                  </div>
                              </div>
                        </form>
                      
                      <hr>
                      
                     </div><!--/tab-pane-->
                     <div class="tab-pane" id="messages">
                       
                       <h2></h2>
                       
                       <hr>
                          <form class="form" action="##" method="post" id="registrationForm">
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="first_name"><h4>First name</h4></label>
                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="phone"><h4>Phone</h4></label>
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  <div class="col-xs-6">
                                     <label for="mobile"><h4>Mobile</h4></label>
                                      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Email</h4></label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Location</h4></label>
                                      <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="password"><h4>Password</h4></label>
                                      <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                      <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                  </div>
                              </div>
                              <div class="form-group">
                                   <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                         <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                              </div>
                        </form>
                       
                     </div><!--/tab-pane-->
                     <div class="tab-pane" id="settings">
                        
                         
                          <hr>
                          <form class="form" action="##" method="post" id="registrationForm">
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="first_name"><h4>First name</h4></label>
                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="phone"><h4>Phone</h4></label>
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  <div class="col-xs-6">
                                     <label for="mobile"><h4>Mobile</h4></label>
                                      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Email</h4></label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Location</h4></label>
                                      <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="password"><h4>Password</h4></label>
                                      <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                      <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                  </div>
                              </div>
                              <div class="form-group">
                                   <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                         <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                    </div>
                              </div>
                        </form>
                      </div>
                       
                      </div><!--/tab-pane-->
                  </div><!--/tab-content-->
        
                </div><!--/col-9-->
            </div><!--/row-->
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>       
    </body>
</html>