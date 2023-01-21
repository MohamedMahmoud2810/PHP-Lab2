<?php 

    //              1-
    // echo nl2br("my name is mohamed \n") ;
    // echo "my age is 21";










    //              2-

    // $arr = ["Hello" , "MY Name" , "Is" , "Mohamed"];
    // echo join(" ",$arr)."<br>";
    // // join space between array elements


    // $name = "Ashraf";
    // $age = 24;
    
    // printf("My Name Is %s , My Age Is %u" , $name,$age);
    // //print string string in a specific format

    // $str = "Welcome Sir!";
    // echo $str."<br>";
    // echo ltrim($str,"Wel");
    // //remove characters from left side of a string












    //            3-
    // $numbers = [12,45,10,25];
    // $average = array_sum($numbers)/count($numbers);
    // echo $average; 

    // $sort = rsort($numbers);
    // foreach ($numbers as $sort) {
    //     echo $sort."<br>";
    // }








    //             4-
    // $hours = ["sara"=>31,"john"=>41,"walaa"=>39,"ramy"=>40];

    // // ascending order by value 
    // $ascending_by_value = asort($hours);
    // foreach ($hours as $key => $value) {
    //     echo "key " . $key ." , Value " . $value . "<br>";
    // }
    // // ascending order by key 
    // $ascending_by_key = ksort($hours);
    // foreach ($hours as $key => $value) {
    //     echo "<br><br>" . "key " . $key ." , Value " . $value . "<br>";
    // }
    // // descending order by value
    // $descending_by_value = arsort($hours);
    // foreach ($hours as $key => $value) {
    //     echo "<br>" . "key " . $key ." , Value " . $value . "<br>";
    // }
    // // descending order by key
    // $descending_by_key = krsort($hours);
    // foreach ($hours as $key => $value) {
    //     echo "<br>" . "key " . $key ." , Value " . $value . "<br>";
    // }



    //                    5-
    $students = [
        ["Name"=>"Alaa","Email"=>"Alaa@test.com","Status"=>"PHP"],
        ["Name"=>"Shamy","Email"=>"Shamy@test.com","Status"=>".Net"],
        ["Name"=>"Yousef","Email"=>"Yousef@test.com","Status"=>"Testing"],
        ["Name"=>"Waleid","Email"=>"Waleid@test.com","Status"=>"PHP"],
        ["Name"=>"Rahma","Email"=>"Rahma@test.com","Status"=>"Front End"]
    ];

    echo "<table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Status</td>
        </tr>
    ";

    foreach ($students as $data) {
        if($data['Status']== 'PHP')
            echo "<tr style='color:red'> <td>".$data['Name']."</td><td>".$data['Email']."</td><td>".$data['Status']."</td></td> <tr>";
        else{
            echo "<tr > <td>".$data['Name']."</td><td>".$data['Email']."</td><td>".$data['Status']."</td></td> <tr>";
        }

        }

        echo "</table>";

?>