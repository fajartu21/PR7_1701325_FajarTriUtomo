<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JOIN</title>
    <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo site_url();?>/control/index">
                <h3>Left Join</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url();?>/control/right">
                <h3>Right Join</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo site_url();?>/control/inner">
                <h3>Inner Join</h3>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Kode Kereta</th>
                <th>Nama Kereta</th>
                <th>Kode Kursi</th>
                <th>Kode Gerbong</th>
                <th>Nama Gerbong</th>

            </tr>
            <tr>
              <?php
                $a = 1;
                foreach ($lokomotif as $data) : //ngabsen data
            ?>
            <tr>
                <td><?php echo $a++; ?></td> 
                <td><?php echo $data->kd_kereta; ?></td>
                <td><?php echo $data->nama; ?></td>
                <td><?php echo $data->kd_kursi; ?></td>
                <td><?php echo $data->kd_gerbong; ?></td>
                <td><?php echo $data->nama;?></span></td>
            </tr>
            <?php
                endforeach;
            ?>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
