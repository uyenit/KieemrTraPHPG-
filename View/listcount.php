<?php
    $con=mysqli_connect("localhost","root","","quanlydanhba");
// Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql="SELECT COUNT(soDT) FROM danhba";

    $result = mysqli_query( $con, $sql);

    if($result){
        while ($row=mysqli_fetch_row($result)) {
         printf ("%d",$row[0]);
    }
}


/*if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_fetch_assoc($result);
  printf("%d",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
*/
    mysqli_close($con);
?>