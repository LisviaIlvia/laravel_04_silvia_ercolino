<x-mail::message>

    <div class="email-container">
        <div class="header">
            Il Blog della Salute
        </div>
        <div class="body">
            <p>Gentile <span class="highlight">{{$username}}</span>,</p>
            <p>Grazie per averci contattato! Abbiamo ricevuto il tuo messaggio e il nostro team ti risponderà al più presto.</p>
            <p>Ecco un riepilogo del tuo messaggio:</p>
            <p><strong>Messaggio:</strong> {{ $usermessage }}</p>
            <p>Nel frattempo, puoi esplorare il nostro sito web o seguirci sui nostri canali social per rimanere aggiornato sulle ultime novità.</p>
            <p>Grazie ancora per aver scelto Il Blog della Salute!</p>
        </div>
        <div class="footer">
            <p>Questa è un'email automatica, ti preghiamo di non rispondere direttamente.</p>
            <p>Per ulteriori informazioni, visita il nostro sito: <a href="">www.ilblogdellasalute.com</a></p>
        </div>
    </div>

Thanks,<br>
Lo staff
</x-mail::message>
