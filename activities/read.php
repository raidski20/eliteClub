<?php 
include("../path.php");
include(ROOT_PATH . '/app/controllers/users.php');
if(isset($_GET['p_id']))
{
    $usr_pub_det = selectOne('users', ['id' => $_GET['usr_id']]);
    $usr_pub_post = getUserPost($_GET['usr_id'], $_GET['p_id']);
}
else
{
    noInfo();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $usr_pub_post[0]['act_title'] ?> | Elite</title>
    <link rel="stylesheet" href="../assets/css/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.main.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg act">
        <div class="container">

            <a class="navbar-brand text-uppercase" href="../../index.html">el<span>i</span>te</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fal fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../index.php#about">about</a></li>
                    <li class="nav-item"> <a class="nav-link active" href="index.php">activities</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../index.php#team">team</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../index.php##contact">contact</a></li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="#">blog</a></li> -->

                    <?php include(ROOT_PATH . "/app/includes/login_nav.php") ?>

                </ul>
            </div>
        </div>
    </nav>

    <div class="read-wrapper">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-12 col-md-7 content rounded">
                    <h2 class="text-capitalize text-center"><?php echo $usr_pub_post[0]['act_title'] ?></h1>

                        <div class="author mt-3">
                            <img src="<?php echo BASE_URL . '/assets/img/' . $usr_pub_det['profile_pic'] ?>" alt=""></img>
                            <h3 class="text-capitalize"><?php echo $usr_pub_post[0]['username'] ?></h3>
                            <p class="text-capitalize"><?php echo date('F j, Y', strtotime($usr_pub_post[0]['created_at'])); ?></p>
                        </div>

                        <p class="my-4"><?php echo $usr_pub_post[0]['act_desc'] ?></p>

                        <img src="<?php echo BASE_URL . '/assets/img/' . $usr_pub_post[0]['act_img'] ?>" class="img-fluid shadow-lg mx-auto d-block img-thumbnail mb-4"
                            alt="<?php echo $usr_pub_post[0]['act_img'] ?>">
                </div>

            </div>

        </div>
    </div>

    <div class="footer" id="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 footer-links">
                    <div class="row">
                        <div class="col-xm-12 col-sm-6 col-md-7">
                            <div class="copyright mb-sm-3 mb-md-0">Copyright &copy; <strong><span>Elite</span></strong>. All Rights
                                Reserved</div>
                        </div>
                        <div class="col-xm-12 col-sm-6 col-md-5 social-links">
                            <a href="https://www.facebook.com/Mandalore21/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/raid_boulahdid/"><i class="fab fa-instagram ml-3"></i></a>
                            <a href="https://www.linkedin.com/in/raid-boulahdid-0752a0140/"><i class="fab fa-linkedin-in ml-3"></i></a>
                            <a href="https://github.com/raid21"><i class="fab fa-github ml-3"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.main.js"></script>
</body>

</html>