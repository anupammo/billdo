<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>BillDo - Do your Billing</title>
</head>

<body>
    <section class="my-3">
        <div class="container">
            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary shadow-none" data-toggle="modal" data-target="#exampleModal">
                    + Add Item
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Items</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-center">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $query = $this->db->query("SELECT * FROM invdtls;");
                            foreach ($query->result() as $row)
                            {
                                echo "<tr>";
                                echo "<td>".$row->invdtlsslno."</td>";
                                echo "<td><span class='h5'>".$row->invdtlsprdnm."</span><br><span>".$row->invdtlsprddtls."</span></td>";
                                echo "<td class='text-center'>".$row->invdtlsamnt."</td>";
                                echo "<td class='text-center'>".$row->invdtlsqty."</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- <form id="items">
                        <div class="row mb-2">
                            <div class="col-12 col-sm-8 form-group">
                                <div class="form-group">
                                    <label class="text-primary">Description</label>
                                    <textarea class="form-control shadow-none" rows="3"
                                        placeholder="Product descriptions"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 form-group">
                                <div class="form-group">
                                    <label class="text-primary">Quantity</label>
                                    <input type="number" min="1" max="100" class="form-control shadow-none"
                                        placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <label class="text-primary">Price</label>
                                    <input type="number" class="form-control shadow-none" placeholder="Amount">
                                </div>
                            </div>
                        </div>
                    </form> -->
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control shadow-none" rows="3" placeholder="Product descriptions"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control shadow-none" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="number" class="form-control shadow-none" placeholder="Amount">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>