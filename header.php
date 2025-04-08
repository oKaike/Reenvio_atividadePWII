<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar Tarefas</title>
</head>
<body>

    <style>
/* Estilo global para o corpo da página */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
    text-align: center;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.tabela-excel {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.tabela-excel th, .tabela-excel td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.tabela-excel th {
    background-color: #f1f1f1;
    color: #333;
    font-weight: bold;
}

.tarefa {
    background-color: #007bff; 
    color: white;
}

.tabela-excel tr:nth-child(even) {
    background-color: #f9f9f9;
}

.tabela-excel tr:hover {
    background-color: #e9e9e9;
}

    </style>
    <div class = ".container">
<h1>Agenda</h1>