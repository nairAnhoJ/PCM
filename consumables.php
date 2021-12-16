<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>">
        <script src="./jquery/jquery-3.6.0.js"></script>
        <title>Printer Consumables</title>

        <script type="text/javascript" src="./javascript/cons.js">
            
        </script>
    </head>

    <body id="b-cons" onload="navsel()">
        
        <!-- ========================= Side Bar ========================= -->

        <?php include 'nav.php' ?>
        
        <div class="cons-container">
            
                <!-- ==================== MODAL ==================== -->
                
                <div class="modal-bg">
                    <div class="modal">

                        <div class="close-modal">
                            <a id="close-btn-in" href="#">
                                <img src="./obj/close.png">
                            </a>
                        </div>

                        <div class="head"><p>IN</p></div>

                        <div class="ddown">
                            <div class="l1"><p>Brand:</p></div>
                            <div class="o">
                                <select id="brand-list" onChange="brandChange()">
                                    <option>- - -</option>
                                    <option>Fujifilm</option>
                                    <option>Ricoh</option>
                                </select>
                            </div>

                            <div class="l2"><p>Item Type:</p></div>
                            <div class="o">
                                <select id="type-list" onChange="typeChange()">
                                    <option>- - -</option>
                                </select>
                            </div>

                            <div class="l3"><p>Item Code:</p></div>
                            <div class="o">
                                <select id="code-list" onChange="model()">
                                    <option>- - -</option>
                                </select>
                            </div>

                            <div class="l5"><p>Quantity:</p></div>
                            <div class="o o5">
                                <input type="number" class="quantity" min="1" max="10" onChange="qChange()" value="1">
                            </div>
                        </div>

                        <div class="msub">
                            <div class="submit-modal">
                                <button type="submit" class="btn-submit" id="btn-sub-in" disabled="disabled" onclick="subIn()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =============== OUT ============== -->

                <div class="modal-bg-out">
                    <div class="modal">

                        <div class="close-modal">
                            <a id="close-btn-out" href="#">
                                <img src="./obj/close.png">
                            </a>
                        </div>

                        <div class="head"><p>OUT</p></div>

                        <div class="ddown">
                            <div class="l1"><p>Brand:</p></div>
                            <div class="o">
                                <select id="brand-list-out" onChange="brandChangeOut()">
                                    <option>- - -</option>
                                    <option>Fujifilm</option>
                                    <option>Ricoh</option>
                                </select>
                            </div>

                            <div class="l2"><p>Item Type:</p></div>
                            <div class="o">
                                <select id="type-list-out" onChange="typeChangeOut()">
                                    <option>- - -</option>
                                </select>
                            </div>

                            <div class="l3"><p>Item Code:</p></div>
                            <div class="o">
                                <select id="code-list-out" onChange="model()">
                                    <option>- - -</option>
                                </select>
                            </div>

                            <div class="l4"><p>Location:</p></div>
                            <div class="o">
                                <select id="location-out" onChange="locChange()">
                                    <option>- - -</option>
                                    <option>Administration / Accounting</option>
                                    <option>Purchasing</option>
                                    <option>Impex</option>
                                    <option>QC / Prod. Support</option>
                                    <option>Prod. Support</option>
                                    <option>Fabrication / GPI-8</option>
                                    <option>Molding / GPI-8</option>
                                </select>
                            </div>

                            <div class="l5"><p>Quantity:</p></div>
                            <div class="o o5">
                                <input type="number" class="quantity" min="1" max="10" onChange="qChangeOut()" value="1">
                            </div>
                        </div>

                        <div class="msub">
                            <div class="submit-modal">
                                <button type="submit" class="btn-submit" id="btn-sub-out" disabled="disabled" onclick="subOut()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== MODAL END ==================== -->

            <div class = "grid-container">

                <!-- ========================= Buttons ========================= -->



                <div class="date-filter">
                    <input type="date" id="date-picker" class="table-control">
                </div>

                <div class="btn1-container">
                    <a id="open-btn-in" href="#">
                        <span class="printer-btn">IN</span>
                    </a>
                </div>
                
                <div class="btn2-container">
                    <a id="open-btn-out" href="#">
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
                                <td>Viljam</td>
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