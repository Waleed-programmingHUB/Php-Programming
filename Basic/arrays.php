<?php
/**
 * 
 * Array in PHP programming.
 * waleed @2022
 * 
 */

 // Array
 $my_num = array(10,20,30,40);
 $my_list = array("Read","Write","Eat","Sleep");
 $my_list2 = ["King","of","Php"];

 echo "Number Array :$my_num[0] <br/>";
 echo "String Array :$my_list[0] <br/>";
 // print in the stylish array
 echo "<pre>";
 print_r($my_list);
 echo "</pre>";


 // Associative array
 $list = array(
    "Orange" =>1,
    "Grapes" =>2,
    "Strawberry" =>3,
    "PineApple" =>4,
    "Apple" =>5
 );
 // multi-dimesional array
 $employee = array(
    array(1,"waleed","Software Engineer",100000),
    array(2,"adnan","Software Engineer",200000),
    array(3,"muzammil","Cyber Security",300000),
    array(4,"usama","Accountant",500000)
 );

 $employee2 = array(
    [1,"faisal","Software Engineer",100000],
    [2,"daniyal","Software Engineer",200000],
    [3,"umer","Cyber Security",300000],
    [4,"hammad","HR Manager",500000],
    [5,"tayyab","System Administration",600000]
 );
 // multi-dimension assoicative array
 $student = [
    "Bilal" =>[
       "Computer Science" =>55,
       "Statistics" =>45,
       "Mathematics" =>60
    ],
    "Salman" =>[
      "Computer Science" =>45,
      "Statistics" =>35,
      "Mathematics" =>42
   ],
    "Kamran"=>[
      "Computer Science" =>35,
      "Statistics" =>65,
      "Mathematics" =>80
   ]
 ];


 echo "<pre>";
 print_r($list);
 echo "</pre>";
 // print a multi-dimension array
 echo "ID = ".$employee[0][0]." Name = ".$employee[0][1] ."<br/>";
 // for each loop for array
 
 // nested loop
 for ($row=0; $row < 4 ; $row++) { 
    for ($column=0; $column < 4 ; $column++) { 
       echo $employee[$row][$column] .' ';
    }
    echo '<br/>';
 }

 echo "<table border='1' cellspacing='0' cellpadding='5px'>";
 // foreach loop
 echo "<tr><th>ID</th><th>Name</th><th>Designation</th><th>Salary</th></tr>";
 foreach ($employee as $value) {
    # code...
    echo "<tr>";
    foreach($value as $value2){
       echo '<td>'. $value2 .'</td>';
      }
      echo "</tr>";
   }
   // for each loop
   echo "</table><br/>";
   echo "<table border='1' cellspacing='0' cellpadding='5px'>";
   echo "<tr><th>Multi-Dimension associative array</th></tr>";
   echo "<tr>";
   echo "<th>";
   echo "Student Name";
   echo "</th>";
   echo "<th>";
   echo "Computer Science";
   echo "</th>";
   echo "<th>";
   echo "Statistics";
   echo "</th>";
   echo "<th>";
   echo "Mathematics";
   echo "</th>";
   echo "</tr>";
   foreach ($student as $key => $value) {
      echo '<tr>';
      # code...
      echo '<td>' .$key .' </td>';// printing a keys 
      foreach($value as $v){
         echo '<td>'. $v .'</td>';
      }
      echo '</tr>';
   }
   echo "</table> <br/>";

  // foreach loop for employee2 using list function
  foreach ($employee2 as list($id,$name,$des,$salary)) {
     echo "Emp ID : " .$id. " EmployeeName : ".$name." Designation : ".$des." Salary : ".$salary."<br/><hr/>";
  } 

?>