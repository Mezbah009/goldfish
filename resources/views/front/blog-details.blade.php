@extends('front.layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>



    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $blog->title }}
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <a href="javascript:void(0);">{{ $blog->author->name ?? 'Unknown Author' }}</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <a href="javascript:void(0);">
                                            <time
                                                datetime="{{ $blog->published_at }}">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</time>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-chat-dots"></i>
                                        <a href="javascript:void(0);">0 Comments</a> {{-- Replace with dynamic comment count if available --}}
                                    </li>
                                </ul>
                            </div>
                            <!-- End meta top -->

                            <div class="content">
                                <div>{!! $blog->content !!}</div>

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    @foreach ($blog->categories as $category)
                                        <li>
                                            <a
                                                href="{{ route('front.blog.category', $category->id) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    @foreach ($blog->tags as $tag)
                                        <li>
                                            <a href="{{ route('front.blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

                <!-- Blog Author Section -->
                <section id="blog-author" class="blog-author section">
                    <div class="container">
                        <div class="author-container d-flex align-items-center">
                            <img src="{{ asset('uploads/authors/' . $blog->author->profile_image) }}"
                                class="rounded-circle flex-shrink-0" alt="{{ $blog->author->name }}">

                            <div>
                                <h4>{{ $blog->author->name }}</h4>

                                <div class="social-links">
                                    {{-- Optional: Add dynamic social links if available --}}
                                    @if (!empty($blog->author->twitter))
                                        <a href="{{ $blog->author->twitter }}"><i class="bi bi-twitter-x"></i></a>
                                    @endif
                                    @if (!empty($blog->author->facebook))
                                        <a href="{{ $blog->author->facebook }}"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if (!empty($blog->author->instagram))
                                        <a href="{{ $blog->author->instagram }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                </div>

                                <p>{!! $blog->author->bio !!}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Blog Author Section -->

                <!-- Blog Comments Section -->
                <section id="blog-comments" class="blog-comments section">

                    <div class="container">

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                        sapiente quis molestiae est qui cum soluta.
                                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur
                                            ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut
                                            est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt
                                            qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro
                                            aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur
                                            distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio
                                            laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error
                                            dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-2" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt="">
                                        </div>
                                        <div>
                                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan,2022</time>
                                            <p>
                                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores
                                                cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est
                                                commodi est officiis voluptas repellat quisquam possimus. Perferendis id
                                                consectetur necessitatibus.
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #2-->

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->

                        <div id="comment-3" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil
                                        ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut
                                        quam ut. Voluptatem est accusamus iste at.
                                        Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est
                                        consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio
                                        veniam. Quam officia sit nostrum dolorem.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #3 -->

                        <div id="comment-4" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore.
                                        Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #4 -->

                    </div>

                </section><!-- /Blog Comments Section -->

                <!-- Comment Form Section -->
                <section id="comment-form" class="comment-form section">
                    <div class="container">

                        <form action="{{ route('blog.comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <input type="hidden" name="parent_id" id="parent_id" value="">

                            <h4>Post Comment</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control"
                                        placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </form>


                    </div>
                </section><!-- /Comment Form Section -->

            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Search</h3>
                        <form action="">
                            <input type="text">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('front.blog.category', $cat->id) }}">
                                        {{ $cat->name }} <span>({{ $cat->blogs_count }})</span>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Recent Posts</h3>

                        @foreach ($recentPosts as $recent)
                            <div class="post-item d-flex align-items-center">
                                <img src="{{ asset('uploads/blogs/' . $recent->feature_image) }}"
                                    alt="{{ $recent->title }}" class="flex-shrink-0" width="80">
                                <div class="ms-3">
                                    <h4><a
                                            href="{{ route('front.blog.details', $recent->slug) }}">{{ Str::limit($recent->title, 50) }}</a>
                                    </h4>
                                    <time
                                        datetime="{{ $recent->created_at }}">{{ $recent->created_at->format('M d, Y') }}</time>
                                </div>
                            </div>
                        @endforeach
                    </div><!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            @foreach ($tags as $tag)
                                <li>
                                    <a href="{{ route('front.blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div><!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script>
    function setReply(commentId) {
        document.getElementById('parent_id').value = commentId;
        window.scrollTo({
            top: document.getElementById('comment-form').offsetTop,
            behavior: 'smooth'
        });
    }
</script>
@endsection

