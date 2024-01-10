const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const mysql = require('mysql');

const app = express();
const port = 3000;
app.use('/Login page', express.static(path.join(__dirname, 'Login page')));

app.use('*.css', (req, res, next) => {
    res.sendFile(req.url, { root: path.join(__dirname, 'Login page') });
});

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '123456789',
  database: 'websiteDB'
});

connection.connect((err) => {
  if (err) {
    console.error('Erreur de connexion à la base de données :', err);
    return;
  }
  console.log('Connecté à la base de données MySQL');
});

app.get('/login', (req, res) => {
    res.sendFile('login.html', { root: __dirname });
});

app.post('/login', (req, res) => {
    const { username, password } = req.body;
  
    const query = 'SELECT * FROM users WHERE user_login = ? AND user_password = ?';
  
    connection.query(query, [username, password], (error, results, fields) => {
      if (error) {
        console.error('Erreur lors de la requête SELECT :', error);
        res.status(500).json({ success: false, message: 'Erreur lors de la connexion' });
        return;
      }
  
      if (results.length > 0) {
        res.json({ success: true, message: 'Connexion réussie' });
      } else {
        res.json({ success: false, message: 'Identifiants incorrects' });
      }
    });
});

app.listen(port, () => {
    console.log(`Serveur en écoute sur le port ${port}`);
});