<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>">
        <script src="./jquery/jquery-3.6.0.js"></script>
        <title>Printer Consumables</title>

        <script type="text/javascript">
            function navsel() {
                document.getElementById('act').className = 'active';
            }

            // ==================================================================== BRAND CHANGE ====================================================================
            function brandChange(){
                var blist = document.getElementById("brand-list");
                var tlist = document.getElementById("type-list");
                var clist = document.getElementById("code-list");

                var bval = $('#brand-list').val();
                var tval = $('#type-list').val();

                var fval = $('#brand-list option:first-child').val();

                if (fval == "- - -"){
                    blist.remove(blist.firstChild);
                }

                $('#code-list option').remove();
                $('#type-list option').remove();

                if(bval == "Fujifilm"){

                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("- - -"));
                    tlist.appendChild(newOption);
                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("Toner Cartridge"));
                    tlist.appendChild(newOption);
                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("Drum Cartridge"));
                    tlist.appendChild(newOption);
                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("Waste Container"));
                    tlist.appendChild(newOption);

                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("- - -"));
                    clist.appendChild(newOption);

                }
                
                if(bval == "Ricoh"){

                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("- - -"));
                    tlist.appendChild(newOption);
                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("Toner Cartridge"));
                    tlist.appendChild(newOption);

                    var newOption = document.createElement("option");
                    newOption.appendChild(document.createTextNode("- - -"));
                    clist.appendChild(newOption);

                }
            }

            // ==================================================================== ITEM TYPE CHANGE ====================================================================
            function typeChange(){
                var blist = document.getElementById("brand-list");
                var tlist = document.getElementById("type-list");
                var clist = document.getElementById("code-list");

                var bval = $('#brand-list').val();
                var tval = $('#type-list').val();

                var fval = $('#type-list option:first-child').val();

                if (fval == "- - -"){
                    tlist.remove(tlist.firstChild);
                }

                $('#code-list option').remove();

                if(bval == "Fujifilm"){
                    if(tval == "Toner Cartridge"){

                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202384"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202508"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202634"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202635"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202636"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT202637"));
                        clist.appendChild(newOption);

                    }

                    if(tval == "Drum Cartridge"){

                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT351105"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT351089"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CT201734"));
                        clist.appendChild(newOption);

                    }

                    if(tval == "Waste Container"){

                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CWAA0901"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("CWAA1024"));
                        clist.appendChild(newOption);

                    }
                }

                
                if(bval == "Ricoh"){
                    if(tval == "Toner Cartridge"){

                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("MP 3554S"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("MP 6054S"));
                        clist.appendChild(newOption);
                        var newOption = document.createElement("option");
                        newOption.appendChild(document.createTextNode("IM C2500"));
                        clist.appendChild(newOption);

                    }
                }
            }
        </script>
    </head>

        <!-- ========================================================================================================================================================================= -->

    <body id="b-cons" onload="navsel()">
        
        <!-- ========================= Side Bar ========================= -->

        <?php include 'nav.php' ?>
        
        <div class="cons-container">
            
                <!-- ==================== MODAL ==================== -->
                
                <div class="modal-bg">
                    <div class="modal">

                        <div class="close-modal">
                            <a href="#">
                                <img src="./obj/close.png">
                            </a>
                        </div>

                        <div class="ddown">
                            <p>Brand: 
                                <select id="brand-list" onChange="brandChange()">
                                    <option>- - -</option>
                                    <option>Fujifilm</option>
                                    <option>Ricoh</option>
                                </select>
                            </p>

                            <p>Item Type: 
                                <select id="type-list" onChange="typeChange()">
                                    <option>- - -</option>
                                </select>
                            </p>

                            <p>Item Code: 
                                <select id="code-list" onChange="model()">
                                    <option>- - -</option>
                                </select>
                            </p>
                        </div>


                        <div class="submit-modal">
                            <a href="#">
                                <span class="btn-submit">Submit</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ==================== MODAL END ==================== -->

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
                                <th class="th8">Item Type</th>
                                <th class="th5">Item Code</th>
                                <th class="th6">Model</th>
                                <th class="th7">Location</th>
                                <th class="th9">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>11/20/2021</td>
                                <td>Out</td>
                                <td>Fujifilm</td>
                                <td>Toner Cartridge</td>
                                <td>CT202384</td>
                                <td>DC-VII C2273</td>
                                <td>Administration / Accounting</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>11/20/2021</td>
                                <td>In</td>
                                <td>Ricoh</td>
                                <td>Drum Cartridge</td>
                                <td>MP 3554S</td>
                                <td>---</td>
                                <td>---</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>11/20/2021</td>
                                <td>Out</td>
                                <td>Fijifilm</td>
                                <td>Waste Container</td>
                                <td>CWAA0901</td>
                                <td>AP C3070</td>
                                <td>Purchasing</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>
</html>