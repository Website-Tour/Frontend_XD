<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tour</title>
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
    </style>
</head>
<body>

        <form action="../component/phantrang.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-4">
              <select id="where" class="form-control" name="where">
                <option selected>Where</option>
                <option>Northern Viet Nam</option>
                <option>Central Viet Nam</option>
                <option>Southern Viet Nam</option>
                <option>Westside Viet Nam</option>
              </select>
            </div>
            <div class="form-group col-md-4">
                
              <!-- <select id="when" class="form-control"> -->
              <div class="input-group date text-dark datepicker" id = "datepicker">
                    <input type="text" class="form-control text-dark" placeholder="Date" name="date" id="date" aria-label="Date" aria-describedby="calendar-icon">
                    <span class = "input-group-append" >
                        <span class = "input-group-text text-dark "id="calendar-icon">
                            <i class = "fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
              <!-- </select> -->
            </div>
            <div class="form-group col-md-3">
              <select id="guest" class="form-control" name="guest">
                <option selected>Guest</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More</option>
              </select>
            </div>
            <div class="form-group col-md-1 align-self-end">
              <button type="submit" class="btn btn-success">Search</button>
            </div>
          </div>
        </form>
      </div>
</body>
<script type="text/javascript">
    $(function() {
        $('#calendar-icon').click(function() {
            $('#datepicker input').datepicker({
            }).datepicker('show');
        });
    });

    $(function() {
      $("#datepicker input").datepicker({
        dateFormat: "yy/mm/dd"
      });
    });
    
</script>

</html>