<div class="site-newsletter">
    <div class="container">
        <div class="text-center">
            <h3 class="h4 mb-2">Subscribe to our newsletter</h3>
            <p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>

            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
                        <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Subscribe</button>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-instagram">
    <div class="action">
        <a class="btn btn-light" href="#">
            Follow us @ Instagram
        </a>
    </div>
    <div class="row no-gutters">
        <div class="col-sm-6">
            <div class="row no-gutters">
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/1.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/2.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/3.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/4.jpg" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row no-gutters">
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/5.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/6.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/7.jpg" alt="" />
                    </a>
                </div>
                <div class="col-3">
                    <a class="photo" href="#">
                        <img class="img-fluid" src="img/instagram/8.jpg" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="site-footer bg-darkest">
    <div class="container">

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#">Privacy policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Advertise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-contact.html">Contact</a>
            </li>
        </ul>
        <div class="copy">
            &copy; Milo 2019<br />
            All rights reserved
        </div>
    </div>
</footer>

<script src="js/app.js"></script>

<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
     */

    var disqus_config = function () {
    this.page.url = "<?='http://'.$_SERVER['HTTP_HOST'];?>" ;// Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = "<?=$post['id'];?>" ;// Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://kago-blog.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
</html>