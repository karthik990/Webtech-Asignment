<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <?php
    echo '
<h2 style="text-align:center">Iphone XS </h2>
<p style="text-align:center">Apple Inc.</p>

<div class="columns">
  <ul class="price">
    <li class="header">Amazon</li>
    <li class="grey">Rs. 99,990</li>
    <li>64GB Storage</li>
    <li>4Gb RAM</li>
    <li>IOS 12</li>
    <li>Color:Gold</li>
    <li class="grey"><a href="https://www.amazon.in/Apple-iPhone-Gold-64GB-Storage/dp/B07J316BT2?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=_k_CjwKCAiAuMTfBRAcEiwAV4SDkfl1xbJkefEg96icEH92H8J2MVU9EixK4boXYQhuOK55ZFS_DpfRoxoCl3AQAvD_BwE_k_&gclid=CjwKCAiAuMTfBRAcEiwAV4SDkfl1xbJkefEg96icEH92H8J2MVU9EixK4boXYQhuOK55ZFS_DpfRoxoCl3AQAvD_BwE" class="button">View</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Flipkart</li>
    <li class="grey">Rs. 99,799</li>
    <li>64GB Storage</li>
    <li>4Gb RAM</li>
    <li>IOS 12</li>
    <li>Color:Gold</li>
    <li class="grey"><a href="https://www.flipkart.com/apple-iphone-xs-space-grey-64-gb/p/itmf944ees7rprte?gclid=CjwKCAiAuMTfBRAcEiwAV4SDkRHm3rHT_t9lip4UPT0aTrAAioN0QAg2oZMjxEwK_esy7aqqZwhYKBoC6ToQAvD_BwE&pid=MOBF944E5FTGHNCR&lid=LSTMOBF944E5FTGHNCRZ7OLUW&marketplace=FLIPKART&cmpid=content_mobile_8965229628_gmc_pla&tgi=sem,1,G,11214002,g,search,,50314728260,1o3,,,c,,,,,,,&ef_id=CjwKCAiAuMTfBRAcEiwAV4SDkRHm3rHT_t9lip4UPT0aTrAAioN0QAg2oZMjxEwK_esy7aqqZwhYKBoC6ToQAvD_BwE:G:s&s_kwcid=AL!739!3!50314728260!!!g!356518883726!" class="button">View</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Cromo</li>
    <li class="grey">Rs. 99,799</li>
    <li>64GB Storage</li>
    <li>4Gb RAM</li>
    <li>IOS 12</li>
    <li>Color:Gold</li>
    <li class="grey"><a href="https://www.croma.com/apple-iphone-xs-space-grey-64-gb-4-gb-ram-/p/214062?gclid=CjwKCAiAuMTfBRAcEiwAV4SDkVjJVEY2DyU9UQ0b2_op92KIw2Q2Mfdr9A2Y6_BCedds3HkITCceoxoC0PYQAvD_BwE" class="button">View</a></li>
  </ul>
</div>
'
?>
</body>
</html>