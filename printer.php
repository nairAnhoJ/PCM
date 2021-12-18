<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>">
    <script src="./jquery/jquery-3.6.0.js"></script>
    <title>Manage Printers</title>

    <script type="text/javascript">
        function navsel() {
            document.getElementById('acp').className = 'active';
        }
    </script>

</head>
<body id="b-printer" onload="navsel()">


    <!-- ========================= ADD BUTTON ========================= -->

    <div class="printer-modal">
        <div class="modal-bg">
            <div class="close-modal">
                <a id="close-btn-add" href="#">
                    <img src="./obj/close.png">
                </a>
            </div>

            <div class="head"><p>ADD PRINTER</p></div>

            <div class="frm-add">
                <div class="label l1"><p>Brand:</p></div>
                <div class="inp">
                    <input type="text" class="txt-input">
                </div>

                <div class="label l2"><p>Model:</p></div>
                <div class="inp">
                    <input type="text" class="txt-input">
                </div>

                <div class="label l3"><p>Serial No:</p></div>
                <div class="inp">
                    <input type="text" class="txt-input">
                </div>

                <div class="label l4"><p>Location:</p></div>
                <div class="inp">
                    <input type="text" class="txt-input">
                </div>

            </div>
            
            <div class="below-frm">
                    <div class="add-cons">Consumables</div>
                    <input id="btn-add" type="button">
                <div id='con-data'></div>
            </div>
        </div>
    </div>
    
    <!-- ========================= SIDE BAR ========================= -->

    <?php include 'nav.php' ?>
    
    <div class="printer-container">

        <h1>Manage Printers</h1>

        <div class = "grid-container">

            <!-- ========================= Buttons ========================= -->
            
            <div class="btn-container">
                <a href="#">
                    <span class="printer-btn">ADD</span>
                </a>
            </div>
            
            <div class="btn-container">
                <a href="#">
                    <span class="printer-btn">EDIT</span>
                </a>
            </div>

            <div class="btn-container">
                <a href="#">
                    <span class="printer-btn">REMOVE</span>
                </a>
            </div>

            <!-- ========================= Table ========================= -->

            <div class="table-container">

            <table class="tbl">
                <thead>
                    <tr>
                        <th class="th1">Brand</th>
                        <th class="th2">Model</th>
                        <th class="th3">Location</th>
                        <th class="th4">Serial Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>AP C3070</td>
                        <td>Purchasing</td>
                        <td>508939</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>AP C3070</td>
                        <td>Purchasing</td>
                        <td>508939</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                    <tr>
                        <td>Fujifilm</td>
                        <td>DC-VII C2273</td>
                        <td>Administration / Accounting</td>
                        <td>108916</td>
                    </tr>
                </tbody>
        </table>

            </div>
        </div>
    </div>

    

</body>
</html>