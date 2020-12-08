<?php
require_once('../../../koneksi.php');
if (!isset($_SESSION['status'])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<meta http-equiv='refresh' content='1;url=../../user/login/'>";
}

$query = 'SELECT * FROM konsultasi';
$result = mysqli_query($koneksi, $query);
?>

<?php 
require_once("../../../header/menu_header.php");
?>
    <main>
        <div class="main-container" style="margin-top:0px; margin-left:150px" >
            <h1>Tanya Dokter</h1>
            <a class="btn btn-primary" href="./topik" name="questionList" style = "margin:25px 0px 25px 0px; ">Cari pertananyaan Berdasarkan Topik </a>
            <?php
            if ($_SESSION['level'] == 'user') :
            ?>
                <a class="btn btn-sucess" href="./buatpertanyaan" name="newQuestion">Buat pertanyaan baru</a>
            <?php
            endif;
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result)) :
            ?>
                <div class="related-topic-card">
                    <div class="topic-info">
                        <div class="total-reply">0 balasan</div>
                        <div class="reply-time"><?php echo $row['time_entry'] ?></div>
                    </div>
                    <div class="topic-container">
                        <a href="./detail/index.php?id=<?php echo $row['question_id'] ?>">
                            <div id="profileAvatar" class="profile-avatar" style="background-color: rgb(225, 194, 169);"><?php echo $row['nama'][0] ?></div>
                            <div class="topic-title">
                                <p class="title"> <?php echo $row['judul'] ?> </p>
                                <div class="topic-by">
                                    <a href="./detail/index.php?id=<?php echo $row['id'] ?>"><?php  ?></a>
                                </div>
                            </div>
                    </div>
                    <div class="topic-detail">
                        <p class="title"><a href="./detail/index.php/?id= <?php echo $row['question_id'] ?>">
                            </a></p>
                        <div>
                            <p><?php echo $row['post_excerpt'] ?></p>
                        </div><a href="./detail/index.php?id=<?php echo $row['question_id'] ?>">
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
<?php 
require_once("../../../footer/menu_footer.php")
?>