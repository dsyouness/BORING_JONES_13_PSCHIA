#! /usr/bin/env python
#-*-coding:utf-8-*-

from flask import Flask, request, jsonify
from flask_restful import Resource, Api
import unidecode

from flasgger import Swagger


app                         = Flask(__name__)
app.config['SECRET_KEY']    = 'secret!'
api         = Api(app)


@app.route('/')
def init():
    return ''

@app.route('/text/geoname', methods=['POST'])
def getGeonameInText():

    """
    This examples uses FlaskRESTful Resource
    It works also with swag_from, schemas and spec_dict
       ---
       parameters:
         - in: formData
           name: text
           type: string
           required: true
       responses:
         200:
           description: A single user item
           schema:
             id: User
             properties:
               username:
                 type: string
                 description: The name of the user
                 default: Steven Wilson
    """

    text = request.form['text']

    print ("_text: ",_text)
    result = {"test": _text}
    print(result)
    return jsonify(result)

if __name__ == '__main__':

    Swagger(app)
    app.run(host='0.0.0.0', port='5002')
    #server = pywsgi.WSGIServer(('', 5002), app, handler_class=WebSocketHandler)
    #server.serve_forever()
