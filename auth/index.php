<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>"ВАЛАВИНО" - Најава</title>

    <!-- BOOTSTRAP STYLES -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- FONTAWESOME STYLES -->
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet" />

    <!-- CUSTOM STYLES -->
    <link href="../bootstrap/css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS -->
    <link href='../bootstrap/css/google-fonts.css' rel='stylesheet' type='text/css' />

</head>

<body style="background-color: #edecec;">

    <div class="container">

        <div class="row text-center">
            <div class="col-md-12">
                <br /><br /><br />
                <img src="../bootstrap/img/MovinoOfficialLogo.png" />
                <br /><br /><br />
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <strong> Внесете ги вашите детали </strong>
                    </div>
                    <div class="panel-body">


                        <form role="form" method="POST" action="../login.php">
                            <?php if (isset($_GET['error'])) { ?>
                            <p class="error">
                                <?php echo $_GET['error']; ?>
                            </p>
                            <?php } ?>
                            <input type="hidden" name="_token" value="jB6KivDjd2QG3uVNY7ggQv8XMWUNleOxMF9MEI7F">

                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" name="uname" class="form-control" placeholder="Корисничко име" value="" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password"name="password" class="form-control" placeholder="Лозинка" />
                            </div>
                            <div class="form-group text-center">
                                <label class="checkbox-inline">
                                <input type="checkbox" name="remember" /> Запомни ме
                            </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Најава</button>
                            </div>

                            <hr />
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <script src="../bootstrap/js/jquery-1.10.2.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.metisMenu.js"></script>
    <script src="../bootstrap/js/custom.js"></script>

</body>

</html>