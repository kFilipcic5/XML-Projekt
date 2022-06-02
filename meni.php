<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stil.css">    
        <link rel="stylesheet" href="bootstrap.min.css">  
        <title>Naslovna</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <script src="https://kit.fontawesome.com/b05e340512.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <nav class="container-fluid">
                <div class="row">
                    <div  class="col-lg-3">
                        <i class="fa-solid fa-drumstick-bite"></i>
                        <span>ZaBatak</span>
                    </div>
                    <div class="col-lg-1">
                        <a id="hover" class="link" href="index.html">Naslovna</a>
                    </div>
                    <div class="col-lg-2">
                        <a class="link" href="meni.php">Jelovnik</a>
                    </div>
                    <div class="col-lg-1"></div>      
                    </div>
                    
                    
                </div>
               
            </nav>
            
        </header> 

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 meniNaslov">
                        <?php
                            if (file_exists('hrana.xml')) {
                            $xml = simplexml_load_file('hrana.xml');
                            }else {
                            exit('Failed to open hrana.xml.');
                            }
                        ?>
                        <h2>U našem jelovniku sigurno možete pronaći nešto po svom ukusu!</h2> 
                    </div>
                    <div class="col-12 meni">
                        <h2>Hrana</h2>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4" style="margin-top: 50px;">
                                    <img src="images/juha.jfif">
                                </div>
                                <div class="col-lg-8" style="margin-top: 50px;">
                                    <h3>Juhe</h3>
                                    <hr>
                                    <?php
                                        foreach($xml -> kategorija[0] -> jelo as $kategorija)
                                        {
                               
                                            echo "<h4>".$kategorija -> ime."................................Cijena:".$kategorija -> cijena."</h4>";
                                            echo "<p class = 'opis'>".$kategorija -> opis."</p>";
                                        }
                                        
                                    ?>
                                    
                                    
                                </div>
                                <div class="col-lg-8" style="margin-top: 50px;">
                                    <h3>Glavna Jela</h3>
                                    <hr>
                                    
                                    <?php
                                        foreach($xml -> kategorija[1] -> jelo as $kategorija)
                                        {
                               
                                            echo "<h4>".$kategorija -> ime."................................Cijena:".$kategorija -> cijena."</h4>";
                                            echo "<p  class = 'opis'>".$kategorija -> opis."</p>";
                                        }
                                        
                                    ?>    
                                    
                                </div>
                                <div class="col-lg-4" style="margin-top: 50px;">
                                    <img src="images/Moroccan Cauliflower with Tahini-Honey (5 Ingredients).png">
                                </div>
                                <div class="col-lg-4" style="margin-top: 50px;">
                                    <img src="images/cevapi.jpg">
                                </div>
                                <div class="col-lg-8 tip" style="margin-top: 50px;">
                                    <h3>Jela sa roštilja</h3>
                                    <hr>
                                    <?php
                                        foreach($xml -> kategorija[2] -> jelo as $kategorija)
                                        {
                               
                                            echo "<h4>".$kategorija -> ime."................................Cijena:".$kategorija -> cijena."</h4>";
                                            echo "<p class = 'opis'>".$kategorija -> opis."</p>";
                                        }
                                        
                                    ?>
                                    
                                </div>
                                <div class="col-lg-8" style="margin: 50px 0px;">
                                    <h3>Slastice</h3>
                                    <hr>
                                    <?php
                                        foreach($xml -> kategorija[3] -> jelo as $kategorija)
                                        {
                               
                                            echo "<h4>".$kategorija -> ime."................................Cijena:".$kategorija -> cijena."</h4>";
                                            echo "<p class = 'opis'>".$kategorija -> opis."</p>";
                                        }
                                        
                                    ?>    
                                </div>
                                <div class="col-lg-4" style="margin: 50px 0px;">
                                    <img src="images/palacinke.jpg">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>
        <footer class="container-fluid">
            <div class="row">
                <div class="col-12"><h2>Karlo Filipčić</h2></div>
                <hr><br>
                <div class="col-12" style="text-align: center;"><input type="text" class="newsletter" placeholder="EMAIL:"></div>
            </div>
        </footer>

    </body>


</html>
