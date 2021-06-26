<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to bank application.</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">


<style type="text/css">
body{
background-color: cadetblue;
}
.container{

background-color: white;
border: 4px solid blue;
border-radius: 25px;
text-align: center;
text-decoration: underline;
}

table{
border: 2px solid black;

margin-left: 450px;

}
table,tr{
border: 2px solid black;

}

table, tr, td{

border: 3px solid black;
padding: 10px;
}
</style>
</head>
<body>

<div class="container">

<header><h1>Welcome to Bank -B..</h1></header>

<hr>

<form action="" method="post">


<table>

<tr>
<td>Enter Account number</td>
<td><input type="number" name="accno" required></td>

</tr>

<tr>
<td>Customer name:</td>
<td><input type="text" name="cname" required></td>

</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="Address" required></td>

</tr>

<tr>
<td>Account type:</td>
<td><input type="text" name="actype" required></td>

</tr>

<tr>
<td>balance:</td>
<td><input type="number" name="balance" required></td>

</tr>


</table>
<hr>

<div class="buttons">

<button class="btn btn-primary" name="create">create Acc</button> 	<button class="btn btn-primary" name="deposit">Deposit</button> 
<button class="btn btn-primary" name="withdraw">Withdraw</button>   	<button class="btn btn-primary" name="balance">Balnce Enquiry</button> 



</div>


</div>
</body>
</html>