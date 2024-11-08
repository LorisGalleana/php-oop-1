
---

# PHP-OOP-1

## Descrizione

Il progetto **PHP-OOP-1** è un esercizio di ripasso sui concetti fondamentali della programmazione orientata agli oggetti (OOP) in PHP. L'obiettivo è creare una classe `Movie`, istanziare oggetti di questa classe e organizzare il codice in modo modulare per una gestione più chiara e scalabile.

### Funzionalità

1. **Definizione della classe `Movie`**:
   - La classe `Movie` deve contenere:
     - **Variabili d'istanza** per memorizzare le informazioni relative ai film (ad esempio, titolo, anno, genere).
     - **Un costruttore** per inizializzare le variabili d'istanza al momento della creazione dell'oggetto.
     - **Almeno un metodo** che permetta di manipolare o visualizzare le informazioni dei film.

2. **Creazione e stampa degli oggetti**:
   - Vengono creati almeno due oggetti della classe `Movie`.
   - I valori delle proprietà di questi oggetti vengono stampati a schermo.

3. **Bonus 1**:
   - Modificare la classe `Movie` in modo che possa accettare più di un genere per ogni film (ad esempio, un film potrebbe appartenere sia al genere “Commedia” che al genere “Drammatico”).

4. **Bonus 2**:
   - Creare un layout completo che mostri una lista di film. 
   - Organizzare il codice in modo modulare:
     - Creare un file **db.php** per contenere i dati (array di oggetti).
     - Mettere la classe `Movie` in un file separato, all’interno di una cartella **Models/**.
     - Organizzare il layout, separando la struttura e i contenuti in file e parziali dedicati.

### Struttura del progetto

1. **index.php**: Il file principale dove vengono istanziati gli oggetti e vengono visualizzate le informazioni dei film.
2. **Models/Movie.php**: La classe `Movie` definita in questo file.
3. **db.php**: Il file contenente i dati (array di oggetti `Movie`).
4. **layout**: La struttura completa per la visualizzazione dei film.

### Tecnologie utilizzate

- **PHP**: Per la programmazione orientata agli oggetti (OOP).
- **HTML**: Per la creazione del layout di visualizzazione dei film.
- **CSS** (opzionale): Per migliorare l’aspetto visivo della lista di film.

---
