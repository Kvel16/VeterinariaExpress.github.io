<?php
    header("Content-type: text/css; charset: UTF-8");
?> 



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
}

body, html {
	font-family: sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.container-table100 {
  width: 100%;
  min-height: 100vh;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 25px 30px;
    -webkit-background-sixe: cover;
    -moz-background-sixe: cover;
    -moz-background-sixe: cover ;
    background-size: cover;
    max-width: 100%;
    overflow-x: hidden;
}


.limiter {
  width: 100%;
}

h1{
  margin-top: 2.4em;
  color: black;
  font-size: xxx-large;
  font-weight: bolder;
  text-align: center;
}

.wrap-table100 {
  //width: 960px;
  border-radius: 10px;
  overflow: hidden;
}

.table {
  width: 100%;
  display: table;
  margin: 0;
  border: 4px solid #6c7ae0;
  border: 9px groove #6d77ff;
  border-radius: 8px;
}

@media screen and (max-width: 768px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #fff;
}

.row.header {
  color: #ffffff;
  background: #6c7ae0;
}

@media screen and (max-width: 768px) {
  .row {
    display: block;
  }

  .row.header {
    padding: 0;
    height: 0px;
  }

  .row.header .cell {
    display: none;
  }

  .row .cell:before {
    font-family: Poppins-Bold;
    font-size: 12px;
    color: #808080;
    line-height: 1.2;
    text-transform: uppercase;
    font-weight: unset !important;

    margin-bottom: 13px;
    content: attr(data-title);
    min-width: 98px;
    display: block;
  }
}

.cell {
  display: table-cell;
}

@media screen and (max-width: 768px) {
  .cell {
    display: block;
  }
}

.row .cell {
  font-family: 'Monseratt', sans-serif;
  font-size: 15px;
  color: #666666;
  line-height: 1.2;
  font-weight: unset !important;

  padding-top: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #f2f2f2;
}

.row.header .cell {
  font-family: 'Monseratt', sans-serif;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset !important;

  padding-top: 19px;
  padding-bottom: 19px;
}

.row .cell:nth-child(1) {
  width: 180px;
  padding-left: 30px;
}

.row .cell:nth-child(2) {
  width: 220px;
}

.row .cell:nth-child(3) {
  width: 135px;
}

.row .cell:nth-child(4) {
  width: 160px;
}

.row .cell:nth-child(5) {
  width: 160px;
}

.row .cell:nth-child(6) {
  width: 120px;
}

.row .cell:nth-child(7) {
  width: 120px;
  text-align: center;
}

.row .cell:nth-child(8) {
  width: 120px;
  text-align: center;
}


.table, .row {
  width: 100% !important;
}

.row:hover {
  background-color: #a6b1ff;
  cursor: pointer;
}

@media (max-width: 768px) {
  .row {
    border-bottom: 1px solid #f2f2f2;
    padding-bottom: 18px;
    padding-top: 30px;
    padding-right: 15px;
    margin: 0;
  }
  
  .row .cell {
    border: none;
    padding-left: 30px;
    padding-top: 16px;
    padding-bottom: 16px;
  }
  .row .cell:nth-child(1) {
    padding-left: 30px;
  }
  
  .row .cell {
    font-family: Poppins-Regular;
    font-size: 18px;
    color: #555555;
    line-height: 1.2;
    font-weight: unset !important;
  }

  .table, .row, .cell {
    width: 100% !important;
  }

  
}

.columnacerrar{
    text-align: center;
    margin-right:  5px;
    height: 0px;
    padding: 8px;
    display: inline-block;
    align-items: center;
    justify-content: center;
  }

/*footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    margin-top: 50em;
    height: 20px;
    padding: 5px 0px;
    clear: both;
  text-align: center;
}*/