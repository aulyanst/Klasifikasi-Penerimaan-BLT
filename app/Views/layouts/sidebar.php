<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

   
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-shadows"></i><span>Dataset</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="tables-data.html">
            <a class="nav-link" href="<?= base_url('admin/training') ?>">
              <i class="bi bi-circle"></i><span>Data Training</span>

            </a>
        </li>
        <li>
          <a href="tables-data.html">
            <a class="nav-link" href="<?= base_url('admin/testing') ?>">

              <i class="bi bi-circle"></i><span>Data Testing</span>
            </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('admin/prediction') ?>">
      <i class="bi bi-clipboard2-pulse"></i>
        <span>Prediction</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('admin/upload') ?>">
      <i class="bi bi-filetype-csv"></i>
        <span>Upload</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('admin/login') ?>">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->
  </ul>

</aside><!-- End Sidebar-->