<!DOCTYPE html>
<script src="../JavaScript/artPieceGenerator.js"></script>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../CSS/HQSiteWide.css">
    <link rel="stylesheet" href="../CSS/HQGallery.css">
</head>
<body>
    <script>
        /*for(const element of egg){
            console.log(element);
        }*/
    </script>
    <nav>
        <div>
            <a href="HQHomePage.html"><h1>HQ</h1></a>
        </div>
        <p><a href="HQService.html">Works</a></p>
        <p><a href="HQAbout.html">About</a></p>
        <p><a href="HQContact.html">Contact</a></p>
        <img class= "icon" src="../Assets/Icons/4691478_patreon_icon.png">
        <img class="icon lastIcon" src="../Assets/Icons/instagram_icon.png">
    </nav>
    <div  style="text-align: center; margin-top: 2rem;">
        <h1>
            Digital Art Gallery
        </h1>
    </div>

    <div class="gridContainer">
        <?php
            require_once "../Private_HTML/digitalLoadHandler.inc.php";
            $increment = 0;
            foreach ($result as $x){
                $m = "../Assets/NewDigitalArt/". $x['artimage'];
                $n = $x['name'];
                $o = $x['description'];
                $p = $x['date'];
                $q = $x['medium'];
                $r = $x['date'];
                echo "<script>
                            artCollectionLoad('$n','$o','$p','$q','$r');
                      </script> 
                      <div class='gridCell' onclick = 'reverseTest(this, getArtCollection($increment))'>
                         <img class=icon src='$m'>
                      </div>";
                $increment += 1;
            }
        ?>
        <footer class="footer">
            <div class="iconHolder">
                <img class= "icon" src="../Assets/Icons/4691478_patreon_icon.png">
                <a href="https://www.instagram.com/hannahquaydrawings?igsh=azI2bWtoZ2I4M28y"><img class= "icon" src="../Assets//Icons//instagram_icon.png" ></a>
            </div>
            <p>Hannah Quay. All Rights Reserved</p>    
        </footer>
    </div>

</body>
<script src="../JavaScript/gallery.js"></script>
<script src="../JavaScript/artPiece.js"></script>
</html>