<?php require_once("inc/header.php");?>



<div class="container mt-5">
    <div class="row blog-content-area">
        <div class="col-lg-8 col-md-12">
            <h1>Contact Us</h1>
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    Your message has been sent successfully. We'll get back to you shortly.
                </div>
            <?php endif; ?>
              <form action="submit.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
                <div class="col-lg-4 col-md-12">
            <div class="sidebar-area">
                <h3>Search</h3>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <br>
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Category 1</a></li>
                    <li><a href="#">Category 2</a></li>
                    <li><a href="#">Category 3</a></li>
                    <li><a href="#">Category 4</a></li>
                    <li><a href="#">Category 5</a></li>
                    <li><a href="#">Category 6</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php require_once("inc/footer.php");?>