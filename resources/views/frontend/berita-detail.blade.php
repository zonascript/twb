@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">BERITA</h2>
            <div uk-grid>
                <div class="uk-width-3-5">
                    <article class="uk-article uk-padding-small white">
                        <h3 class="twb-blue-text uk-margin-small-bottom">Title Lorem Ipsum Dolore</h3>
                        <div class="uk-article-meta uk-margin-bottom">29 Maret 2018</div>
                        <div class="twb-news-img">
                            <img src="{!! asset('images/sample-content/news3.png') !!}" alt="Tini Wini Biti">
                        </div>
                        <div class="twb-article">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                        <div class="uk-flex uk-flex-middle">
                            <span class="uk-margin-small-right">Share :</span>
                            <a href="" class="uk-margin-small-right"><span uk-icon="icon: twitter"></span></a>
                            <a href="" class="uk-margin-small-right"><span uk-icon="icon: facebook"></span></a>
                            <a href=""><span uk-icon="icon: google-plus"></span></a>
                        </div>
                    </article>
                </div>
                <div class="uk-width-2-5">
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <h6 class="twb-blue-text uk-margin-small-bottom">Berita Lain</h6>
                    </div>

                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-1.png') !!}" alt="Tini Wini Biti">
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-2.png') !!}" alt="Tini Wini Biti">
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-3.png') !!}" alt="Tini Wini Biti">
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-4.png') !!}" alt="Tini Wini Biti">
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-5.png') !!}" alt="Tini Wini Biti">
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>

                    <div class="uk-panel uk-padding-small white">
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
