@extends('_layouts.master')

@section('body')

<section class="section intro section--full _text-on-black">
    {{-- <div class="intro__image"></div> --}}
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <h1 class="h1">We are a group of men meeting on a regular basis with the explicit intention to support and challenge each other in a safe space.</h1>
            </div>
        </div>
    </div>
    <div class="section__overlay" style="opacity: 0;">
    </div>
</section>

<section class="section intro intro--full">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Philosophy</div>
                <h1 class="h1">In understanding the agency’s philosophy, the clue’s in the name: Few and Far is a creative studio that prides itself on producing amazing work for a select number of clients.</h1>
            </div> <!---->
        </div>
    </div> <!---->
</section>


<section class="section content">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="h2 tr-basic tr-basic--enter">Our approach</div>
            </div>
            <div class="g-item push-top--large">
                <div class="content__column tr-basic tr-basic--enter">
                    <p>It’s quite common these days that agencies provide a ‘full service solution’, have hundreds of staff, and many layers to their organisation.<br>We do not.</p>
                    <p>We pride ourselves on being specialists in design and engineering and approach projects collaboratively with our clients, concentrating all of our efforts and working on and communicating clearly with the people who pay us to do great work.</p>
                </div>
            </div>
            <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column tr-basic tr-basic--enter">
                    <p>Where as you may meet many sales people, heads of departments, marketing managers and CEO’s as part of your pitch process; the likelihood is that these may not be the people you actually deal with day-to-day on your project.</p>
                    <p>The people you get to meet at Few and Far are the actual team you would deal with and work with until completion of your project - so if you like the people you meet, it could be a perfect match.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section header">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">What is a men's group</div>
                <div class="h2 push-top--large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    <br>
                    <br>
                    Men Need Men - a documentary about Men's Group (2019)
                https://www.youtube.com/watch?v=OSMh6YonZbw
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--full intro">
    <div class="section__content">
        <div class="g">
            <div class="g-item">
                <div class="title tr-basic tr-basic--enter">
                    Testimonials
                </div>
            </div>
            <div class="g-item g-item--lg push-top--large">
                <div class="h2 tr-basic tr-basic--enter">
                    <i>"The only way people change is through experiences"</i> - <small>William Blake</small>
                </div>
            </div>
            <div class="g-item g-item--lg">
                <div class="list">
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Blue Cross</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">CBI</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">First Direct</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Bank Of England</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Channel 4</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">BFI</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Disney</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">The Coaching Manual</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">The National Lottery</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Water Aid</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">Volvo</div>
                    <div class="description tr-basic list__item push-top--x-large tr-basic--enter">NSPCC</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact-form" thresold="0.5,0.9">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <form>
                    <div class="contact-form__fields">
                        <div class="contact-form__row tr-basic tr-basic--enter">
                            <div class="contact-form__label">
                                <div class="title">Email</div>
                            </div>
                            <input placeholder="Your email address">
                        </div>
                        <div class="contact-form__row push-top tr-basic tr-basic--enter">
                            <div class="contact-form__label">
                                <div class="title">Subject</div>
                            </div>
                            <input placeholder="I was just on your website and...">
                        </div>
                        <div class="contact-form__row push-top--x-large tr-basic tr-basic--enter">
                            <textarea placeholder="I have an idea for a project and I’d like to speak to you about it." class="h1">
                            </textarea>
                        </div>
                    </div>
                    <div class="push-top--x-large tr-basic tr-basic--enter">
                        <button type="submit" class="contact-form__button">send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="spacer"><div class="spacer__unit"></div><div class="spacer__unit"></div></div>

@endsection
