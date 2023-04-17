<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col">left column
                            <h5 class="card-title">REGISTRATION FORM</h5>
                            </div>
                             <form action="registration_insert_K.php" method="post">
                                <div class="mb-3">
                                   <label for="UserName" class="form-label">UserName</label>
                                  <input type="text" class="form-control" id="UserName" placeholder="enter User Name мелким шрифтом?" name="UserName">
                                 </div>
                                  <div class="mb-3">
                                 <label for="E_Mail" class="form-label">E_Mail</label>
                                 <input type="text" class="form-control" id="E_Mail" placeholder="enter E_Mail" name="E_Mail">
                                  </div>
                                  <div class="mb-3">
                                   <label for="Password" class="form-label">Password</label>
                                  <input type="text" class="form-control" id="Password" placeholder="enter Password"  name="Password">
                                  </div>
                       <!-- <div class="mb-3">
                            <label for="Password" class="form-label">created</label>
                            <input type="text" class="form-control" id="Password" placeholder="автоматически вносить дату???"  name="Password">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">updated</label>
                            <input type="text" class="form-control" id="Password" placeholder="автоматически регистрировать"  name="Password">
                        </div>-->
                                 <button type="submit" class="btn btn-primary"> Enter Submit</button><br><br><br>

                                 <div class="col">Right column
                                     <h5 class="card-title">AUTHORIZATION FORM</h5>
                                 </div>
                                 <form action="login_K.PHP" method="post">
                                     <div class="mb-3">
                                         <label for="UserName" class="form-label">UserName</label>
                                         <input type="text" class="form-control" id="UserName" placeholder="enter User Name мелким" name="UserName">
                                     </div>
                                     <div class="mb-3">
                                         <label for="Password" class="form-label">Password</label>
                                         <input type="text" class="form-control" id="Password" placeholder="enter Password"  name="Password">
                                     </div>
                                     <button type="submit" class="btn btn-primary"> Enter Submit</button>
                        </div>