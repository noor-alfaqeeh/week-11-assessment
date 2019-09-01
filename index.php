<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

$ahmad="ahmad Shahwan";
$Noor="Noor Shahwan";
$sAhmad="200$";
$sNoor="300$";

echo "<table>
<tbody>
<tr>
<td>Salary for Mr . $ahmad</td>

   <td> $sAhmad </td>
</tr>

<tr>
<td>Salary for Mr . $Noor</td>

  <td>  $sNoor</td>
</tr>

</tbody>
</table>
<br/>
<br/>";






/*Question 2 : Write a PHP script which displays the capital and 
country name from the below array $c. as unordered list after sorting 
the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy" =>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;



foreach($countries as $key=>$country){
    echo ($key . " : ". $country. "<br/>");

}





/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days*/

//$first_date= mktime()

echo $first= date("Y-m-d", mktime(0, 0, 0, 4, 9, 2013))."<br/>";

echo $second= date("Y-m-d", mktime(0, 0, 0, 4, 11, 1981));

echo "<br/>". $minus=$first-$second;





/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
   <form action="index.php" method="Post">
   <input type="text" name="name">
   <button>Submit</button>
  

   <div>
  
   <?php

   $username = $name_Post;
   echo $username;
   
   ?>
   </div>
   </form>
   
</body>
</html>