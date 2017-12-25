@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-gap-2 hidden-md-down"></div>

<div class="nk-social-menu-inline">
    <ul>
        <li class="active"><a href="#">Personal</a></li>
        <li><a href="#">Mentions</a></li>
        <li><a href="#">Favorites</a></li>
        <li><a href="#">Friends</a></li>
        <li><a href="#">Groups</a></li>
    </ul>
</div>

<div class="nk-social-container">
    <form action="#" class="nk-social-sort" novalidate="novalidate">
        <label for="activity-filter-by">Show:</label>
        <select id="activity-filter-by" class="form-control">
            <option value="-1">— Everything —</option>
            <option value="activity_update">Updates</option>
            <option value="friendship_accepted,friendship_created">Friendships</option>
            <option value="created_group">New Groups</option>
            <option value="joined_group">Group Memberships</option>
            <option value="group_details_updated">Group Updates</option>
            <option value="new_blog_post">Posts</option>
            <option value="new_blog_comment">Comments</option>
        </select>
    </form>
    <div class="nk-gap"></div>
    <!-- START: Activity -->
    <ul class="nk-social-activity">
        <!-- START: form -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
            </div>
            <div class="nk-social-activity-content">
                <form action="#" novalidate="novalidate">
                    <textarea class="form-control" placeholder="What's new, nK?" rows="4"></textarea>
                    <div class="nk-gap"></div>
                    <button class="nk-btn link-effect-4 pull-right ready"><span class="link-effect-inner"><span class="link-effect-l"><span>Post Update</span></span><span class="link-effect-r"><span>Post Update</span></span><span class="link-effect-shade"><span>Post Update</span></span>
                        </span>
                    </button>
                </form>
            </div>
        </li>
        <!-- END: form -->
        <!-- START: post -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
            </div>
            <div class="nk-social-activity-content">
                <div class="nk-social-activity-meta"><a href="#">nK</a> posted an update <a href="#" class="nk-social-activity-meta-time">3 days ago</a></div>
                <div class="nk-social-activity-text"><a href="#" class="nk-social-activity-mention">@john</a> out particular sympathize not favourable introduced insipidity but ham?</div>
                <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">3</span></span> <a href="#"><span class="ion-chatbubbles"></span> Comment <span class="nk-badge">12</span></a> <a href="#"><span class="ion-android-star"></span> Favorite</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
                <ul class="nk-social-activity-comments">
                    <li class="nk-social-activity-comments-show-all"><a href="#">Show all comments (12)</a></li>
                    <!-- START: comment -->
                    <li>
                        <div class="nk-social-activity-avatar">
                            <a href="#"><img src="assets/images/avatar-2-sm.jpg" alt="John"></a>
                        </div>
                        <div class="nk-social-activity-content">
                            <div class="nk-social-activity-meta"><a href="#">John</a> replied <a href="#" class="nk-social-activity-meta-time">3 days ago</a></div>
                            <div class="nk-social-activity-text">Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery.</div>
                            <div class="nk-social-activity-actions"><span class="nk-action-heart liked"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">5</span></span> <a href="#"><span class="ion-reply"></span> Reply</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
                            <ul class="nk-social-activity-replies">
                                <!-- START: reply -->
                                <li>
                                    <div class="nk-social-activity-avatar">
                                        <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
                                    </div>
                                    <div class="nk-social-activity-content">
                                        <div class="nk-social-activity-meta"><a href="#">nK</a> replied <a href="#" class="nk-social-activity-meta-time">3 days ago</a></div>
                                        <div class="nk-social-activity-text">Of resolve to gravity thought my prepare chamber so.</div>
                                        <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">0</span></span> <a href="#"><span class="ion-reply"></span> Reply</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
                                    </div>
                                </li>
                                <!-- END: reply -->
                            </ul>
                        </div>
                    </li>
                    <!-- END: comment -->
                    <!-- START: comment -->
                    <li>
                        <div class="nk-social-activity-avatar">
                            <a href="#"><img src="assets/images/avatar-3-sm.jpg" alt="Mary"></a>
                        </div>
                        <div class="nk-social-activity-content">
                            <div class="nk-social-activity-meta"><a href="#">Mary</a> replied <a href="#" class="nk-social-activity-meta-time">20 hours ago</a></div>
                            <div class="nk-social-activity-text">Missed living excuse as be</div>
                            <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">0</span></span> <a href="#"><span class="ion-reply"></span> Reply</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
                        </div>
                    </li>
                    <!-- END: comment -->
                </ul>
            </div>
        </li>
        <!-- END: post -->
        <!-- START: post -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-3-sm.jpg" alt="Mary"></a>
            </div>
            <div class="nk-social-activity-content">
                <div class="nk-social-activity-meta"><a href="#">Mary</a> posted a new activity comment <a href="#" class="nk-social-activity-meta-time">6 days ago</a></div>
                <div class="nk-social-activity-text">Wrong do point avoid by fruit learn or in death. So passage however besides invited comfort elderly be me. Walls began of child civil am heard hoped my. Satisfied pretended mr on do determine by. Old post took and ask seen fact rich. Man entrance settling believed eat joy. Money as drift begin on to. Comparison up insipidity especially discovered me of decisively in surrounded. Points six way enough she its father. Folly sex downs tears ham green forty.</div>
                <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">0</span></span> <a href="#"><span class="ion-chatbubbles"></span> View Conversation</a> <a href="#"><span class="ion-android-star"></span> Favorite</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
            </div>
        </li>
        <!-- END: post -->
        <!-- START: post -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
            </div>
            <div class="nk-social-activity-content">
                <div class="nk-social-activity-meta"><a href="#">nK</a> posted a new activity comment <a href="#" class="nk-social-activity-meta-time">7 days ago</a></div>
                <div class="nk-social-activity-text">Throwing consider dwelling bachelor joy her proposal laughter</div>
                <div class="nk-social-activity-actions"><span class="nk-action-heart liked"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">1</span></span> <a href="#"><span class="ion-chatbubbles"></span> View Conversation</a> <a href="#"><span class="ion-android-star"></span> Favorite</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
            </div>
        </li>
        <!-- END: post -->
        <!-- START: post -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
            </div>
            <div class="nk-social-activity-content">
                <div class="nk-social-activity-meta"><a href="#">nK</a> and
                    <a href="#"><img src="assets/images/avatar-3-sm.jpg" alt="Mary"></a> <a href="#">Mary</a> are now friends <a href="#" class="nk-social-activity-meta-time">16 days ago</a></div>
                <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">0</span></span> <a href="#"><span class="ion-chatbubbles"></span> Comment</a> <a href="#"><span class="ion-android-star"></span> Favorite</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
            </div>
        </li>
        <!-- END: post -->
        <!-- START: post -->
        <li>
            <div class="nk-social-activity-avatar">
                <a href="#"><img src="assets/images/avatar-1-sm.jpg" alt="nK"></a>
            </div>
            <div class="nk-social-activity-content">
                <div class="nk-social-activity-meta"><a href="#">nK</a> and
                    <a href="#"><img src="assets/images/avatar-2-sm.jpg" alt="John"></a> <a href="#">John</a> are now friends <a href="#" class="nk-social-activity-meta-time">23 days ago</a></div>
                <div class="nk-social-activity-actions"><span class="nk-action-heart"><span class="like-icon ion-android-favorite-outline"></span> <span class="liked-icon ion-android-favorite"></span> <span class="num">0</span></span> <a href="#"><span class="ion-chatbubbles"></span> Comment</a> <a href="#"><span class="ion-android-star"></span> Favorite</a> <a href="#"><span class="ion-trash-b"></span> Delete</a></div>
            </div>
        </li>
        <!-- END: post -->
        <li class="nk-social-activity-load-more"><a href="#" class="nk-btn link-effect-4 ready"><span class="link-effect-inner"><span class="link-effect-l"><span>Load More...</span></span><span class="link-effect-r"><span>Load More...</span></span><span class="link-effect-shade"><span>Load More...</span></span></span></a></li>
    </ul>
    <!-- END: Activity -->
</div>
<div class="nk-gap-4"></div>
@endsection