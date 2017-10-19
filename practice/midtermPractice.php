<?php
$letterArray=range("A","Z");
function letterDropDown()
{
    global $letterArray;
    foreach($letterArray as $letter)
    {
        echo "<option value='$letter'>$letter</option>";
         
    }
}
function getLetterTable($size,$letterToOmit,$letterToFind)
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
function displayTable()
{
    if(isset($_GET['submit']))
    {
        $letterToFind=$_GET['letterToFind'];
         $letterToOmit=$_GET['letterToOmit'];
         $size        =$_GET["size"];
    
    if($letterTofind==$letterToOmit)
    {
        echo "<h2> You cannot have letter to find and letter to omit be the same!</h2>";
        return;
    }
    echo "<hr><h2> Letter to find: " . $letterToFind . "<h2>";
    echo "<strong>Letter to Omit: " . $letterToOmit . "</strong><br/>";
    
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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Midterm Practice Find The Letter: </title>
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
            <h3>Find The Letter</h3>
            <form method='get'>
                <strong>Select a Letter to Find:</strong>
                <select name="letterToFind">
                    <?=letterDropdown()?>
                </select>
                <br /> <br />
                Select Table Size:
                <select name="size">
                <option value="6">6X6</option>
                <option value="7">7X7</option>
                <option value="8">8X8</option>
                <option value="9">9X9</option>
                <option value="10">10X10</option>
                </select>
                <br /><br />
                Select Letter to Omit:
                <select name="letterToOmit">
                    <?=letterDropdown()?>
                    </select>
                <input type="submit"  name= "submit" value="Create Table" />
            
                
            </form>
            <?=displayTable()?>
        </div>
        
    </head>
    <body>

    </body>
</html>