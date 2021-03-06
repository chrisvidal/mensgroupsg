@extends('_layouts.master')


@section('side_navigation')
<ul>
    <li class="site-navigation__item"><a href="#documentary" class="a site-navigation__link scroll"># documentary</a></li>
    <li class="site-navigation__item"><a href="#movies" class="a site-navigation__link scroll"># Movies</a></li>
    <li class="site-navigation__item"><a href="#articles" class="a site-navigation__link scroll"># Articles</a></li>
    <li class="site-navigation__item"><a href="#books" class="a site-navigation__link scroll"># books</a></li>
</ul>
@endsection


@section('body')

<section class="section intro section--full">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <h1 class="h1">Documentary, curated articles / podcasts, and books about men's work.</h1>
                <button type="button" class="scroll_down" id="scroll_down"></button>
            </div>
        </div>
    </div>
    <div class="section__overlay" style="opacity: 0;">
    </div>
</section>

<section class="section header" id="documentary">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="g-item push-top--x-large">
                    <div class="h2 push-top--large">
                        Men Need Men <small>- a 30min. documentary about Men's Group (2019)</small>
                    </div>
                    <div class="content__column  push-top--large">
                        <iframe style="max-width: 100%;height: auto;" width="650" height="365" src="https://www.youtube.com/embed/OSMh6YonZbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section content section--full intro" id="movies">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Movies</div>
            </div>
            <div class="g-item g-item--lg push-top--x-large">
                <div class="g-sub">
                    <div class="g-sub-item">
                        <p>About being a man</p>
                        <ul class="ul description push-top">
                            <li># <a href="https://www.youtube.com/watch?v=Cetg4gu0oQQ" target="_blank" rel="noopener noreferrer">Why I'm done trying to be "man enough", 2018</a></li>
                        </ul>
                        <p>About the human conditions</p>
                        <ul class="ul description push-top">
                            <li># <a href="https://www.youtube.com/watch?v=H1GG6o-hPEA" target="_blank" rel="noopener noreferrer">Spring Summer Fall Winter and Spring, 2003</a></li>
                        </ul>
                    </div>
                    <div class="g-sub-item">
                        <p>&nbsp;</p>
                        <ul class="ul description push-top">
                            <li># <a href="https://www.youtube.com/watch?v=Bw9zSMsKcwk" target="_blank" rel="noopener noreferrer">Samadhi Movie, 2017 - Part 1 - "Maya, the Illusion of the Self"</a></li>
                            <li># <a href="https://www.youtube.com/watch?v=AQL6qcGqQ0Y" target="_blank" rel="noopener noreferrer">Samadhi Movie, 2018 - Part 2 - "It's Not What You Think"</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section intro intro--full" id="articles">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Curated articles / podcasts about men's work</div>
                <p class="push-top--large">Really worth your time:</p>
                <ul class="ul push-top ">
                    <li>&copy; <a target="_blank" class="a a--in-text" href="https://medium.com/personal-growth-lab/why-you-shouldnt-go-on-your-self-improvement-journey-alone-257361ac5237">Why you shouldn't go on your self improvement journey alone</a></li>
                    <li>&#128266; <a target="_blank" class="a a--in-text" href="https://podcasts.apple.com/us/podcast/healthy-anger/id1448656559?i=1000443461117">Why Men need support groups and the power of healthy anger</a> <span>by my good friends Dr. Mike Lane and Jason Lange</span></li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section content section--full intro" id="books">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Books</div>
            </div>
            <div class="g-item g-item--lg push-top--x-large">
                <div class="g-sub">
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img alt="The Way of the Superior Man: A Spiritual Guide to Mastering the Challenges of Women, Work, and Sexual Desire (20th Anniversary Edition) by [Deida, David]" src="https://images-na.ssl-images-amazon.com/images/I/61iwy8p4gjL.jpg">
                            <div>
                                <div class="h6"><a target="_blank" href="https://www.amazon.com/Way-Superior-Man-Challenges-Anniversary-ebook/dp/B01NA993PI/" class="a a--subtle">The Way of The Superior Man</a></div>
                                <div class="description">by David Deida</div>
                            </div>
                        </div>
                    </div>
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img alt="King, Warrior, Magician, Lover: Rediscovering the Archetypes of the Mature Masculine by [Moore, Robert, Gillette, Doug]" src="https://images-na.ssl-images-amazon.com/images/I/51KHqxsNoSL.jpg">
                            <div>
                                <div class="h5"><a target="_blank" href="https://www.amazon.com/King-Warrior-Magician-Lover-Rediscovering-ebook/dp/B00EXOFDXI/" class="a a--subtle">King, Warrior, Magician, Lover</a></div>
                                <div class="description">by Robert Moore</div>
                            </div>
                        </div>
                    </div>
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img src="https://m.media-amazon.com/images/I/717ZV1rhACL._AC_UL436_.jpg" class="s-image" alt="To Be a Man: A Guide to True Masculine Power">
                            <div>
                                <div class="h5"><a target="_blank" href="https://www.amazon.com/Be-Man-Guide-Masculine-Power-ebook/dp/B00R54N966/" class="a a--subtle">To Be a Man: A Guide to True Masculine Power</a></div>
                                <div class="description">by Robert A. Masters</div>
                            </div>
                        </div>
                    </div>
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img alt="Shambhala: The Sacred Path of the Warrior (Shambhala Classics) by [Trungpa, Chogyam]" src="https://images-na.ssl-images-amazon.com/images/I/41D49i3-%2BBL.jpg">
                            <div>
                                <div class="h5"><a target="_blank" href="https://www.amazon.com/Shambhala-Sacred-Path-Warrior-Classics-ebook/dp/B00HEN3JHW/" class="a a--subtle">Shambhala: The Sacred Path of the Warrior</a></div>
                                <div class="description">by Chögyam Trungpa</div>
                            </div>
                        </div>
                    </div>
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img alt="" src="https://images-na.ssl-images-amazon.com/images/I/51UbpQTfKgL._SX324_BO1,204,203,200_.jpg"/>
                            <div>
                                <div class="h5"><a target="_blank" href="https://www.amazon.com/Trauma-Everyday-Life-Mark-Epstein/dp/0143125745" class="a a--subtle">The Trauma of Everyday Life</a></div>
                                <div class="description">by Mark Epstein M.D.</div>
                            </div>
                        </div>
                    </div>
                    <div class="g-sub-item">
                        <div class="media-book">
                            <img alt="Siddhartha (World Classics, Unabridged) by [Hermann Hesse]" src="https://images-na.ssl-images-amazon.com/images/I/51COJ6UfEBL.jpg">
                            <div>
                                <div class="h5"><a target="_blank" href="https://www.amazon.com/Siddhartha-World-Classics-Unabridged-Hermann-ebook/dp/B07D39C97N" class="a a--subtle">Siddhartha</a></div>
                                <div class="description">by Hermann Hesse</div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="g-sub-item">
                        <div class="h2"><a target="_blank" href="https://www.amazon.com/Siddhartha-World-Classics-Unabridged-Hermann-ebook/dp/B07D39C97N" class="a a--subtle">Siddhartha</a></div>
                        <div class="description--large">by Hermann Hesse</div>
                        <div class="image-content__copy push-top--large">
                            <p><img alt="Siddhartha (World Classics, Unabridged) by [Hermann Hesse]" src="https://images-na.ssl-images-amazon.com/images/I/51COJ6UfEBL.jpg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta minima voluptatum fugit necessitatibus, recusandae aut blanditiis qui ipsam fuga amet quidem asperiores aspernatur iure, accusantium unde in reprehenderit. Excepturi.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="g-item push-top--large">
                <div class="content__column  ">
                </div>
            </div>
            <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column  ">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="spacer">
    <div class="spacer__unit"></div>
    <div class="spacer__unit"></div>
    <div class="spacer__unit"></div>
