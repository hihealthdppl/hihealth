<?php
require_once('../../../../koneksi.php');
if (!isset($_SESSION['status'])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}
?>

<?php require_once("../../../../header/menu_header.php") ?>
    <main>
        <div class="container" style="margin-top: 100px;">
            <div class="row row-content">
                <div class="col-12">
                    <h3>Send us your question</h3>
                </div>

                <div class="col-12 col-md-9">
                    <form style="margin-top: 10px;" id="submit" method="GET" action="process.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label">Judul Pertanyaan</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Judul Pertanyaan" class="form-control" id="title" name="title" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail" class="col-md-3 col-form-label">Berikan Detail Pertanyaan</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="detail" name="detail" rows="14"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="text-right col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    Kirim pertanyaan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>
<?php require_once("../../../../footer/menu_footer.php")?>