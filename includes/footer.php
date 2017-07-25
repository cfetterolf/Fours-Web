<footer class="footer center">
  <div class="container vert-center">
    <p class="footer-text">Questions, suggestions, or comments?  <a id="contactText" href="#" data-toggle="modal" data-target="#emailModal"><strong>Contact Me</strong></a></p>
  </div>
  <h1 id="bigOne"></h1>
</footer>

<!-- Email Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Contact Fours</h3>
      </div>
      <div class="modal-body">

  <form id="contact-form" method="post" action="contact.php" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_name">Name</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="First & Last Name" required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_email">Email</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="something@example.com" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="ex: Fours is awesome!!!" rows="4" required="required" data-error="Please,leave me a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Send">
                </div>
            </div>
        </div>
      </form>


      </div>
    </div>
  </div>
</div>







<!-- <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase-messaging.js"></script>

<script>
  var config = {
    // ...
  };
  firebase.initializeApp(config);
</script> -->






<script type="text/javascript">

  $("#pop").on("click", function() {
    $('#myModal').modal(show); 
  });

</script>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>

    <script>$(".contentContainer").css("min-height",$(window).height());</script>

  
  </body>
</html>