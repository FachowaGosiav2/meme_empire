<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <title>Memy</title>
    </head>
    <body>
        <div class="header">
            <h1>Menu</h1>
        </div>
        <div>
        <?php 
            $con = new mysqli("127.0.0.1", "root", "", "memes");

            $q ="SELECT `id`, `file`, `like`, `created_ad`, `title` FROM memes WHERE `id` = 2 ";
             
            if ($wynik = $con->query($q))
            while($row=$wynik->fetch_array()){
                {
                    
                    echo '
                        <p>Tytuł '.$row["title"].'</p>
                        <p>Data '.$row["created_ad"].'</p>
                        <img class="meme_1" src="'.$row["file"].'" alt="'.$row["title"].'">
                        <p>Like '.$row["like"].'</p>
                        ';
                }
            }
            ?>
            <?php 
            $q ="SELECT `id`, `content`, `memes_id` FROM `comments` WHERE `memes_id` = 2";
             
            if ($wynik = $con->query($q))
            while($row=$wynik->fetch_array()){
                {
                    
                    echo '
                        <p>Co napaial'.$row["content"].'</p>
                        ';
                }
            }
            ?>
        </div>
    </body>
</html>