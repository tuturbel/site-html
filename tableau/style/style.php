<?php
    header("Content-type: text/css; charset: UTF-8");
    $Jour = "black"
?>

* {
    background-color: <?=$Jour?>; 
    margin: 2px;
    padding: 0px;
}

.haut {
    display: flex;
}

.logo {
    width: 10%;
    height: 100px;
    border-radius: 5px ;
    text-align: center;
}

.banner {
    width: 90%;
    height: 100px;
    background-color: rgb(189, 184, 183);
    border-radius: 5px ;
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}



.centre{
    display: flex;
}

.content {
    width: 55%;
    height: 350px;
    background-color: #999a99;
    border-radius: 5px ;
    font-size: 20px;
}

.content a {
    text-decoration: none;
    background-color:#999a99;
    color: aqua;
}

.content ul {
    text-decoration: none;
    background-color:#999a99;
}
.content li {
    text-decoration: none;
    background-color:#999a99;
    margin-left: 70px;
}

.aside {
    width: 45%;
    height: 350px;
    background-color: #999a99;
    border-radius: 5px ;
}

.aside table {
    width: 100%;
    height: 100%;
    background-color: #999a99;
}

.aside td {
    background-color: #999a99;

}



.footer {
    background-color: rgb(95, 94, 94);
    width: 100%;
    height: 40px;
    border-radius: 5px ;
    display: flex;
    align-items: center;
    justify-content: center;
}

.footer a {
    text-decoration: none;
    background-color:rgb(95, 94, 94);
    color: aqua;
}

