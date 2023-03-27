<?php include('header.php');?>
<div class="container mt-5 p-4 px-2 border rounded border-primary col-6">
  <h1 class="text-center"> Fill Your Records </h1>
            <form method="post" action="submit-form.php">
            <div class="form-group ">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required autocomplete="email">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required autocomplete="tel">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>

  </div>
    <?php include('footer.php');?>
	<script>
			$(document).ready(function() {
				// Check if the URL parameter 'message' exists and show the popup message if it does
				if (window.location.search.indexOf('message=Data_updated_successfully') !== -1) {
					alert('Data updated successfully');
				}
			});
	</script>
</body>
</html>

