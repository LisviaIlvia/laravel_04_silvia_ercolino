<x-layout>

    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title pt-5"> Contattaci </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form class="p-4 rounded-4 shadow bg-secondary-subtle my-5 p-3" method="POST" action="{{route('contact.submit')}}">
                  @csrf  
                    <div class="mb-3">
                      <label for="username" class="form-label">Inserisci il tuo nome completo</label>
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Inserisci la tua email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Messaggio</label>
                      <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Invio</button>

                  </form>
            </div>
        </div>
        
    </div>

</x-layout>