  <div class="container">

    
    <div class="text-center">
      <h1 class="text-dark"><?= $foods[0]->label; ?></h1>
      <p class="text-dark">
        <?php foreach($foods[0]->dietLabels as $diet) : ?>
          <?= $diet; ?>
        <?php endforeach; ?>
      </p>
    </div>

    <div class="col-lg-12">
      <img src="<?= $foods[0]->image; ?>" class="rounded d-block mx-auto" alt="" style="width: 1000px; height: 460px;">
    </div>

    <div class="d-flex justify-content-center align-items-center">
      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true" style="width: 70px; height: 70px ; margin-left: 25px">
        <a style="margin-left: 15px">
          <?= number_format($foods[0]->totalNutrients->ENERC_KCAL->quantity, 0); ?> kcal
        </a>
      </div>

      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" style="width: 70px; height: 70px ;margin-left: 30px">
        <a style="margin-left: 15px">
        <?= number_format($foods[0]->totalNutrients->PROCNT->quantity, 0); ?> g
        </a>
      </div>

      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" style="width: 70px; height: 70px ;margin-left: 30px">
        <a style="margin-left: 15px">
        <?= number_format($foods[0]->totalNutrients->CHOCDF->quantity, 0); ?> g
        </a>
      </div>

      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" style="width: 70px; height: 70px ;margin-left: 30px">
        <a style="margin-left: 15px">
        <?= number_format($foods[0]->totalNutrients->FIBTG->quantity, 0); ?> g
        </a>
      </div>

      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" style="width: 70px; height: 70px ;margin-left: 30px">
        <a style="margin-left: 15px">
        <?= number_format($foods[0]->totalNutrients->FAT->quantity, 0); ?> g
        </a>
      </div>

      <div class="nutrient-info">
        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" style="width: 70px; height: 70px ;margin-left: 30px">
        <a style="margin-left: 15px">
        <?= number_format($foods[0]->totalNutrients->SUGAR->quantity, 0); ?> g
        </a>
      </div>
    </div>

    <div class="ingredients">
      <div class="col-lg-10 mx-auto bg-dark">
        <h2 class="text-center">Ingredients</h2>
        <?php foreach($foods[0]->ingredientLines as $ingredient) : ?>
          <ul>
            <li><?= $ingredient; ?></li>
          </ul>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

