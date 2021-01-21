<body style="background-color: #f5f5f5">
<div class="col-lg-6 mx-auto">
    <div class="container">
        <div class="logo text-center d-flex justify-content-center align-items-center mt-3">
            <h1 class="text-dark ml-3" style="font-family: 'Montserrat', sans-serif; margin-top: 25px; font-weight: bold;">Daily Intake Calculator</h1>
        </div>
         <h7 class="d-flex justify-content-center" style="color:#bdbab1; padding-bottom: 20px;">Calculate your daily nutritional needs </h7>

        <div class="form mt-3" style="padding-bottom: 50px;">
            <form class="user py-3 px-5" method="post" action="<?= base_url('auth'); ?>" style="background-color: #e8e8e8; border-radius: 40px; padding-bottom: : 100px;">

                <div class="form-group row" style="padding-top: 30px">
                <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-8">
                 <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="background: #8f8f8f; color: white;">
                    <option selected>Choose ...</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>

               <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Height </label>
                <div class="col-sm-8">
                    <input type="height" class="form-control" id="height" name="height" placeholder="Input your height here" style="opacity: 0.6; background: #8f8f8f; color: white;" autocomplete="off">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Weight </label>
                <div class="col-sm-8">
                    <input type="weight" class="form-control" id="weight" name="weight" placeholder="Input your weight here" style="opacity: 0.6; background: #8f8f8f; color: white;" autocomplete="off">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Age </label>
                <div class="col-sm-8">
                    <input type="age" class="form-control" id="age" name="age" placeholder="Input your age here" style="opacity: 0.6; background: #8f8f8f; color: white;" autocomplete="off">
                </div>
              </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Activities</label>
                <div class="col-sm-8">
                 <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="background: #8f8f8f; color: white;">
                    <option selected>Choose ...</option>
                    <option value="1">Exercise 1 - 2 times a week</option>
                    <option value="1">Exercise 4 - 5 times a week</option>
                    <option value="1">Exercise 6 - 7 times a week</option>
                  </select>
                </div>
              </div>
                
                <div class="d-flex justify-content-center" style="padding-bottom: 20px;">
                    <button type="submit" class="btn btn-danger px-4 py-2 mt-3" style="font-size: 18px;">Reset</button>

                    <button type="submit" class="btn btn-warning px-4 py-2 mt-3" style="font-size: 18px; margin-left: 50px;">Calculate</button>
                </div>
            </form>
        </div>
    </div>
</div>