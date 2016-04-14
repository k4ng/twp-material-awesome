			<!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Recent Comments</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
						<?php
							$args = array(
								'status' => 'approve',
								'number' => 8
							);
							$comments = get_comments($args);
							foreach($comments as $comment) :
						?>
							<li class="list-group-item" id="parent-<?php echo $comment->comment_ID;?>">
								<a data-toggle="collapse" data-parent="#parent-<?php echo $comment->comment_ID;?>" href="#cmn-<?php echo $comment->comment_ID;?>" aria-expanded="false">
									<!--div class="avatar">
										<img src="#">
									</div-->
									<span class="name"><?php echo ucfirst(get_comment_author( $comment_ID )); ?></span>
								</a>
								<i class="md md-textsms"></i>
								<span class="clearfix"></span>
								
								<div id="cmn-<?php echo $comment->comment_ID;?>" class="panel-collapse collapse" aria-expanded="false">
                                    <small>
										Comment On 
										<a href="<?php echo get_permalink($comment->comment_post_ID);?>">
											<?php echo get_post($comment->comment_post_ID)->post_title;?>
										</a>
									</small>
									<blockquote style="font-size:11px;"><?php echo $comment->comment_content;?></blockquote>
                                </div> 
								<span class="clearfix"></span>
							</li>
						<?php endforeach; ?>
						
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->