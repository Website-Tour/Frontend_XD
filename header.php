<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <style>
            *{
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
  }
  
  
  nav ul{
      float: right;
      margin-right: 130px;
  
  }
  
  
  nav{
      height: 80px;
      width: 100%;
      z-index: 1000;
  }
  
  nav ul{
      float: right;
      margin-right: 130px;
  
  }
  

  nav ul li a:hover{
      color: rgb(203, 242, 209);
      text-decoration: underline;
  }
  .image{
      display: flex;
  }
  
  .icon a{
      color: white;
  }
  
  .icon a:hover{
      color: rgb(177, 247, 204);
  }
  
  .form{
      display: inline-block;
  }
  
  .divider {
      height: 95%; 
      width: 1px;
      background-color: black; 
      margin: 0 auto;
  }
  .custom-btn {
    border-color: white; 
    color: black; 
}

    </style>
</head>
<body>
    <!-- <div id="header"> -->
<div class="header card text-white position-relative">
    <img src="../image/header_bg.png" class="card-img" alt="">
    <nav class="navbar navbar-expand-lg navbar-dark card-img-overlay">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width: 120px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../tour/tour.html">TOUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="detination">DESTINATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="blog">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../tour/page.html">PAGE</a>
                </li>
            </ul>
            <li class="nav-item icon align-self-center">
                <a href="phone"><i class="fa-solid fa-phone nav-link"></i></a>
                <a href="search_name.html" id = "search-icon"><i class="fa-solid fa-magnifying-glass nav-link"></i></a>
                <a href="user"><i class="fa-regular fa-user nav-link"></i></a>
            </li>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center h-100 position-absolute w-100">
        <?php include 'content_tourlist.php'; ?>
    </div>
  </div>


</body>
<script type="text/javascript">
    $(function() {
    var datepickerVisible = false; 

    $('.navbar-toggler-icon').click(function() {
        if (!datepickerVisible) { 
            $('#datepicker input').datepicker({
            }).datepicker('show');
            datepickerVisible = true; 
        } else { 
            $('#datepicker input').datepicker('hide'); 
            datepickerVisible = false;
        }
    });
});

</script>

</html>