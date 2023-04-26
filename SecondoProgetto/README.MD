# Tecnologie
Utilizzo di Docker Compose per creare una semplice applicazione web in Python. Userò:
- Python con Flask
- Redis come servizio di Data store.
Flask: micro framework in Python molto semplice per realizzare applicazioni web minimali
Redis: e' un memory data store con molte possibilità di utilizzo

# Cosa fa questa applicazione
L'applicazione e' minimale: molto semplicemente, quando verrà chiamata la root del nostro progetto proveremo ad incrementare la cache
e ritorniamo all'utente il valore che è stato letto dalla cache

# Utilita' di Docker per questa applicazione:
Il mio problema e' che non ho Redis installato e non lo voglio installare nella mia macchina, ma lo voglio installare come 
un altro container Docker. I container possono comunicare tra di loro

# File delle dipendenze
il classico file di python per gestire delle dipendenze si chiamata: requirements.txt in cui elenco i moduli che mi servono
- flask
- redis

# Creazione del Dockerfile
La mia versione di python e' la 3.11, quindi uso la 3.10.11-alpine
- Al termine del file, a linea di comando faccio: docker build -t flask-app .

# Docker Compose
Docker Compose mi permetterà di far comunicare la mia applicazione con Redis
Redis non lo ho (non ho detto: nella mia app installo anche Redis), non lo installato.
E' un container diverso.
## docker-compose.yml
- Al termine di questo file, a linea di comando faccio:  docker compose up.
- I volumes sono utili ad esempio per far riflettere le modifiche che faccio al codice anche durante l'esecuzione del container. In altre parole, mi evita di dover fare la build ogni volta che modifico il codice, ma solo il docker compose up

