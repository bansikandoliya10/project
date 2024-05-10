<?php
include "header.php";
?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <h2>Locker Form</h2>
                <form action="insert1.php" method="post">
                    <div class="form-group row">
                        <label for="full name" class="col-sm-2 col-form-label">Full Nmae</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fullname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="number" placeholder="Mobile" name="mobile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="occuption" class="col-sm-2 col-form-label">Occcuption</label>
                        <div class="col-sm-10">
                            <input type="occuption" class="form-control" id="occuption" placeholder="Occuption" name="occuption">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="locker" class="col-sm-2 col-form-label">Type Of Locker</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="locker" placeholder="Type Of Locker" name="locker">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Price Of Locker</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="locker" placeholder="Type Of Locker" name="prilocker">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="key number" class="col-sm-2 col-form-label">Key Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="key" placeholder="Key Number" name="key">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nominee" class="col-sm-2 col-form-label">Name Of Nominee</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nominee" placeholder="Name Of Nominee" name="nominee">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rnominee" class="col-sm-2 col-form-label">Relation Nominee</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nominee" placeholder="Name Of Nominee" name="relnominee">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="aadhar" class="col-sm-2 col-form-label">Addhar Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="aadhar" placeholder="Addhar Number" name="aadhar">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html> -->

    <?php
    include "footer.php";
    ?>