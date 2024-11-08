<?php
include('header.php');
?>



        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">My Products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Products</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1001</td>
                                    <td>Smartphone XYZ</td>
                                    <td>Electronics</td>
                                    <td>
                                        <a href="edit_product.php?id=1001" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1001" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1002</td>
                                    <td>Leather Boots</td>
                                    <td>Footwear</td>
                                    <td>
                                        <a href="edit_product.php?id=1002" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1002" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1003</td>
                                    <td>Organic Apples</td>
                                    <td>Food Stuffs</td>
                                    <td>
                                        <a href="edit_product.php?id=1003" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1003" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1004</td>
                                    <td>Winter Jacket</td>
                                    <td>Clothing</td>
                                    <td>
                                        <a href="edit_product.php?id=1004" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1004" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1005</td>
                                    <td>Rice Pack 5kg</td>
                                    <td>Grocery</td>
                                    <td>
                                        <a href="edit_product.php?id=1005" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1005" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1006</td>
                                    <td>Microwave Oven</td>
                                    <td>Home Appliances</td>
                                    <td>
                                        <a href="edit_product.php?id=1006" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1006" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1007</td>
                                    <td>Smart TV 55"</td>
                                    <td>Electronics</td>
                                    <td>
                                        <a href="edit_product.php?id=1007" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1007" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1008</td>
                                    <td>Running Shoes</td>
                                    <td>Footwear</td>
                                    <td>
                                        <a href="edit_product.php?id=1008" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1008" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1009</td>
                                    <td>Bananas (1 Dozen)</td>
                                    <td>Food Stuffs</td>
                                    <td>
                                        <a href="edit_product.php?id=1009" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1009" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1010</td>
                                    <td>Casual T-Shirt</td>
                                    <td>Clothing</td>
                                    <td>
                                        <a href="edit_product.php?id=1010" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=1010" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


<?php
include('footer.php');
?>