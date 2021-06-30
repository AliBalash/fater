<html lang="en">

<head>
  <meta charset="utf8mb4">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>آزمون فنی</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins//fontawesome-free//css//all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.min.js"></script>
  <script src="/assets/dist/jds/adminlte.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  <style>
    #hover:hover {
      background-color: #4CAF50;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding: 0px 16px;
      text-align: center;
    }

    #namelist {
      color: royalblue;
      font-size: 18px;
    }

    #namelist:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
      border-radius: 10%;
      background-color: olivedrab;
      color: white;
    }

    #logout:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
      border-radius: 10%;
      background-color: crimson;
      color: white;
    }

    #a {
      color: black;
    }

    #a:hover {
      color: white;

    }
  </style>
  <script type="text/javascript">
    /*
     *
     * Custom Scripts
     *
     */

    function sendChat() {
      /*
       * send chat by url
       */
      $.get(url);
    }


    // send button click event

    /*
     *
     * Custom Scripts
     *
     */
  </script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block nav-link" id="namelist">
          <?php echo $name; ?>
        </li>

        <li class="nav-item d-none d-sm-inline-block nav-link" id="logout">
          <a href="http://fater.local:2080/welcome" id="a">logout</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <head>
    <title>Ajax PHP MySQL Live Search Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5" style="max-width: 555px">
        <div class="card-header alert alert-warning text-center mb-3">
            <h2>PHP MySQL Live Search</h2>
        </div>
        <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off"
            placeholder="Search ...">
        <div id="search_result"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'http://fater.local:2080/welcome/search',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');

                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>

</body>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
            <li class="nav-item has-treeview menu-open">
              <a class="btn col-12 nav-link active" style="text-align: center;" href="http://fater.local:2080/welcome/retrnViweSearch">search</a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-11">



                <div class="card" dir="rtl" style="text-align: justify">

                </div>

                <div id="ajax-chats-loads-here" class="card card-prirary cardutline direct-chat direct-chat-primary">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                      <span data-toggle="tooltip" title="3 New Messages" class="badge bg-primary">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                      <!-- Message. Default to the left -->
                      <?php
                      foreach ($message as $data) {
                        if ($data["userID"] == 1){ ?>
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left"><?php echo $data["fullname"]; ?></span>
                              <span class="direct-chat-timestamp float-right">شنبه 5 فرودین 1400</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/assets/dist/img/user1-128x128.jpg" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              <?php if($data["comment"]==null){?>

                              <img style="width: 50px;height: 50px;" src="/uploads/<?php echo $data["image"];?>" alt="">
                              <?php } ?>
                              <?php echo $data["comment"]; ?>

                            </div>
                          </div>
                        <?php }elseif ($data["userID"] == 2){ ?>
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right"><?php echo $data["fullname"]; ?></span>
                              <span class="direct-chat-timestamp float-left">شنبه 5 فرودین 1400</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/assets/dist/img/user3-128x128.jpg" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              <?php if($data["comment"]==null){?>

                              <img style="width: 50px;height: 50px;" src="/uploads/<?php echo $data["image"];?>" alt="">
                              <?php } ?>
                              <?php echo $data["comment"]; ?>

                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                      <?php
                        };}?>
                      <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                      <ul class="contacts-list">
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="/assets/dist/img/user1-128x128.jpg">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date float-right">2/28/2015</small>
                              </span>
                              <span class="contacts-list-msg">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                      </ul>
                      <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <form action="http://fater.local:2080/welcome/storChat" enctype="multipart/form-data" method="post">
                      <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <input type="hidden" name="name" value="<?php echo "$name"; ?>">
                        <?php 	date_default_timezone_set('Asia/Tehran');?>
                        <input type="hidden" name="time" value="<?php echo date("Y-m-d H:i:s"); ?>">
                        <span class="input-group-append">
                          <input type="file" name="file">
                          <button name="submit" type="submit" class="btn btn-primary" id="hover">Send</button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-footer-->
                </div>

              </div>
              <!-- /.col-md-6 -->
              <div class="p-3">
                <h5 style="text-align: center;">Most comments</h5>
              </div>
              </aside>
              <!-- /.control-sidebar -->
              <table class="table table-hover col-8" style="margin-left: auto; margin-right: auto;">
                <thead>
                  <tr>
                    <th scope="col">FullName</th>
                    <th scope="col">date</th>
                  </tr>
                </thead>
                <tbody>
                <tbody>
                  <?php foreach ($max as $person) { ?>
                    <tr>
                    <td><?php echo $person["fullname"]; ?></td>
                    <td><?php echo $person["date"]; ?></td>
                    </tr>
                  <?php } ?>

                </tbody>
                </tbody>
              </table>
               

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <a href="welcome/index2">saveeeee</a>
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
</body>

</html>