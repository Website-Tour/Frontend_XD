<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
  
  nav ul li{
      margin: 0 20px;
  }
  
  nav ul li a{
      color: white;
      font-size: 17px;
      text-transform: uppercase;
  }
  
  nav ul li a:hover{
      color: rgb(65, 65, 65);
      text-decoration: none;
  }
  .image{
      display: flex;
  }
  
  .icon a{
      color: white;
  }
  
  .icon a:hover{
      color: gray;
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

.custom-btn:hover {
    background-color: rgba(211, 210, 210, 0.578); 
    color: rgb(0, 0, 0); 
}
  
  .footer ul{
      display: inline-block;
  }
    .card-text {
        font-family: 'Times New Roman', Times, serif;
    }

    .card-title {
        font-family: 'Times New Roman', Times, serif;
    }

    .ui-datepicker {
        background-color: rgb(240, 245, 247); 
    }
    .ui-datepicker {
        width: 220px; 
        font-size: 14px; 
    }
    
    .ui-datepicker-calendar {
        font-size: 14px; 
        color: black; 
    }
    
    .ui-datepicker-calendar tbody td {
        padding: 8px;
        color: black;
    }
    .ui-datepicker-calendar tbody td a{
        color: black; 
        text-decoration: none;
    }
    .pt {
        width: 300px; 
        height: 380px; 
    }

    #tour-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Canh các tour theo khoảng cách ngang đều nhau */
}

.col-md-6.mb-4 {
    flex: 0 0 calc(50% - 1rem); /* Đảm bảo tour chiếm 50% chiều rộng với 1rem khoảng cách */
    margin-bottom: 2rem; /* Tạo khoảng cách giữa các tour */
}
    
    </style>
