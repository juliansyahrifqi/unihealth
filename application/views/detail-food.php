  <?php if ($this->session->userdata('user_username')) { ?>
    <div class="container">
      <div class="text-center">
        <h1 class="text-dark food-title mt-5"><?= $foods[0]->label; ?></h1>
        <p class="text-dark diet-labels">
          <?php foreach ($foods[0]->dietLabels as $diet) : ?>
            <?= $diet; ?>
          <?php endforeach; ?>
        </p>
      </div>

      <div class="col-lg-12 mt-5 food-image">
        <img src="<?= $foods[0]->image; ?>" class="rounded d-block mx-auto" alt="" style="">
      </div>

      <div class="d-flex justify-content-center align-items-center mt-4">
        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->ENERC_KCAL->quantity, 0); ?> kcal
          </p>
        </div>

        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->PROCNT->quantity, 0); ?> g
          </p>
        </div>

        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->CHOCDF->quantity, 0); ?> g
          </p>
        </div>

        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->FIBTG->quantity, 0); ?> g
          </p>
        </div>

        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->FAT->quantity, 0); ?> g
          </p>
        </div>

        <div class="nutrient-info">
          <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
          <p class="nutrient-type">
            <?= number_format($foods[0]->totalNutrients->SUGAR->quantity, 0); ?> g
          </p>
        </div>
      </div>

      <div class="ingredients mt-5">
        <div class="col-lg-10 mx-auto ingredient-list">
          <h2 class="text-center pt-2">Ingredients</h2>
          <ul class="mt-5">
            <?php foreach ($foods[0]->ingredientLines as $ingredient) : ?>
              <li class="mt-2"><?= $ingredient; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="container mt-5">
      <div class="alert alert-danger" role="alert">
        <p class="text-center">
          You must be logged in to view the details of this food recipe
        </p>
      </div>
    </div>
  <?php } ?>