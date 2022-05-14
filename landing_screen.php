<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
    <!--Bootstrap Core css and JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap Core css and JS-->

    <?php
        //CONNECTION HERE THIS IS TEMPORARY!!!!
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'blogsite_database';

        $dsn = "mysql:host=$host;dbname=$dbname";
    ?>


</head>
<body>

<!--Header-->
    <div class="headerPlace">
        <ul>
            <li><a id="logout" href="logout.php">LOGOUT</a></li>
            <li><a href="article.php">Create</a></li>
            <li><a href="profile.php">Profile</a></li> 
        </ul>
    </div>
<!--END OF Header-->
    <?php
        $pdo = new PDO($dsn,$user,$password);
        //PDO query
        $stmt = $pdo->query("SELECT * FROM articles");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-8">

                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://via.placeholder.com/893x180" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']."<br/>"; ?></h5>
                            <p>By:<?php echo $row['author']."<br/>"; ?></p>
                            <a class="btn btn-primary mb-2" data-bs-toggle="collapse" href=#id<?php echo $row['id'];?> role="button" aria-expanded="false" aria-controls="collapseExample">
                                Read Article
                            </a>
                            <div class="collapse" id="id<?php echo $row['id']; ?>">
                                <div class="card card-body mt-2">
                                    <?php echo $row['content']."<br/>"; ?>                                
                                </div>
                            </div>
                            <p class="card-text mt-2"><small class="text-muted">Date Posted : <?php echo $row['date']."<br/>"; ?> </small></p>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>
        </div>
            <div class="col-4">
            
            </div>
        </div>
</body>
</html>
