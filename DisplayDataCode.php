<?php
$conn=mysqli_connect("localhost","root","","student008");
if($conn)
{
    $sql="Select * from employee";
    $dataset=mysqli_query($conn,$sql);
    if(mysqli_num_rows($dataset)>0)
    {
        while($row=mysqli_fetch_assoc($dataset))
        {
            echo "Employee Number: ".$row["Emp_NO"]. "Employee Name: ".$row["Emp_Name"]. "Address: ".$row["Emp_Add"]. "Salary: ".$row["Salary"]. "Department: ".$row["Dept_Name"]."</br></br>";
        }
    }
    else{
        echo "Empty Table";
    }
}
else{
    echo "Database is not connecting";
}

mysqli_close($conn);

?>
