# L'immagine di python che uso e':
FROM python:3.10.11-alpine
# La mia cartella di lavoro all'interno della macchina virtuale e' /code
WORKDIR /code
# Ho delle variabili d'ambiente che sono FLASK_APP, FLASK_RUN_HOST  (che mi servono per lavorare con il framework flask)
ENV FLASK_APP=app.py
ENV FLASK_RUN_HOST=0.0.0.0
# Ho il problema di copiare i file requirements.txt dalla mia cartella corrente alla WORKDIR /code
COPY requirements.txt requirements.txt
# E' necessario eseguire, dentro alla /code il pip install delle dipendenze elencate in requirements.txt
RUN pip install -r requirements.txt
# La porta che espone flask e' la 5000
EXPOSE 5000
# Copio il contenuto della cartella corrente dentro a /code
COPY . .
# Do la lista di comandi da eseguire
CMD ["flask", "run"]

# Apro il terminale e faccio:
#       docker build -t flask-app .