<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/99760cb516.js" crossorigin="anonymous"></script>
  <script src="JS/main.js"></script>
  <link rel="stylesheet" href="./CSS/estilos.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="Barra">
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar" style="z-index: 10;">
      <div class="container">
        <a class="navbar-brand" href="index.html">Cafe</a>
        <script type="text/javascript">
        function makeArray(){for(i=0;i<makeArray.arguments.length;i++)this[i+1]=makeArray.arguments[i]}var months=new makeArray('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');var date=new Date();var day=date.getDate();var month=date.getMonth()+1;var yy=date.getYear();var year=(yy<1000)?yy+1900:yy;document.write(day+ " de "+months[month]+" del "+year); 
        </script>
        <button id="open_cart">
          <div class="cart">
            <div class="cart_container d-flex flex-row">
              <div class="cart_icon">
                <span class="fa-solid fa-cart-shopping"></span>
              </div>
              <div class="cart_count"><span>3</span></div>
              <div class="cart-content">
                <div class="cart_price">$185</div>
              </div>
            </div>
          </div>
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div id="sidecart" class="sidecart">
          <div class="cart-content">
            <div class="cart_header">
              <span class="fa-solid fa-universal-access"></span>
              <div class="header_title">
                <h2>USER</h2>
                <span id="close_btn" class="close_btn">&times;</span>
              </div>
            </div>
            <!-- ITEM 1 -->
            <div class="cart_items">
              <div class="cart_item">
                <div class="remove_item">
                  <span>&times;</span>
                </div>
                <div class="item_img">
                  <img src="./IMG/f2.jpg" alt="">
                </div>
                <div class="item_details">
                  <p>Guajolote</p>
                  <strong>$100</strong>
                  <div class="qty">
                    <span>-</span>
                    <strong>1</strong>
                    <span>+</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END ITEM 1 -->
            <div class="cart_actions">
              <div class="subtotal">
                <p>SUBTOTAL</p>
                <p>$<span id="subtotal_price">3890</span></p>
              </div>
              <button>View Cart</button>
              <button>Checkout</button>
            </div>
          </div>
        </div>
        
        <div class="backdrop"></div>

        
        <div class="collapse navbar-collapse" id="ftco-nav">  
          <ul class="navbar-nav ml-auto mr-md-3 align-items-center">
            <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="./menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="./login.php" class="nav-link">Sesion</a></li>
            <li class="nav-item"><a href="./ubicacion.php" class="nav-link">Ubicacion</a></li>
          </ul>
        </div>
      </div>
      
    </nav>
  </div>
<!--
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
</body>
</html>


