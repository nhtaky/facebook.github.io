<?php

  $from = "<style>
             form {
             border: 3px solid #f1f1f1;
             }
             input[type=text], input[type=password] {
             width: 100%;
             padding: 12px 20px;
             margin: 8px 0;
             display: inline-block;
             border: 1px solid #ccc;
             box-sizing: border-box;
             }
             .login{
             background-color: #4CAF50;
             color: white;
             padding: 14px 20px;
             margin: 8px 0;
             border: none;
             cursor: pointer;
             width: 100%;
             }
             .imgcontainer {
             text-align: center;
             margin: 24px 0 12px 0;
             }
             img.avatar {
             width: 40%;
             border-radius: 50%;
             }
             .container {
             padding: 16px;
             }
           </style>
           <form action=index.php method=post>
             <div class=imgcontainer>
               <img src=../images/hacker.png alt=Avatar class=avatar>
             </div>
             <div class=container>
               <label for=uname><b>Username</b></label>
               <input type=text placeholder=Enter Username name=username required>
               <label for=psw><b>Password</b></label>
               <input type=password placeholder=Enter Password name=password required>
               <input type=submit name=submit value=Login class=login>
             </div>
            </form>";
  $username = "root";
  $password = "root@password";

  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    require_once "../config.php";
    
    $sql = "SELECT * FROM user_data;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0 ) {

      echo "<style>
              table,th,td{
                border: 1px solid black;
              }
            </style>
            <table>
              <tr>
                <th>ID</th>
                <th>username</th>
                <th>Password</th>
              </tr>";

      while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["password"]."</td>
              </tr>";
      }
      echo "</table>";
    }
  }
  else {
    echo $from;
  }
?>