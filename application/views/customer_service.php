<!DOCTYPE html>
<html>

<head>
     <title>Customer Service</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://kit.fontawesome.com/dd1776080c.js" crossorigin="anonymous"></script>
</head>

<body>
     <style>
          body {
               background-color: #f7f7f7;
               font-family: Arial, sans-serif;
          }

          .container {
               margin-top: 50px;
          }

          .card {
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
          }

          .card-header {
               background-color: #007bff;
               color: #fff;
               font-weight: bold;
               text-transform: uppercase;
               letter-spacing: 1px;
          }

          .table td,
          .table th {
               vertical-align: middle;
          }
     </style>
     <div class="container">
          <div class="card">
               <center>
                    <div class="card-header">Daftar Customer Service</div>
               </center>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-striped">
                              <thead>
                                   <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php foreach ($customer_service as $cs) : ?>
                                        <tr>
                                             <td><?php echo $cs->id; ?></td>
                                             <td><?php echo $cs->nama; ?></td>
                                             <td><?php echo $cs->email; ?></td>
                                             <td><?php echo $cs->pesan; ?></td>
                                        </tr>
                                   <?php endforeach; ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

          <div class="card">
               <center>
                    <div class="card-header">Form Customer Service</div>
               </center>
               <div class="card-body">
                    <form action="<?php echo site_url('customer_service/save_customer_service'); ?>" method="post">
                         <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" name="nama" required>
                         </div>
                         <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" required>
                         </div>
                         <div class="form-group">
                              <label for="pesan">Pesan</label>
                              <textarea class="form-control" name="pesan" rows="5" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary fa-solid fa-paper-plane"> Kirim</button>
                         <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary fa-solid fa-arrow-left"> Back</a>
                    </form>
               </div>
          </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1css/bootstrap.min.css"></script>
</body>

</html>