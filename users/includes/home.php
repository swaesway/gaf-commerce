<?php
session_start();
include('header.php');
include('productCard.php'); // Include the product card component
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAF-commerce Home</title>
    <style>
        /* General Styles */
        .main {
            padding: 20px;
            background-color: #f9f9f9;
        }

        /* Product Card Styles */
        .col-6 {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .card {
            flex: 1;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 8px;
            margin-bottom: 10px;
           
        }

    

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 8px;
            font-size: 13px;
        }

        .card-body {
            padding: 0; /* Remove padding for a tighter layout */
        }

        .card-title {
            font-size: 13px;
            font-weight: 500;
            margin: 4px 0; /* Adjust margins for compactness */
        }

        .description {
            font-size: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 4px 0; /* Adjust margins for compactness */
        }

        .imageupload {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            overflow: hidden;
            border-radius: 6px;
            margin-top: 6px;
        }

        .imageupload img {
            width: 100%; /* Full width of the card */
            height: auto; /* Maintain aspect ratio */
            border-radius: 6px 6px 0 0; /* Round only the top corners */
            object-fit: cover; /* Cover the container without distortion */
            max-height: 150px; /* Set a maximum height for uniformity */
        }

        .card-footer {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 6px;
            font-size: 1em;
        }

        .card-footer i {
            cursor: pointer;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .card-footer i:hover {
            color: #e63946;
        }

        /* Top Sellers Section */
        .topsellers {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 1;
            line-height: 1.5;
            max-height: calc(1.5em * 2);
            font-size: 13px;
        }

        /* Modal Styles */
        .modal-content {
            padding: 15px;
        }

        .modal-body p {
            margin-bottom: 6px;
            font-size: 14px;
        }

        .modal-footer .btn {
            width: 100%;
            font-size: 13px;
        }

        .btn  .icon {
        color: #13B206; /* Default icon color */
        transition: color 0.3s ease; /* Smooth transition for hover effect */
        }

         .btn:hover .icon {
        color: #EEC108; /* Icon color on hover */
        }

    </style>
</head>

<body>

    <div class="main" id="main">
        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-9">
                    <!-- Product Cards -->
                    <div class="row">
                        <?php
                        
                        renderProductCard("Joseph Whajah Evonlah", "29th April, 2024, 08:4213", "Military No.1 Uniform", "15,000,000", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dignissimos. Tempora porro officia a, iste explicabo aliquid architecto dolor nulla.", "../../uploads/Number-One.jpg");

                        renderProductCard("Abena Uchiha ", "30th September, 2024, 10:43", "Army Strong Combat Boots", "3,000,000", "Mountaineering Battlefield Combat Boots high-top Desert Combat Boots Comfortable Breathable Combat Boots", "../../uploads/Mountaineering Battlefield Combat Boots high-top Desert Combat Boots Comfortable Breathable Combat Boots.jpg");
                        
                        renderProductCard("Akosua Adjei Ichigo", "5th July, 2024, 10:43", "Military Camo (Tactical)", "10,000", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quasi assumenda animi autem ullam praesentium laudantium nihil consectetur. Quas, obcaecati.", "../../uploads/Camo-Tactical.jpg");

                        renderProductCard("John Miller", "29th April, 2024, 08:4213", "MT Tactical Vest for Men MOLLE Adjustable Chest Rig Combat Vests Lightweight Military Vest with Leg Pack OCP", "15,000,000", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dignissimos. Tempora porro officia a, iste explicabo aliquid architecto dolor nulla.", "../../uploads/MT Tactical Vest for Men MOLLE Adjustable Chest Rig Combat Vests Lightweight Military Vest with Leg Pack OCP.jpg");

                        renderProductCard("Whajah Miller", "29th April, 2024, 08:4213", "Army Tactical-OG", "15,000,000", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dignissimos. Tempora porro officia a, iste explicabo aliquid architecto dolor nulla.", "../../uploads/Tactical-OG.jpg");

                        renderProductCard("Kofi Uzumaki", "2th May, 2024, 10:43", "Tactical 25L Combat Camouflage Bag Outdoor Sports Pack Hiking Rucksack Knapsack Molle Backpack (Black)", "3,000,000", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dignissimos. Tempora porro officia a, iste explicabo aliquid architecto dolor nulla.", "../../uploads/Tactical 25L Combat Camouflage Bag Outdoor Sports Pack Hiking Rucksack Knapsack Molle Backpack.jpg");

                        renderProductCard("Kofi Uzumaki", "2th May, 2024, 10:43", "Back pack with water bladder", "3,000,000", "Lorem ipsum dolor sit amet.", "../../uploads/Back pack with water bladder.jpg");

                        renderProductCard("Joseph Evonlah", "29th April, 2024, 08:4213", " Military 80L Tactical Outdoor Waterproof Adjustable Sports Bag", "15,000,000", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dignissimos. Tempora porro officia a, iste explicabo aliquid architecto dolor nulla.", "../../uploads/80L Tactical Outdoor Waterproof Adjustable Sports Bag.jpg");




                        ?>
                    </div>
                    <!-- End Product Cards -->
                </div>

                <div class="col-md-3">
                    <!-- Top Sellers -->
                    <div class="card" style='padding:0 0 40px 30px;'>
                        <div class="card-body">
                            <h5 class="card-title">Top Sellers<span>| Stores</span></h5>
                            <div class="activity">
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Joseph Whajah Evonlah</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Akosua Adjei Ichigo</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">John Miller</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Kofi Uzumaki</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">What's New<span>| Stores</span></h5>
                            <div class="activity">
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Military No.1 Uniform</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Army Strong Combat Boots</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Military Camo (Tactical)</a></small>
                                    </div>
                                </div>
                                <div class="activity-item d-flex">
                                    <i class='bi bi-diagram-3 activity-badge text-success align-self-start'></i>
                                    <div class="activity-content ms-2">
                                        <small><a href="#" class="fw-small text-dark topsellers">Back pack with water bladder</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Sellers -->
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactmodal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quod, itaque totam iste labore dolor, fugit ipsam adipisci nemo quasi, tempora minima dolorum eligendi obcaecati recusandae blanditiis ab in? Deleniti.</p>
                    <p>Price: GHC 200.00</p>
                    <p>Item Owner: Bawumia Mahamadu</p>
                    <p>Contact: 0556524653</p>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" style="width: 100%;">Request callback</button>
                    </div>
                    <div class="mb-3 text-center">
                        <a href="viewmore.php"><button class="btn btn-primary" style="width: 100%;">View more</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
