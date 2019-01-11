 <!DOCTYPE html>
   <head>
     <title>LOGIN</title>
     <style>
     html{
       margin: o auto;
       background-image: url("b.png");
       background-repeat: no-repeat;
       background-size:100% 100%;
       color:cyan;
     }

     body{
       font-family:fantasy;
       height: 100vh;
       color: #191970;
       font-size: 70px;
     }
     form{
       width: 300px;
       height: 300px;
       text-align: center;
       margin: 0 auto;
       background-color: rgb(245, 245, 245);
       margin: 0 auto;
       margin-top: 90px;
       font-size: 30px;
       font-family:georgia;
       border-radius: 50px;
       transform: scale3d();
       box-shadow: 5px 5px 6px black;
     }
     form:hover{
       box-shadow: 5px 5px 6px black;
       transform: scale(1.1);
       border-radius: 50px;
     }
     .login{
       border: 0;
       border: 2px solid grey;
       padding-left: 10px;
       border-radius: 10px;
       font-size: 17px;
       height: 45px;
       width: 200px;
       transition: width 0.5s;
       box-sizing: border-box;
       color:#191970 ;
       text-align: center;
     }
     .login:focus{
       border: 2px solid grey;
       background-color:;
       color: black;
       box-shadow: 1px 1px 1px 1px cyan;
       width: 50%;
       border-radius: 10px;

     }

     input{
           background-color: rgb(192, 192, 192);
           padding: 10px;
           color: black;
           font-size: 20px;
           letter-spacing: 0.1em;
           border-radius: 5px;
           border: 2px solid grey;
           box-shadow: 1px 3px 5px rgba(0,0,0,0.5);
           width: 150px;
           margin-left: 10px;
           transition: all 0.75s;
       }
       input:hover{
       background-color: #778899;
       color: black;
     }
     img{
     padding: 3px 1px;
     width: 100px;
     height: auto;

     }
     </style>
   </head>
   <body>
     <form action="login.php" method="post">
       Nis     :
       <br>
       <input type="text" name="nis"><br>
       Password:
       <br>
       <input type="password" name="password"><br>
       <br>
       <br>
       <input type="submit" name="submit" value="SIGN IN">
     </form>
   </body>
 </html>
