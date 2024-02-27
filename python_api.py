#!/usr/bin/python3

from flask import Flask, request, jsonify
import pwd
import grp


app = Flask(__name__)

auth = ("test", "abcABC123")

@app.route('/api/users', methods=["POST"])
def users():
	if request.authorization and request.authorization.username == auth[0] and request.authorization.password == auth[1]:
		all_users = [user.pw_name for user in pwd.getpwall()]
		return jsonify({"users": all_users})
	else:
		return "unauthorized", 401

@app.route('/api/groups', methods=["POST"])
def groups():
	if request.authorization and request.authorization.username == auth[0] and request.authorization.password == auth[1]:
		all_groups = [group.gr_name for group in grp.getgrall()]
		return jsonify({"groups": all_groups})
	else:
		return "unauthorized", 401
if __name__ == '__main__':
	app.run(host='localhost', port=3000)
	
	
