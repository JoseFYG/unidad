<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="%PATH%/theme.css" />
    <link rel="stylesheet" type="text/css" href="%PATH%/font-awesome.css" />
    <link rel="stylesheet" href="%PATH%/jquery-ui.css" />
    <link rel="stylesheet" href="%PATH%/primeui.min.css" />
    <script type="text/javascript" src="%PATH%/jquery.js"></script>
    <script type="text/javascript" src="%PATH%/jquery-ui.js"></script>
    <script type="text/javascript" src="%PATH%/primeui.min.js"></script>
    <script type="text/javascript" src="%PATH%/x-tag-core.min.js"></script>
    <script type="text/javascript" src="%PATH%/primeelements-3.0.js"></script>
    <script type="text/javascript" src="%PATH%/mustache.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.0.0/css/fixedColumns.bootstrap5.min.css">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

        <title>UNIDAD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          @import 'tailwindcss/base';
          @import 'tailwindcss/components';
          @import 'tailwindcss/utilities';
          
          /* Google Font Link */
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins" , sans-serif;
          }
          .sidebar{
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 78px;
            background: #11101D;
            padding: 6px 14px;
            z-index: 99;
            transition: all 0.5s ease;
          }
          .sidebar.open{
            width: 200px;
          }
          .sidebar .logo-details{
            height: 60px;
            display: flex;
            align-items: center;
            position: relative;
          }
          .sidebar .logo-details .icon{
            opacity: 0;
            transition: all 0.5s ease;
          }
          .sidebar .logo-details .logo_name{
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            opacity: 0;
            transition: all 0.5s ease;
          }
          .sidebar.open .logo-details .icon,
          .sidebar.open .logo-details .logo_name{
            opacity: 1;
          }
          .sidebar .logo-details #btn{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 22px;
            transition: all 0.4s ease;
            font-size: 23px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s ease;
          }
          .sidebar.open .logo-details #btn{
            text-align: right;
          }
          .sidebar i{
            color: #fff;
            height: 60px;
            min-width: 50px;
            font-size: 28px;
            text-align: center;
            line-height: 60px;
          }
          .sidebar .nav-list{
            margin-top: 20px;
            height: 100%;
          }
          .sidebar li{
            position: relative;
            margin: 8px 0;
            list-style: none;
          }
          .sidebar li .tooltip{
            position: absolute;
            top: -20px;
            left: calc(100% + 15px);
            z-index: 3;
            background: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 400;
            opacity: 0;
            white-space: nowrap;
            pointer-events: none;
            transition: 0s;
          }
          .sidebar li:hover .tooltip{
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
            top: 50%;
            transform: translateY(-50%);
          }
          .sidebar.open li .tooltip{
            display: none;
          }
          .sidebar input{
            font-size: 15px;
            color: #FFF;
            font-weight: 400;
            outline: none;
            height: 50px;
            width: 100%;
            width: 50px;
            border: none;
            border-radius: 12px;
            transition: all 0.5s ease;
            background: #1d1b31;
          }
          .sidebar.open input{
            padding: 0 20px 0 50px;
            width: 100%;
          }
          .sidebar .bx-search{
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 22px;
            background: #1d1b31;
            color: #FFF;
          }
          .sidebar.open .bx-search:hover{
            background: #1d1b31;
            color: #FFF;
          }
          .sidebar .bx-search:hover{
            background: #FFF;
            color: #11101d;
          }
          .sidebar li a{
            display: flex;
            height: 100%;
            width: 100%;
            border-radius: 12px;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
            background: #11101D;
          }
          .sidebar li a:hover{
            background: #FFF;
          }
          .sidebar li a .links_name{
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s;
          }
          .sidebar.open li a .links_name{
            opacity: 1;
            pointer-events: auto;
          }
          .sidebar li a:hover .links_name,
          .sidebar li a:hover i{
            transition: all 0.5s ease;
            color: #11101D;
          }
          .sidebar li i{
            height: 50px;
            line-height: 50px;
            font-size: 18px;
            border-radius: 12px;
          }
          .sidebar li.profile{
            position: fixed;
            height: 60px;
            width: 78px;
            left: 0;
            bottom: -8px;
            padding: 10px 14px;
            background: #1d1b31;
            transition: all 0.5s ease;
            overflow: hidden;
          }
          .sidebar.open li.profile{
            width: 200px;
          }
          .sidebar li .profile-details{
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
          }
          .sidebar li img{
            height: 45px;
            width: 45px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 10px;
          }
          .sidebar li.profile .name,
          .sidebar li.profile .job{
            font-size: 15px;
            font-weight: 400;
            color: #fff;
            white-space: nowrap;
          }
          .sidebar li.profile .job{
            font-size: 12px;
          }
          .sidebar .profile #log_out{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: #1d1b31;
            width: 100%;
            height: 60px;
            line-height: 60px;
            border-radius: 0px;
            transition: all 0.5s ease;
          }
          .sidebar.open .profile #log_out{
            width: 50px;
            background: none;
          }
          .home-section{
            position: relative;
            
            min-height: 100vh;
            top: 0;
            left: 78px;
            width: calc(100% - 78px);
            transition: all 0.5s ease;
            z-index: 2;
          }
          .sidebar.open ~ .home-section{
            left: 200px;
            width: calc(100% - 200px);
          }
          .home-section .text{
            display: inline-block;
            color: #11101d;
            font-size: 25px;
            font-weight: 500;
            margin: 18px
          }
          ul {
              padding-left: 0;
          }
          @media (max-width: 420px) {
            .sidebar li .tooltip{
              display: none;
            }
          }
          body {
            padding: 0;
            margin: 0;
          }
          
          /* Footer */
          @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
          
          section .section-title {
              text-align: center;
              color: #11101D;
              text-transform: uppercase;
          }
          #footer {
              background: #11101D !important;
              position: absolute;
            bottom: 0;
            width: 100%;
          }
          #footer h5{
            padding-left: 10px;
              border-left: 3px solid #fff;
              padding-bottom: 6px;
              margin-bottom: 20px;
              color:#fffffffff;
          }
          #footer a {
              color: #fff;
              text-decoration: none !important;
              background-color: transparent;
              -webkit-text-decoration-skip: objects;
          }
          #footer ul.social li{
            padding: 3px 0;
          }
          #footer ul.social li a i {
              margin-right: 5px;
            font-size:25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
          }
          #footer ul.social li:hover a i {
            font-size:30px;
            margin-top:-10px;
          }
          #footer ul.social li a,
          #footer ul.quick-links li a{
            color:#fff;
          }
          #footer ul.social li a:hover{
            color:#fff;
          }
          #footer ul.quick-links li{
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
          }
          #footer ul.quick-links li:hover{
            padding: 3px 0;
            margin-left:5px;
            font-weight:700;
          }
          #footer ul.quick-links li a i{
            margin-right: 5px;
          }
          #footer ul.quick-links li:hover a i {
              font-weight: 700;
          }
          
          @media (max-width:767px){
            #footer h5 {
              padding-left: 0;
              border-left: transparent;
              padding-bottom: 0px;
              margin-bottom: 10px;
          }
          }
          
          
              
          </style>
          <style>
            .grid-gallery {
  display: grid;
  grid-auto-rows: 200px;
  grid-gap: 1rem;
  grid-auto-flow: row dense;
}

