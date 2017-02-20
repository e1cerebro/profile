
 <!-- Header -->
            <div id="header_container">
                <div id="header">
                    <div><a class="home"><i class="fa fa-home"></i></a>
                    </div>
                    <div><a href="#" class="previous-page arrow"><i class="fa fa-angle-left"></i></a>
                    </div>
                    <div><a href="#" class="next-page arrow"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- News scroll -->
                    <div class="news-scroll">
                        <span><i class="fa fa-feed" aria-hidden="true"></i>NEWS : </span>
                        <ul id="marquee" class="marquee">
                            @if(count($thenextwebnews["articles"]) > 0 || count($newscientistnews["articles"]) > 0 || count($techcrunchnews["articles"]) > 0 )
                                @foreach($thenextwebnews["articles"] as $article)
                                    <li>
                                        <a href="{{$article['url']}}" target="_blank">
                                            <small class="text-info"><strong>{{$article['title']}}</strong></small>
                                            -
                                            @if(strlen($article['author'])>0)
                                            <small class="text-muted"> <i class="fa fa-user-circle" aria-hidden="true"></i> {{$article['author']}} </small>
                                            @endif
                                            @if($article['publishedAt'])
                                            <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{time_ago($article['publishedAt'])}}</small>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                                    @foreach($newscientistnews["articles"] as $article)
                                        <li>
                                            <a href="{{$article['url']}}" target="_blank">
                                                <small class="text-info"><strong>{{$article['title']}}</strong></small>
                                                -
                                                @if(strlen($article['author'])>0)
                                                    <small class="text-muted"> <i class="fa fa-user-circle" aria-hidden="true"></i> {{$article['author']}} </small>
                                                @endif
                                                @if($article['publishedAt'])
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{time_ago($article['publishedAt'])}}</small>
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                    @foreach($techcrunchnews["articles"] as $article)
                                        <li>
                                            <a href="{{$article['url']}}" target="_blank">
                                                <small class="text-info"><strong>{{$article['title']}}</strong></small>
                                                -
                                                @if(strlen($article['author'])>0)
                                                    <small class="text-muted"> <i class="fa fa-user-circle" aria-hidden="true"></i> {{$article['author']}} </small>
                                                @endif
                                                @if($article['publishedAt'])
                                                    <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> {{time_ago($article['publishedAt'])}}</small>
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                            @else
                                <li>Sorry, service is currently offline</li>
                            @endif
                        </ul>
                    </div>
                    <!-- End News scroll -->
                </div>
            </div>
            <!-- End Header -->
