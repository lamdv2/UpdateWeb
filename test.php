<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap');
        * {
            padding: 0;
            margin: 0;
        }
        
        body {
            font-family: 'Roboto Slab', serif;
            font-size: 15px;
            color: brown;
            line-height: 1.5;
        }
        
        #wrapper {
            max-width: 1170px;
            margin: 0 auto;
        }
        
        .headline {
            text-align: center;
            margin: 50px 0px;
        }
        
        h3 {
            font-size: 18px;
            color: brown;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid brown;
            display: inline-block;
            color: gray;
            font-weight: 500;
        }
        
        ul.products {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        ul.products li {
            flex-basis: 25%;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        
        ul.products li img {
            max-width: 100%;
            height: auto;
        }
        
        ul.products li .product-top {
            position: relative;
            overflow: hidden;
        }
        
        ul.products li .product-top .product-thumb {
            display: block;
        }
        
        ul.products li:hover .product-top .product-thumb img {
            filter: opacity(80%);
        }
        
        ul.products li .product-top .product-thumb img {
            display: block;
        }
        
        ul.products li .product-top a.buy-now {
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: beige;
            color: brown;
            padding: 10px 0px;
            position: absolute;
            bottom: -35px;
            width: 100%;
            transition: 0.25s ease-in-out;
            opacity: 0.85;
        }
        
        ul.products li:hover a.buy-now {
            bottom: 0px;
        }
        
        ul.products li .product-info {
            padding: 10px 0px;
        }
        
        ul.products li .product-info a {
            display: block;
            text-decoration: none;
        }
        
        ul.products li .product-info a.product-cat {
            font-size: 11px;
            text-transform: uppercase;
            color: gray;
            padding: 3px 0px;
        }
        
        ul.products li .product-info a.product-name {
            color: grey;
            padding: 3px 0px;
        }
        
        ul.products li .product-info .product-price {
            color: grey;
            padding: 2px 0px;
            font-weight: 600;
        }
    </style>
    <div class="header">

    </div>
    <div id="wrapper">
        <div class="headline">
            <h3>Sản phẩm bán chạy</h3>
        </div>

        <ul class="products">

        <?php 
            include "connect.php";
            $sql = "select * from product";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
        ?>

            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/adidas.jpg" alt="">
                        </a>
                        <a href="" class="buy-now"> Mua ngay </a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">Sneakergdfgdf</a>
                        <a href="" class="product-name">Adidas Supkkkkkkkkerstar</a>
                        <div class="product-price">3.200.000</div>
                    </div>
                </div>
            </li>
        <?php 
            }
            mysqli_close($conn);
        ?>
        </ul>
    </div>

    <div class="footer">

    </div>
</body>

</html>