@media all and (min-width: 320px) {
  .grid-gallery {
    grid-template-columns: repeat(1, 1fr);
  }
}

@media all and (min-width: 768px) {
  .grid-gallery {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media all and (min-width: 1024px) {
  .grid-gallery {
    grid-template-columns: repeat(6, 1fr);
  }
}

.grid-gallery__item:nth-child(11n+1) {
  grid-column: span 1;
}

.grid-gallery__item:nth-child(11n+4) {
  grid-column: span 2;
  grid-row: span 1;
}

.grid-gallery__item:nth-child(11n+6) {
  grid-column: span 3;
  grid-row: span 1;
}

.grid-gallery__item:nth-child(11n+7) {
  grid-column: span 1;
  grid-row: span 2;
}

.grid-gallery__item:nth-child(11n+8) {
  grid-column: span 2;
  grid-row: span 2;
}

.grid-gallery__item:nth-child(11n+9) {
  grid-row: span 3;
}

.grid-gallery__image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
          </style>
    </head>
    <body class="antialiased">
        <div class="sidebar">
            <div class="logo-details">
              <i class='bx bxs-church icon'></i>
                <div class="logo_name">UNIDAD</div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">
              <li>
                @if (Route::has('login'))
                  <a href="{{ route('login') }}">
                    <i class='fas fa-sign-in-alt'></i>
                    <span class="links_name">Iniciar Sesión</span>
                  </a>
                  <span class="tooltip">Iniciar Sesión</span>
                @endif
              </li>
              <li>
                @if (Route::has('register'))
                  <a href="{{ route('register') }}">
                    <i class="fas fa-database"></i>
                    <span class="links_name">Registrarse</span>
                  </a>
                  <span class="tooltip">Registrarse</span>
                @endif
              </li>
            </ul>
        </div>

        <section class="home-section bg-danger">
          <div class="container mt-3 mb-3">
              <img src="{{ asset('/images/logo.png')}}" alt="">
          </div>
          
        </section>
              
          

          <script>
          let sidebar = document.querySelector(".sidebar");
          let closeBtn = document.querySelector("#btn");
          let searchBtn = document.querySelector(".bx-search");
        
          closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
          });
        
          searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
          });
        
          // following are the code to change sidebar button(optional)
          function menuBtnChange() {
           if(sidebar.classList.contains("open")){
             closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
           }else {
             closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
           }
          }
        </script>
        <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="datatables/datatables.min.js"></script>    
        <script type="text/javascript" src="main.js"></script> 
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/4.0.0/js/dataTables.fixedColumns.min.js"></script>
    </body>
</html>
