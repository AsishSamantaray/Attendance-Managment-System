import os
import sys
import json

from gevent.pywsgi import WSGIServer
from flask import Flask, request, session, url_for, redirect, send_file, render_template, jsonify

app = Flask(__name__, static_url_path="/static")

@app.route("/")
def hello():
    return "Hello world"



if __name__ == '__main__':
    port = int(os.environ.get('PORT', 5000))
    http_server = WSGIServer(('',port), app)
    http_server.serve_forever()
