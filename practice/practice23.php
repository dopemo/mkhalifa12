<?php
$letterArray=range('A','Z');
function dropdownLetter(){
    global $letterArray;
    foreach($letterArray as $letter)
    {
        echo "<option value='$letter'>$letter</option>";
    }
    
}
function getLetterTable($size,$letterToFind,$letterToOmit)
{
    global $letterArray;
    $letterTable=array();
    for($i=0;$i<$size*$size;$i++)
    {
        do{
            $randomLetter=$letterArray[array_rand($letterArray)];
        }while($randomLetter==$letterToFind||$randomLetter==$letterToOmit);
        $letterTable[]=$randomLetter;
        
    }
    $letterTable[array_rand($letterTable)]=$letterToFind;
    return $letterTable;
}
function getTable()
{
    if(isset($_GET['submit']))
    {
        $letterToFind=$_GET['letterToFind'];
        $letterToOmit=$_GET['letterToOmit'];
        $size         =$_GET["size"];
    
    if($letterToFind==$letterToOmit)
    {
       
     echo "<h2> Letter to find and letter to omit have to be different </h2>";
    
        return;
    }
    echo "<hr><h2> letter to find: " . $letterToFind . "</h2>";
    echo "<strong> Letter to Omit: " . $letterToOmit . "</strong><br/>";
    
    $letterTable=getLetterTable($size,$letterToFind,$letterToOmit);
    echo "<table boarder='1' style='margin:0 auto' cellpadding=7>";
    $index=0;
   
    for($rows=0;$rows<$size;$rows++)
    {
        echo "<tr>";
        for($cols=0;$cols<$size;$cols++)
        {
            $letterToDisplay=$letterTable[$index];
            if($letterToDisplay<'H')
            {
                $color="red";
            }
            else if($letterToDisplay<'P')
            {
                $color="blue";
            }
            else
            {
                $color="green";
            }
            
            echo "<td style='color:$color'> " . $letterToDisplay . "</td>";
            $index++;
        }
        echo "<tr>";
        
    }
    echo "</table>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Midterm Practice</title>
    
            <style>
                td{
                    font-size:1.8em;
                }
                #wrapper{
                    margin:0 auto;
                    width:800px;
                    text-align:center;
                }
            </style>
            <div id="wrapper">
                <h3>Find the Letter</h3>
                <form method='get'>
                    <strong>Select a Letter To Find: </strong>
                    <select name="letterToFind">
                        <?=dropDownLetter()?>
                    </select>
                    <br/><br/>
                    <strong>Select Size</strong>
                        <select name="size">
                        <option value="6">6x6</option>
                        <option value="7">7x7</option>
                        <option value="8">8x8</option>
                        <option value="9">9x9</option>
                        <option value="10">10x10</option>
                        </select>
                        <br/> <br/>
                        Select Letter To Omit
                        <select name="letterToOmit">
                            <?=dropDownLetter()?>
                            </select>
                        <input type='submit' name='submit' value='Create Table'>
                
        </form>
         <?=getTable()?>
    </div>
    </head>
    <body>
       
    </body>
</html>