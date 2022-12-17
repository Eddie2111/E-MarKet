<?php include("./component/header.php");?>
<?php include("./component/navbar.php");?>
<?php include_once("../model/cartMemory.php");?>

<script>
    var i = 0;
    var items = [];
    function buttonClick(itemID) {
        document.getElementById('inc').value = ++i;
        items.push(itemID);
        console.log(items);
    }
</script>
<a href="checkOut.php" onclick="myAjax()" class="deletebtn">Delete</a>
<script>
function myAjax() {
    $.get('checkOut.php', { album: 'abc' }, function() {
    content.html(response);
});
 }
</script>

<button">Items on cart</button>
<input disabled type="text" id="inc" value="0"></input>
<a href='checkOut.php/' class="btn btn-success">Proceed to checkout</a>
<?php
        $sql = "SELECT * FROM `products`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            echo '<div class="container"><div class="row row-cols-3">';
            while($row = $result->fetch_assoc()) {
                echo "
                <div class='col'>
                <div class='card' style='width: 20rem;'>
                <img src=".$row["image"]." class='card-img-top' alt='product image' height='250px' width='200px'>
                <div class='card-body'>
                    <h5 class='card-title'>".$row["name"]."</h5>
                    <p class='card-text'>".$row["description"]."</p>
                    <p class='disabled'>Price: <font color='green'>$".$row["price"]."</font></p>
                    <div class='row'>
                        <div class='col'>
                            <button onClick='buttonClick(".$row["id"].")' class='btn btn-primary'>Add to Cart</button>
                        </div>
                        <div class='col'>
                            <a href='../controller/buyNow.php?item=".$row["id"]."' class='btn btn-success'>Buy Now</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                ";
            }
        } else {
            echo "<center> 
                    0 results<br/> 
                    <Label>No Items Here </Label><br/> 
                    <a href='post.php' class='btn btn-primary'>Create</a>
                </center>
                
                
                "
                ;
        }
        echo "</div></div>";
?>
<!-- items go here -->    


  
</div>




<?php include("./component/footer.php");?>