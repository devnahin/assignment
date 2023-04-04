<?php require_once("inc/header.php");?>


<div class="container mt-5">

    <div class="row blog-content-area">
        <div class="col-lg-8 col-md-12">
            <!-- Single post item starts -->
                <div class="single-post">
                    
                    <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Post Image" class="img-fluid">
                    <div class="post-content">
                        <h2 class="post-title mt-2 mb-2">Post Title</h2>
                        <div class="post-meta">
                            <span class="author-name">Author Name</span>
                            <span class="post-date">Posted on April 1, 2023</span>
                            <span class="post-category">Category: Technology</span>
                        </div>
                        <h3>Why do we use it?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                        <h3>Where does it come from?</h3>

                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    </div>
                    <div class="author-box">
                        <img class="img-circle img-thumbnail" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDg0MHwwfGFsbHwxfHx8fHx8fHx8fHwxNjEyMDc1MTQ2&ixlib=rb-1.2.1&q=80&w=400" alt="Author Image" class="author-image">
                        <div class="author-info">
                            <h5 class="author-name">Author Name</h5>
                            <p class="author-bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae eaque debitis voluptas placeat, maiores iste vero similique qui harum voluptatum. Excepturi ipsam quam eligendi, earum expedita. Aliquam, quos iusto.</p>
                        </div>
                    </div>
                    <div class="social-sharing">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={URL}" target="_blank" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Share on Facebook</a>
                        <a href="https://twitter.com/intent/tweet?url={URL}&text={TITLE}" target="_blank" class="btn btn-info"><i class="fab fa-twitter"></i> Share on Twitter</a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={URL}" target="_blank" class="btn btn-secondary"><i class="fab fa-linkedin-in"></i> Share on LinkedIn</a>
                    </div>
                </div>
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
</div>


<div class="container mt-5">

</div>

<script>
    // Update social sharing buttons with the current URL and post title
    const postTitle = document.querySelector(".post-title").innerText;
    const currentUrl = window.location.href;
    
    document.querySelectorAll(".social-sharing a").forEach(link => {
        link.href = link.href.replace("{URL}", encodeURIComponent(currentUrl));
        link.href = link.href.replace("{TITLE}", encodeURIComponent(postTitle));
    });
</script>

<?php require_once("inc/footer.php");?>