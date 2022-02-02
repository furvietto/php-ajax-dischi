<?php include_once __DIR__."./../server/db.php" ?>

<main id="app" class="bc-main">
      <div class="container-fluid">
          <div class="row pt-4 justify-content-center">
              <div class="col-8" >
                  <div class="row gap-3 justify-content-around row-cols-6">                    
                        <div v-for="(card, index) in cards" :key="index" class="col pb-2 pt-2 card text-center bc-card">
                            <img :src="card.poster" alt="">
                            <h1 class="mb-3 mt-3 text-white">{{card.title}}</h1>
                            <h2 class="fs-6">{{card.author}}</h2>
                            <h3 class="fs-6">{{card.year}}</h3>
                        </div> 
                  </div>
              </div>
          </div>
      </div>
  </main>