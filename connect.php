<?php
$connection  = mysqli_connect("localhost:3000","root","","myportfolio");
if(!$connection){
die("Error".mysqli_connect_error());

}
else{
    echo 'connection establish';
}
?>
<html>

<head>
    <title>
        Contact Details
    </title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="contact.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<link rel="stylesheet" href="contact.css">

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-4">
                        <a class="nav-link " href="porfolio.html">
                            <h3>Home</h3> 
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="project.html">
                            <h3>Projects</h3>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="aboutme.html">
                            <h3>About</h3>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="contact.html">
                            <h3>Contact</h3>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="resume.html">
                            <h3>CV</h3>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="sevices.html">
                            <h3>Services</h3>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link " href="ang7Tables.html"><h3>Angular</h3></a>
                      </li>
                </ul>
            </div>
    </div>
    </nav>
    <div class="wrapper">
        <h2>Contact us</h2>
        <div id="error_message">

        </div>
        <form action="" method="post"><!--return validate()try{
$db = new mysqli("localhost","root","","myportfolio" );
}
catch(Exception $exc){
echo $exc->getTraceAsString();
}-->
            <div class="input_field">
                <input type="text" placeholder="Name"  name="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Subject"  name="subject">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Phone"  name="phone">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email"  name="email">
            </div>
            <div class="input_field">
                <textarea placeholder="Message"  name="msg"></textarea>
            </div>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </div>
    
    <script>
        function sendemail() {
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "hardiksonalkar14@gmail.com",
                Password: "8BA816B4CE2D8D98BB2E4B0AAC39E7C23CAA",
                To: 'kedarsonalkar777@gmail.com',
                From: document.getElementById("email").value,
                Subject: "this is subject",
                Body: "Name: " + document.getElementById("name").value
                + "<br> Email: " +  document.getElementById("email").value
                + "<br> Phone no: " +  document.getElementById("phone").value
                + "<br> Message: " +  document.getElementById("message").value
            }).then(
                message => alert("Message sent successfully")
            );
        }
    </script>
</body>

</html>
