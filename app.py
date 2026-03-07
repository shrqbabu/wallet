from flask import Flask, render_template, request, redirect
import pymysql
import os

app = Flask(__name__)

# MySQL connection
connection = pymysql.connect(
    host="mysql.railway.internal",
    user="root",
    password="ccGrEaKeutTOFDmDGSstADzeuOVQffYt",
    database="railway",
    cursorclass=pymysql.cursors.DictCursor
)

# READ
@app.route("/")
def index():
    cursor = connection.cursor()
    cursor.execute("SELECT * FROM users")
    users = cursor.fetchall()
    return render_template("index.html", users=users)


# CREATE
@app.route("/add", methods=["POST"])
def add():
    name = request.form["name"]
    email = request.form["email"]

    cursor = connection.cursor()
    cursor.execute(
        "INSERT INTO users(name,email) VALUES(%s,%s)",
        (name,email)
    )
    connection.commit()

    return redirect("/")


# UPDATE
@app.route("/update/<int:id>", methods=["POST"])
def update(id):

    name = request.form["name"]
    email = request.form["email"]

    cursor = connection.cursor()

    cursor.execute(
        "UPDATE users SET name=%s,email=%s WHERE id=%s",
        (name,email,id)
    )

    connection.commit()

    return redirect("/")


# DELETE
@app.route("/delete/<int:id>")
def delete(id):

    cursor = connection.cursor()

    cursor.execute(
        "DELETE FROM users WHERE id=%s",
        (id,)
    )

    connection.commit()

    return redirect("/")


if __name__ == "__main__":
    port = int(os.environ.get("PORT", 5000))
    app.run(host="0.0.0.0", port=port)
