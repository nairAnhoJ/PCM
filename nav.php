<div id="nav-container">
    <div class="logo-container">
        <span class="logo-pic"><img src="./obj/glory_logo.png"></span>
        <div class="prof-details">
            <span class="fname" >John Arian</span>
            <span class="lname">Malondras</span>
            <div class="dept">Administration</div>
        </div>
    </div>

    <ul class="menu-container">

        <li id="acd">
            <a href="dashboard.php">
                <img src="./obj/nav-bar/dashboardn.png" style="transform: scaleX(-1);">
                <span class="menu-name">Dashboard</span>
            </a>
        </li>

        <li id="acp">
            <a href="printer.php">
                <img src="./obj/nav-bar/printer.png">
                <span class="menu-name">Printer</span>
            </a>
        </li>

        <li id="act">
            <a href="consumables.php">
                <img src="./obj/nav-bar/toner.png">
                <span class="menu-name">Consumables</span>
            </a>
        </li>

        <li id="acr">
            <a href="#">
                <img src="./obj/nav-bar/Request.png" style="transform: scaleX(-1);">
                <span class="menu-name">Request</span>
            </a>
        </li>

        <li id="acpo">
            <a href="#">
                <img src="./obj/nav-bar/pullout.png">
                <span class="menu-name">Pull Out</span>
            </a>
        </li>
    </ul>

    <div class="logout-container">
        <a href="#">
            <span id="iflogin">
                <img class="logo1" src="./obj/nav-bar/login-white.png">
                <img class="logo2" src="./obj/nav-bar/login.png">
            </span>
            <span id="iflogout">
                <img class="out-logo" src="./obj/nav-bar/logout.png">
            </span>
            <span id="log-out">Log Out</span>
        </a>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', 'ul li', function(){
        $(this).addClass('active').siblings().removeClass('active');
    })
</script>