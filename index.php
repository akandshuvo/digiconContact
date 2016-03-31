<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DigiconContact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="vendor/mdl/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="vendor/animate.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <?php
        include 'scripts/db.php';
        #######EVEN
        $query = "SELECT id,office_id,name,designation,email,mobile_num_1,mobile_num_2,department from contacts WHERE (id % 2) = 0 ";
        $result = $conn->query($query);
        #######ODD
        $query1 = "SELECT id,office_id,name,email,designation,mobile_num_1,mobile_num_2,department from contacts WHERE (id % 2) > 0 ";
        $result1 = $conn->query($query1);
        //$conn->close();
    ?>
    <!-- Simple header with fixed tabs. -->
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                  mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Digicon Contact center</span>
          </div>
          <!-- Tabs -->
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#it" class="mdl-layout__tab is-active">IT</a>
            <a href="#mis" class="mdl-layout__tab">MIS</a>
            <a href="#admin" class="mdl-layout__tab">ADMIN</a>
            <a href="#operation" class="mdl-layout__tab">OPERATION</a>
            <a href="#qa" class="mdl-layout__tab">QA</a>
            <a href="#kmt" class="mdl-layout__tab">KMT</a>
            <a href="#hr" class="mdl-layout__tab">HR</a>
            <a href="#bd_team" class="mdl-layout__tab">BD TEAM</a>
            <a href="#finance" class="mdl-layout__tab">FINANCE & ACCOUNT</a>
            <a href="#management" class="mdl-layout__tab">MANAGEMENT</a>
          </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Digicon Contact center</span>
        </div>
        <main class="mdl-layout__content">
<!------------------------------------------------------------------------------------------------------>
          <section class="mdl-layout__tab-panel is-active" id="it">
            <div class="page-content">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--1-col"></div>

                <div class="mdl-cell mdl-cell--5-col">
                  <?php
                     while($row = $result->fetch_assoc()) {
                         $id = $row['id'];
                         $office_id = $row['office_id'];
                         $name = $row['name'];
                         $designation=$row['designation'];
                         $email = $row['email'];
                         $mobile_num_1 = $row['mobile_num_1'];
                         $mobile_num_2 = $row['mobile_num_2'];
                         $department = $row['department'];
                 ?>
                  <div class="contact animated fadeInUp">
                    <div class="pic">
                      <img class="img-circle" src="image/img2.gif"   alt="" />
                    </div>
                    <div class="information">
                      <table>

                        <tr>
                          <td>ID</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $office_id ?></td>
                        </tr>
                        <tr>
                          <td>NAME</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $name ?></td>
                        </tr>
                        <tr>
                          <td>DESIGNATION</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $designation ?></td>
                        </tr>
                        <tr>
                          <td>EMAIL</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $email ?></td>
                        </tr>
                        <tr>
                          <td>MOBILE</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $mobile_num_1 ?>,&nbsp;&nbsp;&nbsp;<?php echo $mobile_num_2 ?></td>
                        </tr>
                        <tr>
                          <td>DEPARTMENT</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $department ?></td>
                        </tr>

                      </table>
                    </div>
                  </div>
                  <?php
                    }
                   ?>
                </div>
                <div class="mdl-cell mdl-cell--5-col">
                  <?php
                     while($row = $result1->fetch_assoc()) {
                         $id = $row['id'];
                         $office_id = $row['office_id'];
                         $name = $row['name'];
                         $desgination=$row['designation'];
                         $email = $row['email'];
                         $mobile_num_1 = $row['mobile_num_1'];
                         $mobile_num_2 = $row['mobile_num_2'];
                         $department = $row['department'];
                 ?>
                  <div class="contact animated  fadeInUp">
                    <div class="pic">
                      <img class="img-circle" src="image/img1.gif" alt="" />
                    </div>
                    <div class="information">
                      <table>
                        <tr>
                          <td>ID</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $office_id ?></td>
                        </tr>
                        <tr>
                          <td>NAME</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $name ?></td>
                        </tr>
                        <tr>
                          <td>DESIGNATION</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $designation ?></td>
                        </tr>
                        <tr>
                          <td>EMAIL</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $email ?></td>
                        </tr>
                        <tr>
                          <td>MOBILE</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $mobile_num_1 ?>,&nbsp;&nbsp;&nbsp;<?php echo $mobile_num_2 ?></td>
                        </tr>
                        <tr>
                          <td>DEPARTMENT</td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><?php echo $department ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php
                    }
                   ?>
                </div>

                <div class="mdl-cell mdl-cell--1-col"></div>
              </div>
            </div>
          </section>
<!------------------------------------------------------------------------------------------------------>
          <section class="mdl-layout__tab-panel" id="mis">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>

          <section class="mdl-layout__tab-panel" id="admin">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>

          <section class="mdl-layout__tab-panel" id="operation">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>

          <section class="mdl-layout__tab-panel" id="qa">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>

          <section class="mdl-layout__tab-panel" id="kmt">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>

          <section class="mdl-layout__tab-panel" id="hr">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>
          <section class="mdl-layout__tab-panel" id="bd_team">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>
          <section class="mdl-layout__tab-panel" id="finance">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>
          <section class="mdl-layout__tab-panel" id="management">
            <div class="page-content"><!-- Your content goes here --></div>
          </section>
        </main>
      </div>





    <script src="vendor/jquery-1.12.1.js" charset="utf-8"></script>
    <script src="vendor/mdl/material.js" charset="utf-8"></script>
    <script src="vendor/bootstrap/js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
