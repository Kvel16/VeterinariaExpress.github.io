<?php
    header("Content-type: text/css; charset: UTF-8");
?> 


.header{
    height: 338px;
    padding: 8px 8px 8px 8px;
    background-image: url(../Imagenes/fondo.jpg);
    background-size: cover;
    font-family: 'Monseratt', sans-serif;
    border-radius: 20px;
    text-align: center;
}

.avatar{
    width:200px;
    height: 200px;
    border-radius: 50%;
    margin-left: none;
}

.user-name{
    font-size: 84px;
    margin-top: 4px;
    margin-bottom: 7px;
    font-family: 'Monseratt', sans-serif;
    color:rgba(255, 255, 255, 0.856);
    font-weight: bolder;
    -webkit-text-stroke: 3px;
    -webkit-text-stroke-color: black;
}

.user-dates{
    font-size: 22px;
    margin: 5px;
    font-family: 'Monseratt', sans-serif;
    color: #ffffff;
    font-weight: bolder;
    -webkit-text-stroke: 1.3px;
    -webkit-text-stroke-color: black;
}

li{
    display: inline-block;
    text-align: center;
}  

.columnacompras, .columnamascota, .columnaconsultas, .columnahome, .columnaupdate, .columnacerrar{
    text-align: center;
    margin-right:  5px;
    height: 0px;
    padding: 8px;
    display: inline-block;
  }

article{
    text-align: center;
    font-weight: bold;
    font-family: 'Monseratt', sans-serif;
}

footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    margin-top: -50px;
    height: 20px;
    padding: 5px 0px;
    clear: both;
    text-align: center;
}
