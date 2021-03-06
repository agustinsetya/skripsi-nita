<?php $this->load->view('headeradmin'); ?>


    <div class="main-panel">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                    <div class="jumbotron text-center">
                        <h1>TAMBAH BASIS</h1>
                    </div>
                    <div class="card">
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <table class="table table-hover" id="contoh">

                                    <?php echo form_open_multipart('BasisPengetahuan/create');?>

									<?php echo validation_errors();  ?>
									<div class="from-group">
										<label for="">Kode Basis Pengetahuan</label>

										<input type="hidden" name="id_basis_pengetahuan" id="id_basis_pengetahuan"
											class="form-control" value="<?php echo $id_basis ?>">

										<input class="form-control" disabled value="<?php echo $id_basis ?>">
										<br>

                                        <label for="">Penyakit</label>

										<select name="id_penyakit" id="id_penyakit" class="form-control">
											<?php
												foreach ($penyakit as $key => $value) { ?>
											<option value="<?php echo $value->id_penyakit ?>">
												<?php echo $value->nama_penyakit ?>
											</option>
											<?php
												}
											?>
										</select>
										<br>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									<?php echo form_close();?>



                                </table>
                            </table>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

</div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
