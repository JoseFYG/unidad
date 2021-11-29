<!--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('hermanos.index')}}">Hermanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cuotas.index')}}">Cuotas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('galeria.index')}}">Galería</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>-->


  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-church icon'></i>
        <div class="logo_name">UNIDAD</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{route('hermanos.index')}}">
          <i class='bx bxs-user-account'></i>
          <span class="links_name">Hermanos</span>
        </a>
         <span class="tooltip">Hermanos</span>
      </li>
      <li>
        <a href="{{route('cuotas.index')}}">
          <i class="fas fa-folder"></i>
          <span class="links_name">Cuotas</span>
        </a>
         <span class="tooltip">Cuotas</span>
      </li>
      <li>
        <a href="{{route('galeria.index')}}">
          <i class='bx bx-images'></i>
          <span class="links_name">Galería</span>
        </a>
         <span class="tooltip">Galería</span>
      </li>
     <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Cuenta</span>
       </a>
       <span class="tooltip">Cuenta</span>
     </li>
    </ul>
  </div>
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

  


