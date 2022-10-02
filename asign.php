

<style>
    hr{
        margin-top:20px;
    }

table {
    border-radius:10px;
    background-color: #091e41 ;
    margin-left: 10% ;
    margin-top: 40px ;
    color: gold;
    transition : 2s;
    font-family:Arial;
}
table:hover{

        background-image: url(2.jpg);
        border-radius:10px;
        color:white;
}

     table:hover { 
        transform : scale(1.4);
     }
     td:hover {
        background-color: green;
        border-radius:10px;
        color:white;
        transition : 1s;
     }
     tr:hover {
        background-color: #00102b;
        border-radius:10px;
        color:gold;
        transition : 0.2s;
         }
     .t {

        font-weight:bold;
        
        }
        h1{
    margin-left: 14% ;
    margin-top: 50PX ;
    background-color:#091e41 ;
    border-radius:20px;
    color: gold;
    font-weight:bold;
    width: 30%;
    height: 6%;
    padding:1%;
    font-size:130%;
    text-align:center;
        }
        H1:hover {
    background-color:purple;
    color:white;
    transition:2s;
}
H1:hover {
    transform : scale(1.4);
       }



</style>

<?php

$ID=4114;
$name="Mohamed saciid Abdulle";
$faculty="Computer Science";
$gender="Male";
$dob="16/6/2001";
$grade="B+";
$Percentage="89%";

?>
<hr  style= "size="4px" color="#091e41">
<h1> Table assignment </h1>


<table border="1">

    <tr> <td class="t"> Student ID   </td>  <td> <?php echo"$ID";                  ?> </td> </tr>
    <tr> <td class="t"> Student Name </td>  <td> <?php echo"$name";                ?> </td> </tr>
    <tr> <td class="t"> Faculty      </td>  <td> <?php echo"$faculty";             ?> </td> </tr>
    <tr> <td class="t"> Gender       </td>  <td> <?php echo"$gender";              ?> </td> </tr>
    <tr> <td class="t"> Date of Bith          </td>  <td> <?php echo"$dob" ;       ?> </td> </tr>
    <tr> <td class="t"> Grade        </td>  <td> <?php echo"$grade" ;              ?> </td> </tr>
    <tr> <td class="t"> Percentage        </td>  <td> <?php echo"$Percentage" ;    ?> </td> </tr>

</table>


<style>

p{
    background-color:#091e41 ;
    border-radius:20px;
    color: gold;
    font-weight:bold;
    width: 30%;
    height: 6%;
    margin-left: 58%;
    margin-top:-31%;
    padding:1%;
    font-size:130%;
    text-align:center;
}
p:hover {
    background-color:purple;
    color:white;
    transition:2s;
}
p:hover {
    transform : scale(1.4);
       }

       form{
    background-color:#091e41 ;
    border-radius:20px;
    width: 30%;
    height: 30%;
    margin-left: 58%;
    margin-top:3.5%;
    padding:1%;
    text-align:center;
       }
       form:hover {
        background-color:purple;
        transition:2s;
        color:white;
       }
       form:hover{
        transform: scale(1.3);
       }


       .txt{
        margin-top:4px;
        border-radius:8px;
        border:none;
        padding:2px;
       }


       .btm{
        background-color:gold;
        padding:2%;
        border:none;
        border-radius:10px;
        margin-left:6%;
        margin-right:6%;
        font-weight:bold;
        text-align:center;
        width:30%;
        margin-top:-6px;
        
       }
       .btm:hover{
        background-color:#091e41;
        color:gold;
        font-weight:bold;
        cursor:pointer;
       }

btm
</style>

<?php

?>
<p> Registration Form </p>
<form action="Display.php" method="POST">
    <input type="text" name="Fname" placeholder="  Full name" class="txt"><br><br>
    <input type="password" name="password" placeholder="  Password" class="txt"><br><br>
    <input type="reset" name="Clear" value="Clear" class="btm">
    <input type="submit" name="Send" value="Send" class="btm">
    
    

</form>
<br><br><br>
<hr  style= "size="4px" color="#091e41">