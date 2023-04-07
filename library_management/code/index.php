<html>
<head>
  <title>Library Management System</title>
  <style>
    table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #333}

th {
  background-color: #444;
  color: white;
}

form {
  background-color: #006622;
  color: white;
  padding: 20px;
  border-radius: 5px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #009933;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #00b944;
}

/* .btn {
  background: #fff;
  color: darkred;
  font-size: 1.2em;
  padding: 10px 30px;
  text-decoration: none;
} */
  </style>
</head>
<body>
  <h1>Library Management System</h1>
  <form action="add_book.php" method="post">
    <p>
      <label for="title">Book Title:</label>
      <input type="text" id="title" name="title">
    </p>
    <p>
      <label for="author">Book Author:</label>
      <input type="text" id="author" name="author">
    </p>
    <p>
      <label for="subject">Book Subject:</label>
      <input type="text" id="subject" name="subject">
    </p>
    <input type="submit" value="Submit">
  </form>
  
 
    <br><br><br>

    <table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Subject</th>
    <th>Operation</th>
  </tr>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `books` WHERE id = '$id'";  
    $run = mysqli_query($conn,$query);  
    if ($run) {  
         header('location:index.php');  
    }else{  
         echo "Error: ".mysqli_error($conn);  
    }  
}  

  $sql = "SELECT * FROM books";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>".$row['id']."</td>
            <td>".$row['title']."</td>
            <td>".$row['author']."</td>
            <td>".$row['subject']."</td>
            <td>
            <a href = 'index.php?id=".$row['id']."' class='btn'>Delete</a>
            </td>
          </tr>
        ";
    
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
  ?>
</table>

<script>
 let  
</script>



</body>
</html>