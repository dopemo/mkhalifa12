<?php
    include 'header.php';
    
     function getPetList() {
            include '../../dbConnection.php';
            $conn = dbConnection("c9");


            $sql = "SELECT *
                    FROM adoptees"; 
                    
                            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
 
            return $record;
        }
?>
  
<script>

    $(document).ready( function(){
        
        $(".petLink").click( function(){
            
            //alert($(this).attr('id'));
            $('#petinfoModal').modal("show")
            $("#petInfo").html("<img src='img/loading.gif'>");
            
            $.ajax({

                type: "GET",
                url: "api/getPetInfo.php",
                dataType: "json",
                data: { "id": $(this).attr('id')},
                success: function(data,status) {
                
                   //alert(data);
                   $("#petInfo").html(" Age: " + data.age + "<br>" +
                                      " <img src='img/" + data.pictureURL + "'><br >" + 
                                       data.description);  
                        $('#petinfoModal').modal("show")
                        $("#petNameModalLabel").html(data.name);
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
            });//ajax
            
            
        }); //.getLink click
        
    });//document.ready

    
</script>            

<?php
    
        $pets = getPetList();
        //print_r($pets);
        
        foreach ($pets as $pet){
            
            echo "Name: ";
            echo "<a href='#' class='petLink' id='".$pet['id']."' >". $pet['name'] . "</a><br>";
            echo "Type: " . $pet['type'] . "<br>";
            echo "<hr><br>";
            
        }

?>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="petinfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="petNameModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="petInfo"></div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        
<?php
    include 'footer.php';
?>