<?php

use includes\session; ?>
<nav>
  <div class="flex-logo">

    <a class="" href="/Easycrudsymphony/public/index.php"><img src="assets/img/Logo EasySoft sans le fond blanc.png" alt="Easysoft"></a>
  </div>

  <div class="flex-menuNavbar">
    <?php

    if (session::get('login') == TRUE) { ?>

      <?php if (session::get('roleid') == 'admin') { ?>
        <ul class="list-nav">
          <li><a class="nav-link btn" href="ViewTask">Intervention</a></li>
          <li><a class="nav-link btn" href="ViewTaskAdmin">Toute les interventions</a></li>
          <li><a class="nav-link btn" href="ViewTaskMaterial">Matériel</a></li>
          <li><a class="nav-link btn" href="ViewTaskNameCustom">Client</a></li>
          <li>
            <form class="nav-link btn" style="padding: 0px;" action="ListUser" method="POST">
              <input type="hidden" value="pageUser" name="pageUser">
              <button style="border-style: none; background-color: #90242D; color: white; font-size: 10px;font-family: Arial; padding: 15px 70px 15px 70px;"> Utilisateurs</button>
            </form>
          </li>
        </ul>
      <?php } else { ?>
        <ul class="list-nav">
          <li><a class="nav-link btn" href="ViewTask">Intervention</a></li>
          <li><a class="nav-link btn" href="ViewTaskMaterial">Matériel</a></li>
          <li><a class="nav-link btn" href="ViewTaskNameCustom">Client</a></li>
        </ul>
      <?php } ?>

    <?php } else { ?>

    <?php } ?>



  </div>
</nav>