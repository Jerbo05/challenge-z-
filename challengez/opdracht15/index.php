<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="margin: 50px">
    <h1>studenten</h1> 
    <br>
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>First_name</th>
                  <th>Last_name</th>
                  <th>age_number</th> 
             </tr>
        </thead>

        <tbody>
            <?php
                //phpinfo();
                $servername ="localhost";
                $username ="root";
                $password ="";
                $database ="studenten";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database); 

                // Check connection
                if     ($connection->connect_error) {
                    die("Connection failed:  " . $connection->connect_error);
                }
                
                // read all row from database table
                $sql = "SELECT * FROM employees ORDER BY first_name ASC"; 
                $result = $connection->query($sql);

                // check if we have a valid result 
                // if (!$result) {
                //     die("invalid query:   "  . $connection->);
                // }

                
                    // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["age_number"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm'  href='update'>Update</a>
                        <a class='btn btn-primary btn-sm'  href='delete'>Delete</a>
                    </td>
                    </tr>  ";
            
                }

        
            
            ?>
        </tbody>   
    </table>
</body>
</html>