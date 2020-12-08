<?php
require_once("../../../koneksi.php");
$query = "SELECT * FROM komunitas";
$result = $koneksi->query($query);
// print_r (mysqli_fetch_assoc($result));
?>
<?php require_once("../../../header/menu_header.php") ?>
        <main>
            <div class="container" style="margin-top:130px ">
                <h1>Forum komunitas</h1>
                <div class="row" style="margin-top: 25px;">
                    <a class="btn btn-primary col-md-6" href="./topik" name="questionList">Lihat Berdasarkan Topik </a>
                    <div class="col-md-1"></div>
                    <a class="btn btn-sucess col-md-5 " href="./create-forum" name="newQuestion">Buat Forum Baru</a>
                </div>
                <?php
                while ($row = mysqli_fetch_assoc($result)) :
                ?>
                    <div class="related-topic-card" style="margin-top: 50px;">
                        <div class="topic-info">
                            <div class="total-reply">0 balasan</div>
                            <div class="reply-time"><?php echo $row['time_entry'] ?></div>
                        </div>
                        <div class="topic-container">
                            <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                                <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                                    <div id="profileAvatar" class="profile-avatar" style="background-color: rgb(225, 194, 169);"><?php echo $row['username'][0] ?></div>
                                </a>

                                <div class="topic-title">
                                    <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>"><h5><?php echo $row['username']; ?></h5></a>
                                    <p class="title" style="margin-top: 0px;"> <?php echo $row['Judul'] ?> </p>
                                    <div class="topic-by">
                                        <a href="./komunitas/index.php?id=<?php echo $row['id'] ?>"><?php  ?></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="topic-detail">
                            <p class="title"><a href="./komunitas/index.php/?id= <?php echo $row['comunity_id'] ?>">
                                </a></p>
                            <div>
                                <p><?php echo $row['post_excerpt'] ?></p>
                            </div><a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                            </a>
                            <p></p>
                        </div>

                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <!-- <?php
                    if (isset($_GET['filter'])) :
                    ?>
            <?php
                        if ($_GET['filter']) :
            ?>
            <?php
                        endif;
            ?>
        <?php
                    endif;
        ?> -->
        </main>

</body>

</html>