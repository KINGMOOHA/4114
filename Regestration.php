<style>

p{
    background-color:#091e41 ;
    border-radius:20px;
    color: gold;
    font-weight:bold;
    width: 30%;
    height: 6%;
    margin-left: 25%;
    margin-top:7%;
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
    height: 80%;
    margin-left: 25%;
    margin-top:2%;
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
