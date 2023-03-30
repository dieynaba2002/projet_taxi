<x-app-layout>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<div class="main-fluid">
    <link rel="stylesheet" href="taxi/style.css">
    <link rel="stylesheet" href="taxi/fontawesome-free-5.15.3-web/css/all.min.css">
    <section class="vh-100 bg-image"
  style="background-color: gray;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; background-color:#FFCB60;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Devenir Chauffeur</h2>

              <form>

              <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">Nom</label>
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Prenom</label>
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Adresse</label>
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Telephone</label>
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" />
                </div>


                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Commander</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
</div>
   
</x-app-layout>
