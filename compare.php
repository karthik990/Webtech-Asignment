<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Compare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

        extract($_POST);
        // $table = '';
        if ($product != ''){
        $db = mysqli_connect('localhost','uma1','','Users');
        $queryAmazon = "SELECT * FROM priceAmazon WHERE itemName like '%$product%'";
        $queryFlipkart = "SELECT * FROM priceFlipkart WHERE itemName like '%$product%'";
        $queryChroma = "SELECT * FROM priceChroma WHERE itemName like '%$product%'";
        // print($table);

        // $res = mysqli_query($query,$db);
        $resAmazon = mysqli_query($db,$queryAmazon);
        $resFlipkart = mysqli_query($db,$queryFlipkart);
        $resChroma = mysqli_query($db,$queryChroma);
        // print('%d',$res);
        // echo $res;

        // print($resAmazon->{'num_rows'});
        // print_r($resFlipkart);

        if(!$resAmazon->{'num_rows'} && !$resFlipkart->{'num_rows'} && !$resChroma->{'num_rows'}){
            echo "<h1> Product doesn't exist in our database </h1>";
        }
        else{
            // $amazonPrice = mysqli_fetch_object($res,'itemPrice');
            // echo $amazonPrice;

            // while($row = mysqli_fetch_array($resAmazon)){
            //     $itemNameAmazon = $row['itemName'];
            //     $itemPriceAmazon = $row['itemPrice'];
            //     $itemImageAmazon = $row['itemImage'];
            // }
            
            $Amazon = mysqli_fetch_array($resAmazon);
            $Filpkart = mysqli_fetch_array($resFlipkart);
            $Chroma = mysqli_fetch_array($resChroma);
            // var_dump($Amazon);
            // $itemPriceAmazon = mysqli_fetch_array($resAmazon)['itemPrice'];
            // $category = mysqli_fetch_array($resAmazon)['itemCategory'];
            // $itemLinkAmazon = mysqli_fetch_array($resAmazon)['itemLink'];
            // $itemName = mysqli_fetch_array($resAmazon)['itemName'];
            // $itemPriceFlipkart = mysqli_fetch_array($resFlipkart)['itemPrice'];


            // echo "<h1> $itemPriceAmazon &nbsp $itemPriceFlipkart </h1>";

        echo '
        <h2 style="text-align:center">'.$Amazon['itemCategory'].'</h2>
        <p style="text-align:center">'.$Amazon['itemName'].'</p>
        
        <div class="columns">
          <ul class="price">
            <li class="header">Amazon</li>
            <li class="grey">Rs. '.$Amazon['itemPrice'].'<br/></li>
            <li><img src = "/WT/images/Items/'.$Amazon['itemImage'].'" alt = "Image does not exist in database" height = 200px width = 100px /></li>
            <li class="grey"><a href= '.$Amazon['itemLink'].' class="button">View</a></li>
          </ul>
        </div>
        
        <div class="columns">
          <ul class="price">
            <li class="header" style="background-color:#4CAF50">Flipkart</li>
            <li class="grey">Rs. '.$Filpkart['itemPrice'].'<br/></li>
            <li><img src = "/WT/images/Items/'.$Filpkart['itemImage'].'" alt = "Image does not exist in database" height = 200px width = 100px /></li>
            <li class="grey"><a href= '.$Filpkart['itemLink'].' class="button">View</a></li>
          </ul>
        </div>
        
        <div class="columns">
          <ul class="price">
            <li class="header">Croma</li>
            <li class="grey">Rs. '.$Chroma['itemPrice'].'<br/></li>
            <li><img src = "/WT/images/Items/'.$Chroma['itemImage'].'" alt = "Image does not exist in database" height = 200px width = 100px /></li>
            <li class="grey"><a href= '.$Chroma['itemLink'].' class="button">View</a></li>
          </ul>
        </div>
        ';
        // $res=mysqli_query($db,$query);
        // print($res);
            }
        }
        else{
            echo "<h1> Enter a correct product name </h1>";
        }

    ?>
</body>
</html>