</div>

{{-- <section class="section section--full intro" id="articles">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Articles</div>
                <h1>Coming soon...</h1>
            </div>
            <div class="g-item push-top--large">
                <div class="content__column  ">
                    <div class="h2">Article 1</div>
                    <div class="description--large"><a href="#" class="a a--subtle">Article 1 url</a></div>
                    <div class="image-content__copy push-top--large">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta minima voluptatum fugit necessitatibus, recusandae aut blanditiis qui ipsam fuga amet quidem asperiores aspernatur iure, accusantium unde in reprehenderit. Excepturi.</p>
                    </div>
                    <div class="h2 push-top--large">Article 3</div>
                    <div class="description--large"><a href="#" class="a a--subtle">Article 3 url</a></div>
                    <div class="image-content__copy push-top--large">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta minima voluptatum fugit necessitatibus, recusandae aut blanditiis qui ipsam fuga amet quidem asperiores aspernatur iure, accusantium unde in reprehenderit. Excepturi.</p>
                    </div>
                </div>
            </div>
            <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column  ">
                    <div class="h2">Article 2</div>
                    <div class="description--large"><a href="#" class="a a--subtle">Article 2 url</a></div>
                    <div class="image-content__copy push-top--large">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta minima voluptatum fugit necessitatibus, recusandae aut blanditiis qui ipsam fuga amet quidem asperiores aspernatur iure, accusantium unde in reprehenderit. Excepturi.</p>
                    </div>
                    <div class="h2 push-top--large">Article 4</div>
                    <div class="description--large"><a href="#" class="a a--subtle">Article 4 url</a></div>
                    <div class="image-content__copy push-top--large">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A soluta minima voluptatum fugit necessitatibus, recusandae aut blanditiis qui ipsam fuga amet quidem asperiores aspernatur iure, accusantium unde in reprehenderit. Excepturi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
