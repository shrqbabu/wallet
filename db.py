from flask_mysqldb import MySQL

mysql = MySQL()

def init_db(app):

    app.config['MYSQL_HOST'] = 'mysql.railway.internal'
    app.config['MYSQL_USER'] = 'root'
    app.config['MYSQL_PASSWORD'] = 'ueNfAawdvFLbtEFZvhrMbzfnIKoUsRlS'
    app.config['MYSQL_DB'] = 'railway'

    mysql.init_app(app)
