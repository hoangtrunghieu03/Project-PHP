 <div class="mainmenu pull-left">
     <ul class="nav navbar-nav collapse navbar-collapse">
         <li><a href="<?php echo $SITE_URL ?>" class=<?php echo !isset($_GET['page']) ? "active" : "" ?>>Home</a></li>
         <li><a href="?page=introduction" class=<?php echo isset($_GET['page']) && ($_GET['page'] == "introduction") ? "active" : "" ?>>Introduction</a></li>
         <li><a href="?page=contact" class=<?php echo isset($_GET['page']) && ($_GET['page'] == "contact") ? "active" : "" ?>>Contact</a></li>
     </ul>
 </div>