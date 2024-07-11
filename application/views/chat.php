<!DOCTYPE html>
<html>

<head>
     <title>Live Chat</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>">
     <script src="https://kit.fontawesome.com/dd1776080c.js" crossorigin="anonymous"></script>
</head>

<body>
     <div id="wrapper">
          <div id="page-wrapper">
               <div class="container-fluid">
                    <div class="row">
                         <div class="col-lg-12">
                              <center>
                                   <h1 class="page-header">Live Chat</h1>
                              </center>
                         </div>
                    </div>

                    <div class="row">
                         <div class="col-md-6">
                              <form method="post" action="<?php echo base_url('chat/send_chat'); ?>">
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                             Send Message
                                        </div>
                                        <div class="panel-body">
                                             <div class="form-group">
                                                  <label for="username">Name:</label>
                                                  <input type="text" class="form-control" id="name" name="name" required>
                                             </div>
                                             <div class="form-group">
                                                  <label for="message">Message:</label>
                                                  <textarea class="form-control" id="message" name="message" required></textarea>
                                             </div>
                                        </div>
                                        <div class="panel-footer">
                                             <button type="submit" class="btn btn-primary fa-solid fa-paper-plane"> Send</button>
                                             <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary fa-solid fa-arrow-left"> Back</a>
                                        </div>
                                   </div>
                              </form>
                         </div>
                         <div class="col-md-6">
                              <div class="panel panel-default">
                                   <div class="panel-heading">
                                        Chat Box
                                   </div>
                                   <div class="panel-body">
                                        <div class="chat-box">
                                             <?php foreach ($chats as $chat) : ?>
                                                  <div class="chat-message">
                                                       <h4><?php echo $chat['name']; ?>:</h4>
                                                       <p><?php echo $chat['message']; ?></p>
                                                  </div>
                                             <?php endforeach; ?>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
</body>

</html>