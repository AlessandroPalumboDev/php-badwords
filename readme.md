# PHP Badwords

## Descrizione:

- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
- Gestire il tutto con due file diversi.
- Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
- Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
  - stampare a schermo il paragrafo e la sua lunghezza
  - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (\*\*\*) tutte le occorrenze della parola da censurare.

## Bonus:

Aggiungete bootstrap alla pagina per dare un po' di stile al risultato.

## Svolgimento:

- Creo un file index.php con un form nel DOM
- Creo un file che riceve la richiesta
- Stampo in pagina il testo e la sua lunghezza
- Creo variabili del testo modificato e delle lunghezze
- Utilizzo le variabili per la stampa in pagina
- Importo Boostrap e stilizzo
