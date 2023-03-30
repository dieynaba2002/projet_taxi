<x-app-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
              <h2 class="text-uppercase text-center mb-5">Commander un taxi</h2>

              <form action="{{url('clients')}}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Zone</label>
                        <select id="zone" class="form-control form-control-lg" name="zone">
                            <option value="">Veuillez Choisir une Zone</option>
                            @foreach($zones as $zone)
                                <option value="{{ $zone->id }}">{{ $zone->nomZone }}</option>
                            @endforeach
                        </select>
                    
                </div>
              <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1m">Trajet</label>
                        <select id="trajet" class="form-control form-control-lg" name="trajet" disabled/>
                            
                        </select>
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Tarif</label>
                        <input type="int" id="tarif" name="tarif" class="form-control form-control-lg" disabled/>
                    </div>
                  </div>
                </div>
                            

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Telephone</label>
                  <input type="text" id="telephone" name="telephone" class="form-control form-control-lg" />
                </div>


                
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body offset-4">Commander</button>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>    
</div>


<script>
// Fonction pour remplir le select avec les itinéraires
function remplirSelectItineraires(zoneId) {
    $.ajax({
        url: '/trajet/' + zoneId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data)
            $('#trajet').empty(); // Vider le select avant de le remplir
            $.each(data, function(index, trajet) {
                $('#trajet').append('<option value="' + trajet.id + '">' + trajet.nomTrajet + '</option>');
            });
            var trajetId = $('#trajet').val();
            $.ajax({
                url: '/getTarif/' + trajetId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#tarif').val(data.tarif);
                    $('#tarif').prop('disabled', true);
                },
                error: function() {
                    console.log('Une erreur s\'est produite lors de la récupération du tarif de l\'itinéraire.');
                }
    });
            
            // Activer le select après avoir fini de le remplir
            $('#trajet').prop('disabled', false);
        },
        error: function() {
            console.log('Une erreur s\'est produite lors de la récupération des itinéraires.');
        }
    });
}


// Appeler la fonction remplirSelectItineraires lorsque la région est sélectionnée
$('#zone').change(function() {
    var zoneId = $(this).val();
    remplirSelectItineraires(zoneId);
});



</script>
   
</x-app-layout>
