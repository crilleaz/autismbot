<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<?php include_once("cfg.php"); ?>
        <title><?php echo $site_title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-2 bg-light border-bottom mb-4">
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-md-8">
                <br>
                <!-- Login -->
                <?php
                session_start();
                if(isset($_POST['password']))
                {
                    $username = $_POST['password'];
                    echo 'Username: ' . $_POST['password'];
                    extract($_POST);
                    include_once('cfg.php');
                    $sql=mysqli_query($con,"SELECT * FROM users where username='{$username}'");
                    $row  = mysqli_fetch_array($sql);
                    if(is_array($row))
                    {
                        $_SESSION["id"] = $row['id'];
						$_SESSION["username"] = $row['username'];
						$con->query("UPDATE users SET loggedin = 1 WHERE username = '{$username}'");
                        header("Location: index.php"); 
                    }
                    else
                    {
                        header("Location: login.php?status=notfound");
                    }
                }
                ?>
                
                <!-- echo $_SESSION["namn"] . '<br>';
                echo $_SESSION["id"] . '<br>';
                echo $_SESSION["epost"] . '<br>';
                echo $_SESSION["namn"] . '<br>';
                echo $_SESSION["balans"] . '<br>';
                echo $_SESSION["ansvarskod"] . '<br>';
                echo $_SESSION["fakturareferens"] . '<br>';
                echo $_SESSION["verksamhetsprocess"] . '<br>';
                echo $_SESSION["projekt"] . '<br>';
                echo $_SESSION["objekt"] . '<br>';
                echo $_SESSION["frikod"] . '<br>';
                echo $_SESSION["datum"] . '<br>'; -->

                <!-- Blog Post -->
                <div class="card mb-4">
                    <div class="card-body">
                    <h2 class="card-title">Logga in</h2>
                    <p class="card-text">
                    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                                if (strpos($url,'status=success') !== false) {
                                    echo '&nbsp&nbsp<font color="green">Användarkonto skapat.</font>';
                                }else if (strpos($url,'status=notfound') !== false) {
                                  echo '&nbsp&nbsp<font color="red">Inget konto hittades.</font>';
                                }
                                ?>
                    <body class="my-login-page">
                    <section class="h-100">
                        <div class="container h-100">
                            <div class="row justify-content-md-center h-100">
                                <div class="card-wrapper">

                                    <div class="card fat">
                                        <div class="card-body">
                                            <form action="login.php" method="post">
                                                <div class="form-group">
                                                    <label for="password">Användarnamn: </label>
                                                    <input id="password" type="text" class="form-login" name="password" autofocus required data-eye>
                                                </div>
                                                <div class="form-group">
                                                <br>
                                                </div>
                                                <div class="form-group m-0">
                                                    <button type="submit" class="btn btn-primary btn-block">Logga in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </p>
                    </div>
                    <div class="card-footer text-muted">
                    <br><!-- lathet -->
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- Footer-->
        <!-- <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		<script>
		console.log("XD");
		</script>
    </body>
</html>
