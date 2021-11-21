<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>">
    <script src="./jquery/jquery-3.6.0.js"></script>
    <title>Printers</title>
</head>
<body id="b-cons" onload="navsel()">
    
    <!-- ========================= Side Bar ========================= -->

    <?php include 'nav.php' ?>
    
    <div class="cons-container">
        <div class = "grid-container">

            <!-- ========================= Buttons ========================= -->
            
            <div class="date-filter">
                <a href="#">
                    <input type="date" id="picker" class="table-control">
                </a>
            </div>

            <div class="btn1-container">
                <a href="#">
                    <span class="printer-btn">IN</span>
                </a>
            </div>
            
            <div class="btn2-container">
                <a href="#">
                    <span class="printer-btn">OUT</span>
                </a>
            </div>

            <!-- ========================= Table ========================= -->

            <div class="table-container">

            <table class="tbl">
                <thead>
                    <tr>
                        <th class="th1">#</th>
                        <th class="th2">Date</th>
                        <th class="th3">In/Out</th>
                        <th class="th4">Brand</th>
                        <th class="th5">Model</th>
                        <th class="th6">Location</th>
                        <th class="th7">Item Type</th>
                        <th class="th8">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Toner</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Ricoh</td>
                        <td>MP 3055</td>
                        <td>IMPEX</td>
                        <td>Drum Cartridge</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>In</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>11/20/2021</td>
                        <td>Out</td>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>Waste Container</td>
                        <td>1</td>
                    </tr>
                </tbody>
        </table>

            </div>
        </div>
    </div>

    <script>
        function navsel() {
            document.getElementById('act').className = 'active';
        }
    </script>

</body>
</html>