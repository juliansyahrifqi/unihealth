<div class="col-lg-6 mx-auto">
	<div class="container">
		<div class="logo text-center d-flex justify-content-center align-items-center mt-3">
			<img src="<?= base_url('assets/images/logo.png'); ?>" alt="UniHealth Logo" style="width: 90px; height: 90px; ">
			<h1 class="text-dark ml-3" style="font-family: 'Montserrat', sans-serif; font-weight: bold;">UniHealth</h1>
		</div>

		<form action="<?= base_url('foods/listSearchFood'); ?>" method="post">
			<div class="input-group" style="margin-top: 30px">
				<input type="search" class="form-control rounded" placeholder="Search food, recipe ..." id="input-search" name="input-search">
				<button type="submit" class="btn ml-3" style="background-color: #FFB004; color: white;">Search</button>
			</div>
		</form>
	</div>
</div>

<div class="foods mt-5">
	<div class="container">
		<div class="row">
			<?php foreach ($foods as $food) : ?>
				<div class="col-lg-4">
					<div class="card mt-4">
						<img class="card-img-top" src="<?= $food->recipe->image ?>" style="width: 100%; height: 220px;" lazyload="true">

						<div class="card-body">
							<h3 class="card-title mb-2" style="font-family: 'Montserrat', sans-serif;"><?= $food->recipe->label; ?></h3>
							<p class="card-subtitle mb-2" style="font-size: 13px; color: #AFAFAF;"><?= $food->recipe->healthLabels[0]; ?></p>
						</div>

						<div class="nutrition">
							<div class="d-flex justify-content-between mx-4">
								<div class="nutrition-info" style="color: #484848;">
									<p class="calorie mb-1">Cal. <?= number_format($food->recipe->totalNutrients->ENERC_KCAL->quantity, 0); ?> kcal</p>
									<p class="carbo">Carb. <?= number_format($food->recipe->totalNutrients->CHOCDF->quantity, 0); ?> g</p>
								</div>

								<div class="nutrition-info" style="color: #484848;">
									<p class="protein mb-1">Protein <?= number_format($food->recipe->totalNutrients->PROCNT->quantity, 0); ?> g</p>
									<p class="fat">Fat <?= number_format($food->recipe->totalNutrients->FAT->quantity, 0); ?> g</p>
								</div>
							</div>
						</div>

						<hr class="mt-1">

						<div class="card-body d-flex justify-content-between align-items-center px-4 pt-2 pb-4" style="font-family: 'Roboto', sans-serif; font-weight: 500;">
							
							<?php foreach($food->recipe->dietLabels as $f) : ?>
								<p class="diet-labels mb-0"><?= $f; ?></p>
							<?php endforeach ?>
						
							<a href="#" class="btn px-3" style="background-color: #FFB004; border-radius: 20px; color: #000;">Read more</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>