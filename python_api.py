#!/usr/bin/python3

from flask import Flask

app = FLask(__name__)

@app.route('/hello')
def hello():
	return 'Hello, world!'
	
if __name__ == '__main__':
	app.run(host='10.0.2.15', port=3000)
	
	
