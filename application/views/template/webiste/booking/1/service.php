<section class=" middle-padding">
                        <div class="container">
                            <div class="section-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2>Our Service</h2>
                                <span class="section-separator"></span>
                               
                            </div>
                            <div class="row home-posts">

<?php
        foreach ($service as $key => $row) {
?>
                            
                                <div class="col-md-4">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <a href=""><img  src="<?=$row['imgOG']?>"   alt=""></a>
                                        </div>
                                        <div class="sale-window"><?=$row['categoryName_en']?></div>
                                        <div class="card-post-content">
                                            <p><a href=""><?=$row['cost']?></a></p>
                                            <h3><a href=""><?=$row['serviceName_en']?></a></h3>
                                        </div>
                                       
                                    </article>
                                </div>
<?php
        }
?>                                

                            </div>
                         
                           
                        </div>
                        <div class="section-decor"></div>
                    </section>
