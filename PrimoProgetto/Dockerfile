# Voglio andare a prendere l'immagine python.
# (sto costruendo una macchina virtuale)
FROM python:3.10.11-alpine
# Aggiungo il mio file (o i miei file). In questo caso e' dentro questa cartella
ADD app.py .
# Per gestire eventuali dipendenze farei es.: RUN pip install ...
# Devi eseguire un comando (o un insieme di comandi)
CMD ["python","./app.py"]
# Ora ho descritto la mia immagine
# Per costruire la mia immagine (nella cartella corrente) devo fare da terminale: 
#           docker build -t python-demo .
#Docker cerchera' il Dockerfile, dopo aver dato questo comando, vedrò i vari livelli
# Ora dico a Docker di eseguire con io comando:
#           docker run python-demo
# L'applicazione e' stata eseguita all'interno di un container chiamato python-demo (lo vedo su Docker Desktop)