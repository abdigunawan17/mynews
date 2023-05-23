
            <div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel" aria-labelledby="archiveRecent">
            
            <div class="archiveTab-sibearNews">
            
                @foreach ($newnewspost as $key => $nitem)
                    <div class="archive-tabWrpp archiveTab-border">
                    <div class="archiveTab-image ">
                    <a href="{{ url('news/details/'.$nitem->id.'/'.$nitem->news_title_slug) }}"><img class="lazyload" src="{{ asset($nitem->image) }}"  ></a> </div>
                    <a href="" class="archiveTab-icon2"><i class="la la-play"></i></a>
                    <h4 class="archiveTab_hadding"><a href="{{ url('news/details/'.$nitem->id.'/'.$nitem->news_title_slug) }}">{{ $nitem->news_title }} </a>
                    </h4>
                    <div class="archive-conut">
                    {{ $key+1 }}
                    </div>
                    
                    </div>
                @endforeach
               

            </div>

            </div>


            <div class="tab-pane fade" id="archiveTab_popular" role="tabpanel" aria-labelledby="archivePopulars">
            <div class="archiveTab-sibearNews">
            
                @foreach ($newspopular as $key => $nitem)
                <div class="archive-tabWrpp archiveTab-border">
                    <div class="archiveTab-image ">
                    <a href="{{ url('news/details/'.$nitem->id.'/'.$nitem->news_title_slug) }}"><img class="lazyload" src="{{ asset($nitem->image) }}"  ></a> </div>
                    <a href="" class="archiveTab-icon2"><i class="la la-play"></i></a>
                    <h4 class="archiveTab_hadding"><a href="{{ url('news/details/'.$nitem->id.'/'.$nitem->news_title_slug) }}">{{ $nitem->news_title }} </a>
                    </h4>
                    <div class="archive-conut">
                    {{ $key+1 }}
                    </div>
                    
                    </div>
            @endforeach
            

            

            </div>

            </div>

            </div>