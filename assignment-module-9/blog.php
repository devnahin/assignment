<?php require_once("inc/header.php");?>

<div class="container">  

    <div class="row blog-content-area">
        <div class="col-lg-8 col-md-12">

            <h3 class="mb-5">Recent Blog Post</h3>
            <!-- Single post item starts -->
            <?php for ($i = 0; $i < 4; $i++): ?>
            <div class="single-post d-md-flex">
                <div class="col-md-4 col-12 p-0">
                    <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" class="feature-image img-fluid">
                </div>
                <div class="col-md-8 col-12 post-content">
                    <h2 class="post-title">This is the title for this post</h2>
                    <p class="post-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores iste vero similique qui harum
                        voluptatum! Atque vitae dicta eaque beatae, est soluta consequatur adipisci dolorum, id quisquam debitis
                        voluptas placeat.</p>
                    <a class="btn read-more" href="single-post.php">Read More</a>
                </div>
            </div>
            <?php endfor; ?>
            <!-- Single post item ends -->
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
    <!-- Pagination starts -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Pagination ends -->
</div>


<?php require_once("inc/footer.php");?>