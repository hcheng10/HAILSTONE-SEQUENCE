#!/usr/local/bin/php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo 'initial num: ' ,$_GET['x']; ?></title>
        <link rel="stylesheet" href="style.css?v=6">
    </head>
    <body>
        <table>
            <thead>
                <tr> <td class="left"> Iteration </td> <td class="right"> x </td> </tr>
            </thead>

            <tbody>
                <?php 
                    $index = 0;
                    if (isset($_GET['x'])) {
                        $num = (int)$_GET['x']; 
                    
                        ?>
                        <!-- first row in the table -->
                        <tr> <td class="left"> <?php echo $index; ?> </td> <td class="right"> <?php echo $num; ?> </td> </tr>

                        <?php
                        while($num !== 1) { 
                            $index++;
                            if ($num % 2 === 0) {
                                $num = $num / 2;
                            } else {
                                $num = 3*$num + 1;
                            } ?>

                            <?php 
                            if($num === 1) { ?>
                                <tr> <td id="last"> <?php echo $index; ?> </td> <td> <?php echo $num; ?> </td> </tr>
                                <?php    
                                } else { ?>
                                <tr> <td class="left"> <?php echo $index; ?> </td> <td class="right"> <?php echo $num; ?> </td> </tr>
                                <?php
                            }
                        }
                    }
                ?>
            </tbody>
        </table>

    <footer>
        <small> &copy; <em id="date">2022</em> Harvey Cheng </small>
    </footer>
    </body>
</html>