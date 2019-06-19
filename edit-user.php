<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter Crud By Crud Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(); ?>/manage-user">Manage User</a></li>
        <li><a href="<?php echo site_url(); ?>/add-user">Add User</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update User</h2>  
<form role="form" method="post" action="<?php echo site_url()?>/edit-user-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $user[0]->id ?>"   name="user_id">


      <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $user[0]->name ?>" class="form-control" id="name" name="name">
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" value="<?php echo $user[0]->email ?>" class="form-control" id="email" name="email">
  </div>
    <div class="form-group">
    <label for="profile_pic">Profile_pic:</label>
    <input type="file" class="btn btn-primary" id="profile_pic" name="profile_pic">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>