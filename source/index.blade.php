@extends('_layouts.master')


@section('side_navigation')
<ul>
    <li class="site-navigation__item"><a href="#why" class="a site-navigation__link scroll"># why joining?</a></li>
    <li class="site-navigation__item"><a href="#philosophy" class="a site-navigation__link scroll"># philosophy</a></li>
    <li class="site-navigation__item"><a href="#what" class="a site-navigation__link scroll"># what is it?</a></li>
    <li class="site-navigation__item"><a href="#testimonials" class="a site-navigation__link scroll"># testimonials</a></li>
</ul>
@endsection


@section('body')
<section class="section intro section--full _text-on-black">
    {{-- <div class="intro__image"></div> --}}
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <h1 class="h1">We are a group of men meeting on a regular basis with the explicit intention to support and challenge each other.</h1>
                <button type="button" class="scroll_down" id="scroll_down"></button>
            </div>
        </div>
    </div>
    <div class="section__overlay" style="opacity: 0;">
    </div>
</section>

<section class="section intro section--full _text-on-black">
    {{-- <div class="intro__image"></div> --}}
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <h1 class="h1">How inspired, encouraged, challenged and supported are you by your peer group?</h1>
            </div>
        </div>
    </div>
    <div class="section__overlay" style="opacity: 0;">
    </div>
</section>

<section class="section intro intro--full" id="why">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">So, why joining a men's group?</div>
                {{-- <h1 class="h1">The group is open to any man willing to participate.</h1> --}}
                <p class="push-top--large">A men's group is for you if you are looking for:</p>
                <ul class="ul description push-top ">
                    <li># authenticity and connection</li>
                    <li># a safe place where you can be real</li>
                    <li># helping each other to be the best men we can be</li>
                    <li># being inspired by other men</li>
                    <li># strengthening your intimate relationships</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- <section class="section intro intro--full" id="philosophy">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Philosophy</div>
                <h1 class="h2">The group is open to any man willing to participate.</h1>
            </div>
        </div>
    </div>
</section> --}}


<section class="section content intro intro--full" id="philosophy">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Philosophy</div>
                <div class="h2 ">What we're about</div>
            </div>
            <div class="g-item push-top--large">
                <div class="content__column ">
                    <p>In a world of #toxicmasculinity and #metoo, men are confused.</p>
                    <p>When they do not have deep relationships with other men who can reflect back to them and challenge them, they bring back their emotional burden onto their life partner, family and work environment.</p>
                    {{-- <p>We don't gather to watch a game but to have meaninfull discussions.</p> --}}
                    <p class="push-top">A men's group is not counseling. It is not therapy. It is not religious.</p>
                    <p class="push-top">In this same gender meetings, magic happens between men because of a certain validation and acceptance that occurs organically.</p>
                </div>
            </div>
            <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column ">
                    <p>Being seen and heard by another men create an authentic connection between them. Shared stories, successes and struggles speak to these men who have wrestled themselves with the same demons and angels.</p>
                    <p class="push-top">It is a place of growth and integrity, not a place to promote your business.</p>
                    <p class="push-top">Developing relationships with other men doesn’t just happen - it takes intention and commitment.</p>
                    <p class="push-top">Are you up to the challenge?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section " id="what">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">What is a men's group</div>
                <div class="h2 push-top--large">
                    Tal Ben-Shahar, Ph.D., writes in Happier:
                </div>
                <div class="g-item push-top--large">
                    <div class="content__column ">
                        <p>“Having people about whom we care and who care about us to share our lives with – to share the events and thoughts and feeling in our lives – intensifies our experience of meaning, consoles us in our pain, deepens our sense of delight in the world.”
                        </p>
                    </div>
                    {{-- <p class="push-top--large">This is what a men’s group is.</p> --}}
                </div>
            </div>
            <div class="g-item g-item--lg push-top--x-large">
                <div class="h2 ">
                    Some defining keywords
                </div>
            </div>
            <div class="g-item g-item--lg">
                <div class="list">
                    <div class="description list__item push-top--x-large">Acceptance</div>
                    <div class="description list__item push-top--x-large">Self-awareness</div>
                    <div class="description list__item push-top--x-large">Support</div>
                    <div class="description list__item push-top--x-large">Authenticity</div>
                    <div class="description list__item push-top--x-large">Connection</div>
                    <div class="description list__item push-top--x-large">Active listening</div>
                    <div class="description list__item push-top--x-large">Refining masculinity</div>
                    <div class="description list__item push-top--x-large">Openness</div>
                    <div class="description list__item push-top--x-large">Self-growth</div>
                    <div class="description list__item push-top--x-large">In tune with body</div>
                    <div class="description list__item push-top--x-large">In touch with feelings</div>
                    <div class="description list__item push-top--x-large">Better relationships</div>
                    <div class="description list__item push-top--x-large">Integrity</div>
                    <div class="description list__item push-top--x-large">Accountability</div>
                    <div class="description list__item push-top--x-large">Vulnerability<br>as a strength</div>
                    <div class="description list__item push-top--x-large">Meeting your edge</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--full intro" id="testimonials">
    <div class="section__content">
        <div class="g">
            <div class="g-item">
                <div class="title ">
                    Testimonials
                </div>
            </div>
            {{-- <div class="g-item g-item--lg push-top--large">
                <div class="h2 ">
                    <i>"The only way people change is through experiences"</i> - <small>William Blake</small>
                </div>
            </div> --}}
            <div class="g-item push-top--large">
                <div class="h2 tr-basic tr-basic--enter">
                    Yong Kang
                </div>
                <div class="push-top--large tr-basic tr-basic--enter">
                    <p class="testimonial"><i>"There is this Japanese saying, Ichigo Ichie, which means “Treasure every meeting, for it will never occur again.” This saying reminds me of The Men’s Group Singapore."</i></p><a href="articles/treasure-every-meeting" class="a a--in-text read-more">Read more</a>
                </div>
            </div>
            <div class="g-item g-item--col-2 push-top--large">
                <div class="h2 tr-basic tr-basic--enter">
                    Manuel
                </div>
                <div class="push-top--large tr-basic tr-basic--enter">
                    <p class="testimonial"><i>"I advise every man to try it at least once and find the same place of growth and sense of community I found on Mens Group SG."</i></p><a href="articles/growth-and-community" class="a a--in-text read-more">Read more</a>
                </div>
            </div>

            {{-- <div class="g-item g-item--lg">
                <div class="list">
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Yong Kang</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Ian</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Jeffrey</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">JT</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">KK</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Naixiang</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Ratan</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Rene</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">William</div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

{{-- <section class="section contact-form" thresold="0.5,0.9">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <form>
                    <div class="contact-form__fields">
                        <div class="contact-form__row ">
                            <div class="contact-form__label">
                                <div class="title">Email</div>
                            </div>
                            <input placeholder="Your email address">
                        </div>
                        <div class="contact-form__row push-top ">
                            <div class="contact-form__label">
                                <div class="title">Subject</div>
                            </div>
                            <input placeholder="I was just on your website and...">
                        </div>
                        <div class="contact-form__row push-top--x-large ">
                            <textarea placeholder="I have an idea for a project and I’d like to speak to you about it." class="h1">
                            </textarea>
                        </div>
                    </div>
                    <div class="push-top--x-large ">
                        <button type="submit" class="contact-form__button">send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}

<div class="spacer"><div class="spacer__unit"></div><div class="spacer__unit"></div></div>

@endsection
