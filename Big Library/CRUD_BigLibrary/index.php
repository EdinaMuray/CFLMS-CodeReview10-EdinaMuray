<?php 
        require_once 'actions/db_connect.php'; 
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>

    <style type ="text/css">
        .card-body{
            line-height: 0.5rem;
        }
        .manageMedia {
            width : 90%;
            margin: auto;
        }
        #card-footer {
            background-color: #ffc107!important;
            border-top: 0;
        }
        
        .card-img{
            height: 500px;
        }
        footer{
            color: white;
        }
        .footer-pad{
            padding: 1rem;
        }
    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

        <!-- Navbar -->
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
            <a class='navbar-brand' href='#'>Big Library</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'        
                aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='index.php'>Home<span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href="create.php">Create Media</a>        
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href="update.php">Update Media</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href="delete.php">Delete Media</a>
                    </li>
                </ul>
            </div>
        </nav>


    <!-- Header -->
    <header>
        <div class="jumbotron main_header" >
            <h1 class="display-4">Big Library for dutie</h1><br>
            <p class="lead">If you want to have a good time in perfect society</p>
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class ="manageMedia"><br>

    <div class="container row row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-1 mx-4 d-flex justify-content-around">
        <div class="text-center"><h1>Big Library Medias List</h1><br><br></div>

        <!-- PHP Script -->
        <?php

        $sql = "SELECT * FROM media";
        $result_all = $connect->query($sql);

        if ($result_all->num_rows > 0) {

            while($row = $result_all->fetch_assoc()) {
                
            echo"
                <div class='card mb-3'>
                    <div class='row no-gutters bg-warning border-light text-info text-center teaser hovereffect'>
                        <div class='col-md-4'>
                            <img src=' ".$row['Cover']." ' class='card-img' alt='..' />
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body'>
                                <h2 class='card-title text-left'>Title: ".$row['Title']."</h2>
                                <h3 class='card-text text-left'>Author: ".$row['FirstName']." ".$row["LastName"]."</h3>
                                <br><br>
                                <h4 class='card-text text-left'>Description: ".$row['Short_Description']."</h4>
                                <h5 class='card-text text-left'>";
                                    if ($row['Status'] == "available") {
                                        echo "Status: <span style='color:seagreen'>".$row['Status']."</span>";
                                    } else {
                                        echo "Status: <span style='color:crimson'>".$row['Status']."</span>";
                                    }
                                echo"</h5>
                                <br>
                                <h5 class='card-text text-left'>Type: ".$row['Type'].", ".$row['ISBN']."</h5>
                                <br>
                                <h6 class='card-text text-left'>Publisher: ".$row['Publisher'].", ".$row['Size']."</h6>
                                <h6 class='card-text text-left'>Publisher address: ".$row['Adress']."</h6>
                                <h6 class='card-text text-left'>Published on the ".$row['Publish_Date']."</h6>
                                <br><br>
                                <p class='card-text text-left text-muted'><b>Media ID: ".$row['ID_Media']."</b></p>
                            </div>
                            <div class='card-footer text-center' id='card-footer'>
                                <a href='singlemedia.php?id=".$row['ID_Media']."'>
                                    <button type='button' class='btn btn-info'>Show media</button></a>
                                <a href='create.php?id=".$row['ID_Media']."'>
                                    <button type='button' class='btn btn-info'>Create media</button></a>
                                <a href='update.php?id=".$row['ID_Media']."'>
                                    <button type='button' class='btn btn-info'>Update media</button></a>
                                <a href='delete.php?id=".$row['ID_Media']."'>
                                    <button type='button' class='btn btn-info'>Delete media</button></a>
                            </div>
                        </div>
                    </div>
                </div>";
                }
            } 
        else { 
            echo  "<h3><center>No Data avaliable</center></h3>"; 
        }?>
            <br>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mainfooter footer footer-expand-lg footer-dark bg-dark" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>About Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">News and Updates</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 footer-pad">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle list-unstyled">
                            <li>
                                <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i>LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2020 - Edina Muray. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JQuery - Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
        crossorigin="anonymous"></script>

</body>
</html>