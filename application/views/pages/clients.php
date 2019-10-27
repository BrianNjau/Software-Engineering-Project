<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">

  <title>Admin Dashboard   |  Clients</title>

  <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">Admin Dashboard</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>home">Dashboard</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>clients">Clients</a></li>
          <li><a href="<?php echo base_url(); ?>contracts">Contracts</a></li>
        </ul>

        <!---ul class="nav navbar-nav navbar-right">
          <li><a href="#">Logout</a></li>
        </ul--->

      </div>
    </div>
  </nav>

  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Clients <small>Manage Your Clients</small></h1>
        </div>

        <div class="col-md-2">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Manage
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a type="button" data-toggle="modal" data-target="#addClient">Add Client</a></li>
              <li><a type="button" data-toggle="modal" data-target="#addContract">Add Contract</a></li>
              <li><a href="#">Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </header>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>home">Dashboard</a></li>
        <li class="active">Clients</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="<?php echo base_url(); ?>home" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="clients" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Clients</a>
            <a href="<?php echo base_url(); ?>contracts" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Contracts</a>
            <a href="" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a>
          </div>

          <div class="well">
            <h4>Statistics</h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Clients</h3>
            </div>
            <div class="panel-body">

            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Latest Users</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date Registered</th>
                  <th></th>
                </tr>
                  <td>Client1</td>
                  <td>Client1@gmail.com</td>
                  <td>01/01/2019</td>
                  <td><a class="btn btn-default" href="<?php echo base_url(); ?>editclients">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!--MODALS-->

  <!--ADD CLIENT-->
  <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <form class="" action="#" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Client</h4>
          </div>

          <div class="modal-body">

            <div class="form-group">
              <label>Client Name</label>
              <input type="text" class="form-control" placeholder="Client Name">
            </div>

            <div class="form-group">
              <label>Client Email Address</label>
              <input type="text" class="form-control" placeholder="Client Name">
            </div>

            <div class="form-group">
              <label>Job Description</label>
              <input type="text" class="form-control" placeholder="Job Description">
            </div>

            <div class="form-group">
              <label>Date Added</label>
              <input type="date" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--ADD CONTRACT-->
  <div class="modal fade" id="addContract" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <form class="" action="#" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Contract</h4>
          </div>

          <div class="modal-body">

            <div class="form-group">
              <label>Contract Type</label>
              <input type="text" class="form-control" placeholder="Contract Type">
            </div>

            <div class="form-group">
              <label>Contract Description</label>
              <textarea name="Editor1" class="form-control" placeholder="Contract Description"></textarea>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Contract Signed
              </label>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    CKEDITOR.replace( 'Editor1' );
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="Assets/../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
