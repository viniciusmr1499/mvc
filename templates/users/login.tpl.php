<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    body{
        background:linear-gradient(120deg, #3498db,#8244ad,#3498db);
        background-size:200%;
    }
    .box .title-form{
        text-transform:uppercase;
        color:#333;
        text-align:center;
        font-family: 'Open Sans', sans-serif;
        padding-bottom:40px;
        font-weight:700;
    }
    .box{
        display:block;
        position:absolute;
        transform:translate(-50%,-50%);
        top:50%;
        left:50%;
        width:400px;
        padding:30px 20px;
        height:auto;
        background:#eee;
        box-shadow:2px 2px 4px rgba(0,0,0,.4);
        border-radius:10px;
        box-sizing:border-box;
    }
    .element-input{
        transition:.25s;
        display:block;
        width:14rem;
        margin:0 auto;
        padding:.6rem .5rem;
        border-radius:6px;
        font-family: 'Open Sans', sans-serif;
        outline:none;
        background:#ccc;
        border:none;
    }
    .element-input:focus{
        outline-color:#3498db;
        box-shadow:2px 2px 4px #8244ad;
    }
    .btn-form:hover{
        background:#8244ad;
        color:#ccc;
    }
    .btn-form{
        background:#4398db;
        transition:.25s;
        width:25%;
        display:block;
        border-radius:5px;
        padding:.5rem .6rem;
        border:none;
        outline:none;
        color:#fff;
        margin:0 auto;
        cursor:pointer;
        font-weight:bold;

    }
</style>
    <form method="post" class="box">
    <h1 class="title-form">Login</h1>
        <p><input type="text" class="element-input" name="" placeholder="Usuario" id=""></p>
        <p><input type="password" class="element-input" name="" placeholder="Senha" id=""></p>
        <input type="button" value="Enviar" class="btn-form">
    </form>
</body>
</html>