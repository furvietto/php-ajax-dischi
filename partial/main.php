<?php include_once __DIR__."./../server/db.php" ?>

<main class="bc-main">
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-8" >
                  <div v-if="cards" class="row gap-3 justify-content-around row-cols-6">
                      <?php  
                      foreach ($response as $value) {
                        ?>
                        <div class="col pb-2 pt-2 card text-center bc-card">
                            <img src="<?= $value["poster"]?>" alt="">
                            <h1 class="mb-3 mt-3 text-white"><?= $value["title"] ?></h1>
                            <h2 class="fs-6"><?= $value["author"] ?></h2>
                            <h3 class="fs-6"><?= $value["year"] ?></h3>
                        </div> 
                        <?php
                      }
                      ?>
                  </div>
              </div>
          </div>
      </div>
  </main>