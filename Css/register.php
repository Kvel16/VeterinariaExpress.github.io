<?php
    header("Content-type: text/css; charset: UTF-8");
?> 

body{
  margin: 0;
  padding: 0;
  background: url(../Imagenes/logincliente.jpeg) no-repeat center top;
  background-size: cover;
  font-family: 'Monseratt', sans-serif;
  height: 100vh;
}

.login-box {
  background: #000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
  margin: 3px;
  border: 3px solid black;
  border-radius: 20px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 29px;
}
a {
  margin-top: 0px;
  margin-bottom: 40px;
  font-size: 16px;
}

.contenedor{
  width: 100%;
  padding: 15px;
}

.register {
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
  outline: none;
}

.register input[type="text"]{
  font-family: 'Monseratt', sans-serif;
  margin: 3px;
  border: 3px solid black;
  border-radius: 10px;
  text-align: center;
  outline: none;
  font-size: 20px;
  padding: 5px;
  background-color: transparent;
  transition: 0.25s;
  color: azure;
}
.register input[type="text"]:hover{
  transition: 0.25s;
  background-color: white;
  color: black;
}

.register input[type="text"]:focus{
 background-color: white;
 transition: 0.25s;
 color: black;
}


.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 35px;
  width: 130px;
  background: #1603bdd7;
  color: #fff;
  font-size: 17px;
  border-radius: 17px;
}

.login-box input[type="submit"]:hover {
  cursor: pointer;
  background: #1f7be4;
  color: #000;
}

form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
  outline: none;
}
