<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div id="header" class="col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <nav class="navbar navbar-default">
                <div  class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">LAB CODING</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">FAQ <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <form action="" class="form-inline navbar-form navbar-right">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Login Admin</button>
                    </form>
                </div>
            </nav>
            <div class="row">
                <div id="sidebar" class="col-sm-3">
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>

                <div id="content" class="col-sm-9">
                    <ul id="daftar-jawaban">
                    </ul>
                </div>
                <div class="col-sm-9">
                    <form method="POST" id="form_balas_pertanyaan">
                        <div class="col-sm-2">
                            <b>Post your answer :</b>
                            <br><br><br>
                            <b>Input your name :</b>
                        </div>
                        <div class="col-sm-7">
                            <div><textarea class="form-control" name="pertanyaan" rows="2"></textarea></div>
                            <div><input type="text" name="nama" class="form-control"></div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Kirim">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS-->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/mhs.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
