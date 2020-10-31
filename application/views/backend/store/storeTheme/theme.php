<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Theme List</span>
        </div>
        <div class="actions">
            <a class="btn btn-primary">Previous Site</a>
            <a href="<?=base_url('store/theme/buydesign/')?>" class="btn btn-primary">Buy Design</a>
        </div>
    </div>

    <div class="row">
        <?php
        if(!empty($activeTheme))
        {
        ?>
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="mt-comments">
                    <div class="row">
                        <div  class="col-lg-4 col-xs-12 col-sm-12">
                            <div class="mt-comment">
                                <div class="mt-comment-img">
                                    <img style="height: 50px;width: 50px;" src="https://s3-eu-central-1.amazonaws.com/salla-cdn/DIKi5Zr421FZFLcnloEAkNbbb6EFAv0wJ4pmkW9c.jpg"> </div>
                                <div class="mt-comment-body">
                                    <div class="mt-comment-info">
                                        <span class="mt-comment-author"><?=$activeTheme['Name']?></span>
                                        <span class="mt-comment-date"><?=$activeTheme['createdDateTime'].' '.$activeTheme['storeActivatedThemeId']?></span>
                                    </div>
                                    <div class="mt-comment-details">
                                        <a href="<?=base_url('store/theme/cssmodalui/'.dataEncode($activeTheme['storeActivatedThemeId']))?>" data-toggle="modal" data-target="#bigbasic" type="button" class="btn btn-info btn-sm" >Custom CSS</a> <span class="font-green-meadow bold uppercase"><i class="font-green-meadow fa fa-check-square"></i> Enable</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="col-lg-8 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div class="tab-content">

                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="row">
                                    <?php
                                    foreach ($themeList as $row) {
                                        if($row['activeThemeId']==null) {
                                            ?>

                                            <div class="col-md-4 col-sm-4 col-xs-6">
                                                <div class="mt-comment">

                                                    <div class="mt-comment-img">
                                                        <img style="height: 50px;width: 50px;" src="https://s3-eu-central-1.amazonaws.com/salla-cdn/DIKi5Zr421FZFLcnloEAkNbbb6EFAv0wJ4pmkW9c.jpg"> </div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author"><?=$row['Name']?></span>
                                                            <span class="mt-comment-date"><?=$row['createdDateTime'].' '.$row['storeActivatedThemeId']?></span>
                                                        </div>
                                                        <div class="mt-comment-details">
                                                            <a href="<?=base_url('store/theme/activethemeui/'.dataEncode($row['storeActivatedThemeId']))?>" data-toggle="modal" data-target="#basic" class="btn btn-success btn-sm">Active</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>