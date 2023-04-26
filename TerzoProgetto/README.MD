# Introduzione
Uso di Docker Compose per la creazione di uno stack LAMP (APACHE, PHP, MySQL) con phpmyadmin per gestire il mio database.
Alpine e' un piccolissimo container in un sistema Linux minimale.
Non ho bisogno di installare Apache o PHP sulla mia macchina, ma uso i container, che espongono delle porte
80 per il web server e 443 per il database server e dovrò mappare tali porte sulla mia macchina

## docker hub
Leggere la documentazione su: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-apache.html 

## Docker Compose
[Sintassi Compose File](https://docs.docker.com/compose/compose-file/03-compose-file/).

Il [file compose](https://docs.docker.com/compose/compose-file/03-compose-file/)
è un file di confronto yaml che:
- descrive i services; (Ogni singolo servizio farà riferimento ad un'immagine)
- esporrà delle porte; 
- avrà delle tipologie di networks (non utile in questo progettino)
- etc. Vedi il file [docker-compose.yml](#) del progetto per maggiori informazioni.

### docker-compose.yml
Dentro il file ho definito i miei servizi: *server web* e *server database*.
Ho mappato le porte (porte locali con porte del container) e i volumi (le cartelle e i file locali con le cartelle e i file del container).
Quando ho finito di scrivere il file eseguo da terminale (dentro la cartella del progetto):
            docker-compose up
Con tale comando docker si va a scaricare dal web i vari layer che il distributore di qeusto container ha creato 

In altre parole, l'idea e' che con queste istruzioni, io stia costruendo in locale un'immagine presa da remoto

Io posso impostare un sito web in una cartella locale, farlo montare al container e averlo sul sito web, senza bisogno
di aver installato in locale un server web, un database etc.
#### gestione di MySQL nel docker hub
cerco mysql in hub.docker.com e scelgo l'immagine ufficiale

In sostanza è come se avessi una sorta di due macchine che vanno ad essere collegate in qualche modo.

#### gestione di phpmyadmin
cerco phpmyadmin in hub.docker.com e scelgo l'immagine migliore (maggiormente supportata e votata)