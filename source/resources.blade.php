@extends('_layouts.master')

@section('body')

<section class="section intro section--full">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <h1 class="h1">Books, articles, videos, friends, men's groups, quotes...</h1>
                <button type="button" class="scroll_down" id="scroll_down"></button>
            </div>
        </div>
    </div>
    <div class="section__overlay" style="opacity: 0;">
    </div>
</section>


<section class="section content section--full intro">
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

<section class="section section--full intro">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Articles</div>
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
</section>

@endsection