<x-layout>
<div class="container-fluid bg-page vh-100">
    <div class="container">
        <h1 class="text-center py-5">Chi Siamo</h1>
    
        <p class="text-center">Il nostro team è composto da professionisti altamente qualificati che lavorano insieme per promuovere il benessere fisico, mentale e nutrizionale. Con anni di esperienza nei rispettivi campi, siamo qui per fornirti le informazioni più aggiornate e utili per migliorare la tua vita quotidiana.</p>
    
        <div class="row mt-5">
            <!-- Dottoressa -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('/dottoressa.jpg') }}" alt="Dottoressa" class="img-fluid rounded-circle mb-3" width="200">
                <h3>Dr.ssa Maria Rossi</h3>
                <p>Medico e Specialista in Medicina Generale</p>
                <p>La Dr.ssa Rossi è una professionista esperta nel campo della medicina generale con un focus sulla prevenzione e sul miglioramento del benessere generale. Si dedica a fornire consulenze mediche personalizzate e ad educare i pazienti su stili di vita sani.</p>
            </div>
    
            <!-- Esperta di Fitness -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('/esperta-fitness.jpg') }}" alt="Esperta di Fitness" class="img-fluid rounded-circle mb-3" width="200">
                <h3>Laura Bianchi</h3>
                <p>Esperta di Fitness e Personal Trainer</p>
                <p>Laura è una personal trainer certificata con anni di esperienza nell'aiutare le persone a raggiungere i loro obiettivi di fitness. La sua filosofia si basa sull'importanza dell'esercizio fisico quotidiano, non solo per migliorare il corpo, ma anche per la mente.</p>
            </div>
    
            <!-- Esperta di Psicologia -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('/esperta-psicologa.jpg') }}" alt="Esperta di Psicologia" class="img-fluid rounded-circle mb-3" width="200">
                <h3>Prof.ssa Chiara Verdi</h3>
                <p>Psicologa e Psicoterapeuta</p>
                <p>La Prof.ssa Verdi è una psicologa con un'ampia esperienza nel trattamento di ansia, stress e disturbi emotivi. Il suo approccio terapeutico si concentra sulla crescita personale e sulla gestione delle emozioni attraverso tecniche cognitive e comportamentali.</p>
            </div>
    
            <!-- Esperta di Nutrizione -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('/esperta-nutrizione.jpg') }}" alt="Esperta di Nutrizione" class="img-fluid rounded-circle mb-3" width="200">
                <h3>Giulia Santoro</h3>
                <p>Esperta di Nutrizione e Dietista</p>
                <p>Giulia è una dietista esperta che aiuta le persone a comprendere l'importanza di una dieta equilibrata. Con la sua guida, potrai imparare come alimentarti in modo sano ed equilibrato, migliorando così il tuo benessere a lungo termine.</p>
            </div>
        </div>
    
        <div class="text-center pt-5">
            <p>Se hai domande o desideri maggiori informazioni, non esitare a <a href="#">contattarci</a>.</p>
        </div>
    </div>
</div>    
</x-layout>