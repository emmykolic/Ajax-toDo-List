<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>To Do</title>
  </head>
  <body>
     
      
      <section class="py-5 background" style="min-height: 100vh">
        <div class="container">
          <div class="row justify-content-center ">
            <div class="col-md-4 shadow p-md-5 p-2 bg-white rounded " style="border-top: 5px solid blue; opacity: 0.9" >
              <h1 class="display-5 text-muted">Todo</h1><hr>
              <div id="itemsArea">
              <?php 
              $check = $db->query("SELECT * FROM lists WHERE status='Undone' ORDER BY lid");
              while ($row = $check->fetch_assoc()):
              ?>
               <p class="lead mb-3 text-primary" id="lid<?= $row['lid'] ?>"> 
                <input type="checkbox" onclick="markAsDone(<?= $row['lid'] ?>)" > <?=$row['item']?>
              </p> 
              <?php endwhile;?>
              </div>
              <div class="row" id="">
                <div class="col-10">
                  <input type="text" id="item" placeholder="Add New Item" class="form-control">
                </div>
                <div class="col-2">
                  <button class="btn btn-primary mb-3" id="submitItem">+</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- Footer Start -->
      <footer class="col-md-12 col-12 mb-0">
        <div class="p-4 bg-light shadow rounded">
            <div class="row">
              <div class="col-12 col-sm-6 text-center text-sm-start">
                  &copy; <?=date('M, Y')?> Nexm
              </div>
            </div>
        </div>
      </footer>
      <!-- Footer End -->
    
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="Js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>