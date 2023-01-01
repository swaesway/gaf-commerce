<?php
    include('header.php');   

?>
    <title>Dashboard - gafCommerce</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Manage Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Users</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User List</h5>

              <!-- Search Input -->
              <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Search users by username or email...">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
              </div>

              <!-- User Table -->
              <table class="table table-hover" id="userTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // PHP logic to fetch users and loop through them
                  // Sample data shown here for illustration
                  $users = [
                    ['id' => 1, 'username' => 'johndoe', 'email' => 'johndoe@example.com', 'status' => 'Active'],
                    ['id' => 2, 'username' => 'janedoe', 'email' => 'janedoe@example.com', 'status' => 'Suspended']
                  ];
                  foreach ($users as $user) {
                    echo "<tr>
                            <th scope='row'>{$user['id']}</th>
                            <td>{$user['username']}</td>
                            <td>{$user['email']}</td>
                            <td><span class='badge bg-" . ($user['status'] == 'Active' ? 'success' : 'danger') . "'>{$user['status']}</span></td>
                            <td>
                              <a href='view-user.php?id={$user['id']}' class='btn btn-primary btn-sm'><i class='bi bi-eye'></i> View</a>
                              <a href='block-user.php?id={$user['id']}' class='btn btn-warning btn-sm'><i class='bi bi-lock'></i> Block</a>
                              <a href='suspend-user.php?id={$user['id']}' class='btn btn-danger btn-sm'><i class='bi bi-x-circle'></i> Suspend</a>
                            </td>
                          </tr>";
                  }
                  ?>
                </tbody>
              </table>
              <!-- End User Table -->

            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
