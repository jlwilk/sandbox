<?php
$output         = "";
$name_error_message = "";
$fave_error_message = "";
$least_error_message = "";

//if(!empty($_GET))
//{
//    if(isset($_GET['name']))
//    {
//        $name = $_GET['name'];
//        $namelength = strlen($name);
//        $fave = $_GET['fave'];
//        $least = $_GET['least'];
//        
//        if($namelength == 0)
//        {
//            $name_error_message = "can't be blank";
//        }
//        if(isset($_GET['fave'])) 
//        {           
//                                
//            if(!is_numeric($fave))
//            {
//                $fave_error_message = "must be a number";
//            }
//                
//            if(isset($_GET['least'])) 
//            {
//                               
//                if(!is_numeric($least))
//                {
//                    $least_error_message = "must be a number";
//                }
//                        
//            }
//         }
//    
//        $math = $fave + $least;
//        $output = "Hello " . $name . "! " . "Your Favorite Number Plus Your least Favorite number is " . $math;
//         
//    }
//}

if(!empty($_GET))
{
    if(isset($_GET['name']))
    {
        $name = $_GET['name'];
        $namelength = strlen($name);
        $fave = $_GET['fave'];
        $least = $_GET['least'];
        $math = $fave + $least;
        
        if($namelength == 0)
        {
            $name_error_message = "can't be blank";
        }
        elseif(!is_numeric($fave))
        {
            $fave_error_message = "must be a number";
        }
        elseif(!is_numeric($least))
        {
            $least_error_message = "must be a number";
        }
        else
        {
            $output = "Hello " . $name . "! " . "Your Favorite Number Plus Your least Favorite number is " . $math;
        }
            
    }
}


//****************************************************
?>

<form action='hw.php' method="GET">
    <div>Enter Name Here: <input type='text' name="name" /></div>
    
    <div style='color:red;'><?= $name_error_message ?></div>
    
    <div>Favorite Number: <input type='text' name="fave" /></div>
    
    <div style='color:red;'><?= $fave_error_message ?></div>
    
    <div>Least Favorite Number: <input type='text' name="least" /></div>
    
    <div style='color:red;'><?= $least_error_message ?></div>
    
    <div><input type='submit' value=' Send ' /></div>
</form>

<hr />

<?= $output?>