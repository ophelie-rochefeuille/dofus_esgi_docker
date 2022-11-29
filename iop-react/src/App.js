import logo from './logo.svg';
import './App.css';
import axios from "axios";
import React from "react";

const baseURL = "http://localhost:9999/grades";


function App() {
   /* const [notes, setNotes] = React.useState(null);

    React.useEffect(() => {
        axios.get(baseURL).then((response) => {
            setNotes(response.data)
        })
    }) */
  return (
    <div className="App">
      <h1>Docker Soutenance</h1>
        <h3>Objectifs</h3>
        <p>Création d'images avec Dockerfile pour Symfony / Express JS / React  ✔</p>
        <p>Création et connexion à une BDD Mysql ✔</p>
        <p>Connexion avec phpMyAdmin ✔</p>
        <p>Utilisation de Traefik avec comme point d'entrée React ✔</p>
        <p>Email utilisable depuis Symfony ✔</p>
        <p>Utilisation du cache avec Symfony  <strong>?</strong></p>
        <p>Utilisation de Traefik avec https ✘</p>
        <p>Création d'images pour la MEP ✘</p>


    </div>
  );
}

export default App;

