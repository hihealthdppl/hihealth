<?php
require_once('../../../../koneksi.php');
if (!isset($_SESSION['username'])) {
    header('location:../../login/');
}
$id = $_GET['id'];
$query = "SELECT * FROM komunitas WHERE comunity_id='$id' ";
$question = $koneksi->query($query);
$row = mysqli_fetch_assoc($question);
$username = $_SESSION['username'];
$user_detail = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");
$user_detail = mysqli_fetch_assoc($user_detail);
?>

<?php require_once("../../../../header/menu_header.php")?>
    <main>
        <div class="main-container" style="position:absolute;left:25%;">
            <div class="reply-topic-container">
                <div class="reply-topic">
                    <div class="reply-topic-header">
                        <h1 class="h1">Forum Diskusi</h1>
                        <div class="reply-doctor-button-container" style="margin-top:30px">
                            <a class="btn btn-sucess reply-doctor-button-container" href="../" name="newQuestion">Back to comunity</a>
                        </div>
                    </div>
                    <div class="box"></div>
                </div>
                <div class="detail-container" style="margin-top: 70px;">
                    <div class="topic-title">
                        <h2>
                            Judul Topik : <?php echo $row['Judul'] ?>
                        </h2>
                        <div class="user-topic line-btm" style="margin-top: 25px;">
                            <div class="user-topic-top">
                                <div class="user-topic-info">
                                    <div class="profile-avatar" style="background-color: rgb(240, 181, 192); margin-bottom:25px">
                                        <?php echo $user_detail['Nama'][0] ?></div>
                                    <div class="user-topic-title">
                                        <h4><?php echo $user_detail['Nama'] ?></h4>
                                        <span class="small-text text-light-grey">Anggota</span>
                                    </div>
                                    <div class="user-topic-count">
                                        <div class="small-text"><?php echo $row['time_entry'] ?></div>
                                        <div class="small-text"> <?php echo $row['hour'] ?> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-topic-btm">
                                <p><?php echo $row['post_content'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $query = "SELECT * FROM comment WHERE comunity_id = '$id'";
                $answer = $koneksi->query($query);
                $answer = mysqli_fetch_assoc($answer);
                if(!empty($answer)) : 
                $usrname = $answer['username'];
                $nama = mysqli_fetch_assoc($koneksi->query("SELECT nama FROM user WHERE username = '$usrname'"));
                $nama = $nama['nama'];
                ?>
                <div class="doctor-topic line-btm broder">
                    <div id="doctorContainer" class="doctor-topic line-btm border">
                        <div class="doctor-topic-top">
                            <div class="doctor-topic-info">
                                <div class="answered-by">Komentar oleh: <?php echo $nama ?></div>
                                <div class="user-topic-info" style="margin-top:25px;">
                                    <div class="profile-avatar" style="background-color: rgb(240, 181, 192);">
                                        <?php echo $nama[0] ?></div>
                                    <div class="user-topic-title">
                                        <h4><?php echo $nama ?></h4>
                                        <span class="small-text text-light-grey">Anggota</span>
                                    </div>
                                    <div class="user-topic-count">
                                        <div class="small-text"><?php echo $answer['time_entry'] ?></div>
                                        <div class="small-text"> <?php echo $answer['hour'] ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-container">
                            <p>
                                <?php
                                echo $answer['comment_content'];
                                ?>
                            </p>
                        </div>
                        <div class="doctor-topic-btm">
                        </div>
                        <div class="by-doctor">
                            <div>Oleh: </div>
                            <div class="tag-doctor">Dr. <?php echo $nama ?></div>
                        </div>
                    </div>
                </div>
                <?php endif ?>
            </div>
            <div class="row row-content">
                <div class="col-12" style="margin-top: 70px;">
                    <h3>Ikut memberikan jawababan</h3>
                </div>

                <div class="col-12 col-md-12">
                    <form style="margin-top: 10px;" id="submit" method="GET" action="process.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="detail" class="col-md-12 col-form-label">Berikan Detail Penjelasan</label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="detail" name="detail" rows="14"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="text-right col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    Kirim Jawaban
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="question_id" value="<?php echo $row['comunity_id'] ?>" />
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>