</head>
<body>

        <?php require_once('../main/connect.php');

        $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $where = isset($_GET['where']) ? $_GET['where'] : '';
        $date = isset($_GET['date']) ? $_GET['date'] : '';
        $guest = isset($_GET['guest']) ? $_GET['guest'] : '';

        function generateTourCard($tour) {
            // $output = "<div>";
            $output = "div class='row' style='position: relative;' id='tour-container' ";
            $output = "<div class='col-md-6 mb-4'>";
            $output .= "<div class='card text-bg-dark'>";
            $output .= "<img src='../image/{$tour['image']}' class='card-img image pt' alt='image/{$tour['image']}' style = 'width:auto'>";
            $output .= "<div class='card-img-overlay'>";
            $output .= "<div class='card-title text-right text-light mb-auto' style='font-size: 15px; padding-bottom: 20%'>From {$tour['giatour']}$</div>";
            $output .= "<div class='flex-column h-100 justify-content-center'>";
            $output .= "<div class='text-center text-light'>";
            $output .= "<p class='card-text mb-2 text-left' style='font-size: 13px;'><i>{$tour['tendiadiem']}</i></p>";
            $output .= "<h5 class='card-title mb-3 text-center' style='font-size: 30px;'><b>{$tour['tentour']}</b></h5>";
            $start_date = new DateTime($tour['thoigiandi']);
            $end_date = new DateTime($tour['thoigianve']);
            $duration = $start_date->diff($end_date);
            $output .= "<div class='card-title text-left text-light' style='font-size: 15px;'><i class='far fa-clock'></i> {$duration->days} days</div>";
            $output .= "<div class='mt-3 text-center'>";
            $output .= "<a href='../chitiettour/chitiet.php?idbaidang=" . $tour["tourid"] . "' class='btn btn-outline-primary border border-white text-dark custom-btn'>More Information<i class='fa-solid fa-arrow-right'></i></a>";
            $output .= "</div>";
            $output .= "</div>"; 
            $output .= "</div>"; 
            $output .= "</div>"; 
            $output .= "</div>"; 
            $output .= "</div>"; 
            
            return $output;
        }

        function generateHeaderHTML() {
            ob_start(); 
            echo '<div class="header card text-white position-relative">';
            echo '<img src="../image/header_bg.png" class="card-img" alt="">';
            echo '<nav class="navbar navbar-expand-lg navbar-dark card-img-overlay">';
            echo '<a class="navbar-brand" href="#">';
            echo '<img src="../images/logo.png" alt="Logo" style="width: 120px; height: auto;">';
            echo '</a>';
            echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
            echo '<span class="navbar-toggler-icon"></span>';
            echo '</button>';
            echo '<div class="collapse navbar-collapse" id="navbarNav">';
            echo '<ul class="navbar-nav mx-auto">';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="home">HOME</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="../tour/tour.html">TOUR</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="destination">DESTINATION</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="blog">BLOG</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="contact">CONTACT</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo '<a class="nav-link text-white" href="../tour/page">PAGE</a>';
            echo '</li>';
            echo '</ul>';
            echo '<li class="nav-item icon align-self-center">';
            echo '<a href="phone"><i class="fa-solid fa-phone nav-link"></i></a>';
            echo '<a href="search"><i class="fa-solid fa-magnifying-glass nav-link"></i></a>';
            echo '<a href="user"><i class="fa-regular fa-user nav-link"></i></a>';
            echo '</li>';
            echo '</div>';
            echo '</nav>';
            echo '<div class="d-flex justify-content-center align-items-center h-100 position-absolute w-100">';
            echo '<h1 class="tour-list">Tour List</h1>';
            echo '</div>';
            echo '</div>';
            $output = ob_get_clean(); 
            return $output;
        }

        function generateSearchContainerHTML() {
            ob_start(); 
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-12">';
            echo '<div id="search">';
            echo '<script>';
            echo '$(function(){';
            echo '$("#search").load("../component/search.php");';
            echo '});';
            echo '</script>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $output = ob_get_clean(); 
            return $output; 
        }


        function generateTourListHTML($data) {
            ob_start();
            
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-8" style="margin-top: 50px" id="phantrang">';
            echo '<div id="ketquatiemkiem">';
        
            
            $numCols = 2;
        
            $toursChunks = array_chunk($data, $numCols);
            
        
            foreach ($toursChunks as $toursChunk) {
                echo '<div class="row">';
                foreach ($toursChunk as $tour) {
                    echo generateTourCard($tour);
                }
                echo '</div>';
            }
        
            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-1" style="margin-top: 50px;">';
            echo '<div class="divider"></div>';
            echo '</div>';
            echo '<div class="col-md-3">';
            echo '<div class="col-md-12" style="margin-top: 50px;">';
            echo '<form>';
            echo '<div class="form-group">';
            echo '<label for="filterBy"><h5>Filter By</h5></label>';
            echo '</div>';
            echo '<hr class="my-1">';
            echo '<div class="form-group">';
            echo '<label for="priceRange"><h5>Price Range</h5></label>';
            echo '<input type="range" class="form-control-range" id="priceRange" min="0" max="1000">';
            echo '<span id="priceDisplay">0$ - 500$</span>';
            echo '</div>';
            echo '<hr class="my-1">';
            echo '<div class="form-group">';
            echo '<label for="categories"><h5>Categories</h5></label><br>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="adventure" value="Adventure">';
            echo '<label class="form-check-label" for="adventure">Adventure</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="beach" value="Beach">';
            echo '<label class="form-check-label" for="beach">Beach</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="city-tour" value="City Tour">';
            echo '<label class="form-check-label" for="city-tour">City Tour</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="hiking" value="Hiking">';
            echo '<label class="form-check-label" for="hiking">Hiking</label>';
            echo '</div>';
            echo '</div>';
            echo '<hr class="my-1">';
            echo '<div class="form-group">';
            echo '<label for="review"><h5>Review</h5></label><br>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="star1" value="1">';
            echo '<label class="form-check-label" for="star1">1 star</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="star2" value="2">';
            echo '<label class="form-check-label" for="star2">2 stars</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="star3" value="3">';
            echo '<label class="form-check-label" for="star3">3 stars</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="star4" value="4">';
            echo '<label class="form-check-label" for="star4">4 stars</label>';
            echo '</div>';
            echo '<div class="form-check">';
            echo '<input class="form-check-input" type="checkbox" id="star5" value="5">';
            echo '<label class="form-check-label" for="star5">5 stars</label>';
            echo '</div>';
            echo '<hr class="my-1">';
            echo '<div class="form-group">';
            echo '<button type="submit" class="btn btn-success">Send</button>';
            echo '<button type="reset" class="btn btn-success">Reset</button>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $output = ob_get_clean();
            return $output; 
        }
        
        function generateTourListHTMLq($data) {
    ob_start(); 
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-8" style="margin-top: 50px" id="phantrang">';
    echo '<div id="ketquatiemkiem">';

    foreach ($data as $tour) {
        echo generateTourCard($tour); 
    }

    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-1" style="margin-top: 50px;">';
    echo '<div class="divider"></div>';
    echo '</div>';
    echo '<div class="col-md-3">';
    echo '<div class="col-md-12" style="margin-top: 50px;">';
    echo '<form>';
    echo '<div class="form-group">';
    echo '<label for="filterBy"><h5>Filter By</h5></label>';
    echo '</div>';
    echo '<hr class="my-1">';
    echo '<div class="form-group">';
    echo '<label for="priceRange"><h5>Price Range</h5></label>';
    echo '<input type="range" class="form-control-range" id="priceRange" min="0" max="1000">';
    echo '<span id="priceDisplay">0$ - 500$</span>';
    echo '</div>';
    echo '<hr class="my-1">';
    echo '<div class="form-group">';
    echo '<label for="categories"><h5>Categories</h5></label><br>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="adventure" value="Adventure">';
    echo '<label class="form-check-label" for="adventure">Adventure</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="beach" value="Beach">';
    echo '<label class="form-check-label" for="beach">Beach</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="city-tour" value="City Tour">';
    echo '<label class="form-check-label" for="city-tour">City Tour</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="hiking" value="Hiking">';
    echo '<label class="form-check-label" for="hiking">Hiking</label>';
    echo '</div>';
    echo '</div>';
    echo '<hr class="my-1">';
    echo '<div class="form-group">';
    echo '<label for="review"><h5>Review</h5></label><br>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="star1" value="1">';
    echo '<label class="form-check-label" for="star1">1 star</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="star2" value="2">';
    echo '<label class="form-check-label" for="star2">2 stars</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="star3" value="3">';
    echo '<label class="form-check-label" for="star3">3 stars</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="star4" value="4">';
    echo '<label class="form-check-label" for="star4">4 stars</label>';
    echo '</div>';
    echo '<div class="form-check">';
    echo '<input class="form-check-input" type="checkbox" id="star5" value="5">';
    echo '<label class="form-check-label" for="star5">5 stars</label>';
    echo '</div>';
    echo '<hr class="my-1">';
    echo '<div class="form-group">';
    echo '<button type="submit" class="btn btn-success">Send</button>';
    echo '<button type="reset" class="btn btn-success">Reset</button>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    $output = ob_get_clean(); 
    return $output; 
}


