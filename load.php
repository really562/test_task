
<?php
               require_once "db/database.php";
               $stmt=$pdo->prepare("SELECT * FROM comments");
               $stmt->execute();
               $comments = $stmt->fetchAll();
                   foreach ($comments as $comment)
                   {
                    echo '<div class="comments">';
                    echo '<div class="user" id="user" name="user">';
                    echo $comment["name"];
                    echo '</div>';
                    echo '<div class="date" id="date" name="date">';
                    $new_date = date('d-m-Y', strtotime($comment["date"]));
                    $new_time = date('H:i', strtotime($comment["time_hour"]));
                    echo $new_time;
                    echo 'TEST';
                    echo '&nbsp;&nbsp';
                    echo $new_date;
                    echo '</div>';
                    echo '<div class="text" id="text" name="text">';
                    echo $comment["message"];
                    echo '</div>';
                    echo '</div>';
                   }