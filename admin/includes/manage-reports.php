<?php
include('header.php');   
?>
<title>Dashboard - gafCommerce</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

<body>
  <!-- Sidebar -->
  <?php include('sidebar.php'); ?>

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Manage Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Reports</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Report List</h5>

              <!-- Search Input -->
              <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Search reports by users or status..." onkeyup="searchReports()">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
              </div>

              <!-- Reports Table -->
              <table class="table table-hover" id="reportsTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Report Type</th>
                    <th scope="col">Reported User</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // PHP logic to fetch reports and loop through them
                  $reports = [
                    ['id' => 1, 'type' => 'Abuse', 'user' => 'johndoe', 'status' => 'Pending'],
                    ['id' => 2, 'type' => 'Spam', 'user' => 'janedoe', 'status' => 'Resolved'],
                    ['id' => 3, 'type' => 'Harassment', 'user' => 'alexsmith', 'status' => 'Pending']
                  ];
                  foreach ($reports as $report) {
                    echo "<tr>
                            <th scope='row'>{$report['id']}</th>
                            <td>{$report['type']}</td>
                            <td>{$report['user']}</td>
                            <td><span class='badge bg-" . ($report['status'] == 'Resolved' ? 'success' : 'warning') . "'>{$report['status']}</span></td>
                            <td>
                              <a href='view-report.php?id={$report['id']}' class='btn btn-primary btn-sm'><i class='bi bi-eye'></i> View</a>
                              <a href='resolve-report.php?id={$report['id']}' class='btn btn-success btn-sm'><i class='bi bi-check-circle'></i> Resolve</a>
                            </td>
                          </tr>";
                  }
                  ?>
                </tbody>
              </table>
              <!-- End Reports Table -->

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<script>
// JavaScript function to filter reports table
function searchReports() {
  const input = document.getElementById('searchInput');
  const filter = input.value.toLowerCase();
  const table = document.getElementById('reportsTable');
  const rows = table.getElementsByTagName('tr');

  for (let i = 1; i < rows.length; i++) {
    let visible = false;
    const cells = rows[i].getElementsByTagName('td');
    for (let j = 0; j < cells.length; j++) {
      if (cells[j]) {
        const cellValue = cells[j].textContent || cells[j].innerText;
        if (cellValue.toLowerCase().indexOf(filter) > -1) {
          visible = true;
          break;
        }
      }
    }
    rows[i].style.display = visible ? '' : 'none';
  }
}
</script>

<?php include('admin/includes/footer.php'); ?>