function displayFooter() {
    ob_start(); 
    echo '<div class="container">';
    echo '<script>';
    echo '$(function(){';
    echo '$("#search").load("../main/footer_tour.php");';
    echo '});';
    echo '</script>';
    echo '</div>';
    $output = ob_get_clean(); 
    return $output;
} 



        if (isset($_POST['where']) && isset($_POST['date']) && isset($_POST['guest'])) {
            $where = $_POST['where'];
            $date = $_POST['date'];
            $guest = $_POST['guest'];
            $guests_int = (int) preg_replace('/\D/', '', $guest);
            $date = str_replace('/', '-', $_POST['date']);
            $formatted_date = date('Y-m-d', strtotime($date));

            

            $sql = "SELECT * FROM tour WHERE area LIKE :where AND thoigiandi = :date AND soluongtrong >= :guest";
            $stmt = $dbCon->prepare($sql);
            $stmt->bindParam(':where', $where);
            $stmt->bindParam(':date', $formatted_date);
            $stmt->bindParam(':guest', $guests_int, PDO::PARAM_INT);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $limit = 4;
            $start = ($current_page - 1) * $limit;
        

        if (!empty($results)) {
            $data = $results;
            $total_records = count($data);
            $total_pages = ceil($total_records / $limit);

            $limit = 4;
            $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

            if ($current_page < 1) {
            $current_page = 1;
            } elseif ($current_page > $total_pages) {
            $current_page = $total_pages;
            }

            $start = ($current_page - 1) * $limit;
                echo generateHeaderHTML();
                echo generateSearchContainerHTML();
                echo generateTourListHTML($data);

        
        } else {
            
                echo generateHeaderHTML();
                echo generateSearchContainerHTML();
                echo "<div class = 'container'>";
                echo "<h3>Chưa có tour phù hợp với yêu cầu của bạn!</h3>";
                echo "</div>";
            
        }

        function adisplayFooter() {
            echo '<div class="container">';
            $footerContent = file_get_contents('../main/footer_tour.php');
            echo $footerContent;
            echo '</div>';
        }

        adisplayFooter();
        
        }else{
        $total_records = $dbCon->query('SELECT count(tourid) as total FROM tour')->fetchColumn();
        $limit = 4;
        $total_pages = ceil($total_records / $limit);
        $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

        if ($current_page < 1) {
            $current_page = 1;
        } elseif ($current_page > $total_pages) {
            $current_page = $total_pages;
        }

        $start = ($current_page - 1) * $limit;

        $stmt = $dbCon->prepare("SELECT * FROM tour LIMIT :start, :limit");
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $tour) {
            echo "<div class='col-md-6 mb-4'>";
            echo "<div class='card text-bg-dark'>";
            echo "<img src='../image/{$tour['image']}' class='card-img image pt' alt='image/{$tour['image']}'>";
            echo "<div class='card-img-overlay'>";
            echo "<div class='card-title text-right text-light mb-auto' style = 'font-size: 15px; padding-bottom: 20%'>From {$tour['giatour']}$</div>";
            echo "<div class= 'flex-column h-100 justify-content-center'>";
            echo "<div class='text-center text-light'>";
            echo "<p class='card-text mb-2 text-left' style='font-size: 13px;'><i>{$tour['tendiadiem']}</i></p>";
            echo "<h5 class='card-title mb-3 text-center'style='font-size: 30px;'><b>{$tour['tentour']}</b></h5>";
            $start_date = new DateTime($tour['thoigiandi']);
            $end_date = new DateTime($tour['thoigianve']);
            $duration = $start_date->diff($end_date);
            echo "<div class='card-title text-left text-light' style='font-size: 15px;'><i class='far fa-clock'></i> {$duration->days} days</div>";

            echo "<div class='mt-3 text-center'>";
            echo "<a href='../chitiettour/chitiet.php?idbaidang=" . $tour["tourid"] . "' class='btn btn-outline-primary border border-white text-dark custom-btn'>More Information<i class='fa-solid fa-arrow-right'></i></a>";
            echo "</div>";
            echo "</div>"; 
            echo "</div>"; 
            echo "</div>"; 
            echo "</div>"; 
            echo "</div>"; 
        } 
            
        }


        
        
        

         ?>



<script>
$(document).ready(function(){
    $(".pagination a.page-link").click(function(e){
        e.preventDefault();
        var page = $(this).text();
        $("#tour-container").load("../component/phantrang.php?page=" + page + " #tour-container");
    });
});
</script>


</body>
<script type="text/javascript">
    $(function() {
        $('#calendar-icon').click(function() {
            $('#datepicker input').datepicker({
            }).datepicker('show');
        });
    });
    
</script>


<script>

    
  document.getElementById('priceRange').addEventListener('input', function() {
      var price = this.value;
      document.getElementById('priceDisplay').textContent = '$0 - '+'$' + price;



  });


  
</script>
</html>
