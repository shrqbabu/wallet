from flask import Flask, render_template, request, redirect
from db import mysql, init_db

app = Flask(__name__)

init_db(app)


# READ
@app.route("/")
def index():

    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM users")

    users = cur.fetchall()

    cur.close()

    return render_template("index.html", users=users)


# CREATE
@app.route("/add", methods=["POST"])
def add():

    name = request.form["name"]
    email = request.form["email"]

    cur = mysql.connection.cursor()

    cur.execute("INSERT INTO users(name,email) VALUES(%s,%s)",(name,email))

    mysql.connection.commit()
    cur.close()

    return redirect("/")


# DELETE
@app.route("/delete/<id>")
def delete(id):

    cur = mysql.connection.cursor()

    cur.execute("DELETE FROM users WHERE id=%s",(id,))

    mysql.connection.commit()
    cur.close()

    return redirect("/")


if __name__ == "__main__":
    app.run(debug=True)
