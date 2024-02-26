#!/usr/bin/python3

from flask import Flask, request, jsonify
import getpass

app = Flask(__name__)

auth = ("test", "abcABC123")

@app.route('/api/users', methods=["POST"])
def users():
	if request.authorization and request.authorization.username = auth[0] and request.authorization.password = auth[1]:
	users = getpass.getuser()
	return jsonify({"users": users})
	else:
	return "unauthorized", 401

@app.route('/api/groups', methods=["POST"])
def groups():
	if request.authorization and request.authorization.username = auth[0] and request.authorization.password = auth[1]:
	groups = getpass.getgroups()
	return jsonify({"groups": groups})
	else:
	return "unauthorized", 401
	
if __name__ == '__main__':
	app.run(host='0.0.0.0', port=3000)
	
	
