<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-10">
                <article>
                    <div class="post-image">
                        <div class="post-heading">
                            <h3><?=$item->title?></h3>
                            <p>
                                 <?=$item->dimention?>
                            </p><br>
                        </div>
                        <img src=<?="/uploads/$item->id.jpg"?> alt="" class="img-responsive" />
                    </div>

                    <p>
                        <strong> <?=$item->descr?></strong>
                    </p>
                   <!-- <div class="bottom-article">
                        <ul class="meta-post">
                            <li><i class="fa fa-calendar"></i><a href="#"> Mar 27, 2014</a></li>
                            <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">Design</a>, <a href="#">Blog</a></li>
                        </ul>
                    </div>-->
                </article>

</section>
