Per costruire la mia applicazione è semplice:
- creo un Dockerfile: lo nomino 'Dockerfile'
- - in tale file vado a gestire i vari layer, cioè come andrà a costruire la mia applicazione:
- - - un livello di base: in cui gli dico che distribuzione voglio e con quali caratteristiche
- - - su hub.docker.com ho la raccolta di tutte le immagini ufficiali
- - - nel sito cerco l'immagine di python: visto che ho la versione di python 3.11 nel mio pc, allora scelgo la 3.10.11-alpine 