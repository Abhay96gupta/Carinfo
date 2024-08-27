<?php include "connection.php" ?>
<?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        $query = "INSERT INTO `spinnyusers`(fname, lname, email, mobile) VALUES ('$fname','$lname','$email','$mobile')";

        $data = mysqli_query($mysqli, $query);

        if($data){
            header("Location:https://spinny.com/sell-used-car/?utm_source=affilienet&utm_medium=affiliate&utm_campaign=98999&utm_term=sms_or_emailer&utm_content=bannername_or_CTA");
        }else{
            echo "Failed";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./style.css">
    <title>Vehical Coach</title>
</head>





<body>
    <div class="main">
        <div class="bgimg"></div>
        <div class="container hero-section">
            <div class="nav navbar top fixed">
                <a href="#" rel="noopener noreferrer">
                    <img src="./logo (3).jpg" alt="">
                </a>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="title">
                        <h1>Let's get you</h1>
                        <h2>on the road</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="btn-form">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            Request a quote
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" name="fname">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lname">
                            </div>
                            <div class="mb-3">
                                <label for="mobileNo" class="form-label">Mobile No</label>
                                <input type="tel" class="form-control" id="mobileNo" placeholder="Mobile No" name="mobile">
                            </div>
                            <div class="mb-3">
                                <label for="emailId" class="form-label">Email Id</label>
                                <input type="email" class="form-control" id="emailId" placeholder="Email Id" name="email">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                            <a href="./disclaimer.html">term&condition</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./gsap.js"></script>

</body>

