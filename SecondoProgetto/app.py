from flask import Flask
import redis

app = Flask(__name__)

cache = redis.Redis(host="redis", port=6379) # porta di default di redis: 6379

@app.route("/")
def hello_world():
    # Molto semplicemente, quando verrà chiamata la root del nostro progetto proveremo ad incrementare la cache
    # e ritorniamo all'utente il valore che è stato letto dalla cache
    value = cache.incr("test") # la chiave e' "test"
    return f"test 3 = {value}"
    