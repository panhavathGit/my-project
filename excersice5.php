<?php
          $data = [
            [
                "model" => "MSI",
                "name" => "Titan 18 HX A14VI",
                "core" => "i9-14900HX",
                "ram" => "128GB",
                "ssd" => "4TB",
                "oprice" => "",
                "dprice" => "$5,399.99",
                "image" => "<img src=m1.jpg>"
            ],

            [
                "model" => "ACER",
                "name" => "Acer Aspire 5 A515-58GM",
                "core" => "i7 1355U",
                "ram" => "8GB",
                "ssd" => "512",
                "oprice" => "$649.00",
                "dprice" => "$699.00",
                "image" => "<img src=m2.jpg>"
            ],
            [
                "model" => "ASUS",
                "name" => "Asus Vivobook X415MA_EK769W",
                "core" => "Celeron N4020",
                "ram" => "4GB",
                "ssd" => "512GB",
                "oprice" => "$289.00",
                "dprice" => "$359.00",
                "image" => "<img src=m3.jpg>"
            ],
            [
                "model" => "APPLE",
                "name" => "MacBook Pro 16",
                "core" => "M3 Max",
                "ram" => "36GB",
                "ssd" => '1TB / 16.2"',
                "oprice" => "",
                "dprice" => "$3,629.00",
                "image" => "<img src=m4.jpg>"
            ],
            [
                "model" => "APPLE",
                "name" => "MacBook Pro 16",
                "core" => "M3 Pro",
                "ram" => "36GB",
                "ssd" => '512GB / 16.2"',
                "oprice" => "$3,099.00",
                "dprice" => "$3,099.00",
                "image" => "<img src=m4.jpg>"
            ],
            [
                "model" => "LENOVO",
                "name" => "Lenovo ThinkPad E16 G1",
                "core" => "i5 1335U",
                "ram" => "16GB",
                "ssd" => "512GB",
                "oprice" => "",
                "dprice" => "$799.00",
                "image" => "<img src=m5.jpg>"
            ],

            [
                "model" => "ACER",
                "name" => "Acer Aspire 5 A515-58GM",
                "core" => "i5 1335U",
                "ram" => "8GB",
                "ssd" => "512",
                "oprice" => "$549.00",
                "dprice" => "$599.00",
                "image" => "<img src=m6.jpg>"
            ],
            [
                "model" => "APPLE",
                "name" => "MacBook Pro 14",
                "core" => "M3 Max",
                "ram" => "18GB",
                "ssd" => '512GB / 16.2"',
                "oprice" => "$2,669.00",
                "dprice" => "$2,699.00",
                "image" => "<img src=m4.jpg>"
            ],
            [
                "model" => "APPLE",
                "name" => "MacBook Pro 14",
                "core" => "M3 Max",
                "ram" => "36GB",
                "ssd" => '1TB / 14.2"',
                "oprice" => "",
                "dprice" => "$3,399.00",
                "image" => "<img src=m4.jpg>"
            ],
            [
                "model" => "APPLE",
                "name" => "MacBook Pro 14",
                "core" => "M3 Pro",
                "ram" => "18GB",
                "ssd" => '1TB / 14.2"',
                "oprice" => "",
                "dprice" => "$2,599.99",
                "image" => "<img src=m4.jpg>"
            ]
        ];
?>
        <?php
        foreach($data as $d){
        ?>
            <style>
                .product {
           
            border: 1px solid #170a0a;
            border-radius: 5px;
            padding: 1em;
            margin: 1em;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #old{
            text-decoration: line-through;
            color: grey;
            
        }
        .item{
           
            display: inline-block;
        }

       
            </style>
            <div class="item">

           
                    <div class="product">
                        <?php
                        echo $d['image'];
                        ?>

                        <h4> <?php
                        echo  "MOdel is:".$d['model'];
                        ?></h4>

                        <p> <?php
                        echo "Name is:".$d['name']."<br>";
                        echo"Core:" .$d['core']."<br>";
                        echo"RAM:" .$d['ram']."<br>";
                        echo"SSD:" .$d['ssd']."<br>";
                        ?>
                        <h3 id="old">
                            <?php
                             echo $d['oprice']."<br>";
                            ?>
                        </h3>
                        <h3>
                            <?php
                            echo $d['dprice']."<br>";
                            ?>
                        </h3 id="dis">

                    </div>
                    </div>
       
        <?php         }?>
