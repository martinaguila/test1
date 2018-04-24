<!DOCTYPE HTML>
<html>
<head>
<title>Plan</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/first/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container-fluid" style="margin-top: 5%;" method="POST" action="connection.php">
    <form>
        <div class="col-md-5 col-sm-5 col-xs-5" style="background-color: #ed7474; margin-left: 5%;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3 style="text-align:center; border: .5px solid black; margin-top: 5%; padding: 5%;"> Team 1 </h3>  
                </div>
            </div>

            <div class="row" style="height: 10%;">
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <button type="button" onclick="btn3()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%px; margin: 15%;"> 3 </p>
                    </div>    
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <button type="button" onclick="btn2()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%; margin: 15%;"> 2 </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <button type="button" onclick="btn1()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%; margin: 15%;"> 1 </p>
                    </div>
                </div>
            </div>

            <div class="row" style="height: 50%;">
            </div> 

            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-xs-offset-4" style="padding: 5%; border: .5px solid black; margin-bottom: 5%;">
                    <h1 align="center"><label id="output" type="number" value="0" style="height: 20%;">0</label></h1>
                </div>
            </div>
        </div>

    <script>
    function btn3() {
        var outout = +document.getElementById("output").innerText;
        document.getElementById("output").innerHTML = outout + 3;
    }
    function btn2() {
        var outout = +document.getElementById("output").innerText;
        document.getElementById("output").innerHTML = outout + 2;
    }
    function btn1() {
        var outout = +document.getElementById("output").innerText;
        document.getElementById("output").innerHTML = outout + 1;
    }

    /*  
    var add3 = document.getElementById("btn3");
    var add2 = document.getElementById("btn2");
    var add1 = document.getElementById("btn1");

    var outout = document.getElementById("output").value;

    if (target.id === 'add3') {
        document.getElementById("output").innerHTML = "3";
    }*/


    </script>

        <!-- NETX --> 

        <div class="col-md-5 col-sm-5 col-xs-5" style="background-color: #6f75e8; margin-left: 5%;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3 style="text-align:center; border: .5px solid black; margin-top: 5%; padding: 5%;"> Team 2 </h3>  
                </div>
            </div>

            <div class="row" style="height: 10%;">
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <button type="button" onclick="btn3_b()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%; margin: 15%;"> 3 </p>
                    </div>    
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <button type="button" onclick="btn2_b()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%; margin: 15%;"> 2 </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <button type="button" onclick="btn1_b()" class="btn btn-info" style="text-align:center; width: 65%; height: 20%; margin: 15%;"> 1 </p>
                    </div>
                </div>
            </div>

            <div class="row" style="height: 50%;">
            </div> 

            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-xs-offset-4" style="padding:5%; border: .5px solid black; margin-bottom: 5%;">
                    <h1 align="center"><label id="output_b" type="number" value="0" style="height: 20%; align-text:center;">0</label></h1>
                </div>
            </div>
        </div>
    </form>
    </div>

<script>
    function btn3_b() {
        var outout_b = +document.getElementById("output_b").innerText;
        document.getElementById("output_b").innerHTML = outout_b + 3;
    }
    function btn2_b() {
        var outout_b = +document.getElementById("output_b").innerText;
        document.getElementById("output_b").innerHTML = outout_b + 2;
    }
    function btn1_b() {
        var outout_b = +document.getElementById("output_b").innerText;
        document.getElementById("output_b").innerHTML = outout_b + 1;
    }

    /*
    var add3 = document.getElementById("btn3");
    var add2 = document.getElementById("btn2");
    var add1 = document.getElementById("btn1");

    var outout = document.getElementById("output").value;

    if (target.id === 'add3') {
        document.getElementById("output").innerHTML = "3";
    }*/


    </script>        

</body>

</html>

<style>/*
div{
    border: .5px solid black;
}*/

</style>