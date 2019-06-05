@extends('_layouts.master')

@section('side_navigation')
<ul>
    <li class="site-navigation__item"><a href="#meetings" class="a site-navigation__link scroll"># meetings</a></li>
    <li class="site-navigation__item"><a href="#happens" class="a site-navigation__link scroll"># what happens?</a></li>
</ul>
@endsection

@section('body')
<section class="section intro section--full ">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                {{-- <div class="title">Meetings</div> --}}
                <h1 class="h1">The group is open to any man of any age willing to participate.</h1>
                <button type="button" class="scroll_down" id="scroll_down"></button>
            </div>
        </div>
    </div>
</section>

<section class="section header" id="meetings">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Meetings</div>
            </div>
            <div class="g-item g-item--lg push-top--large">
                <div class="content__column ">
                    <div class="h2">Weekly Meetings</div>
                    <div class="push-top--large">
                        <p>We meet every Tuesday's evening. The session commences at 730pm.</p>
                        <p>The meetings are held in Holland Village or China Town.</p>
                        <p>You can register to our <a class="a a--in-text" href="https://www.meetup.com/The-Mens-Group-Singapore/" target="_blank">meetup's group</a> to get the full schedule.</p>
                        {{-- <p class="push-top">Whilst most of the time we are sitting, the present moment is sometimes calling for movement. Hence, it is always a good idea to be wearing comfy clothes.</p> --}}
                        <p class="push-top--large">You are invited to bring along:</p>
                    </div>
                    <ul class="ul push-top description">
                        <li>Comfy clothes</li><li>Notebook</li><li>Pen</li><li>Water Bottle</li></ul>
                </div>
            </div>
            {{-- <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column ">
                    <div class="h2">Monthly Meetings (Coming soon...)</div>
                    <div class="push-top--large">
                        <p>A monthly more casual meeting is held in a coffee shop around a specific masculine topic.</p>
                        <p>It can be relationships, feminine/masculine polarity, masculine qualities, masculine practice...</p>
                        <p class="push-top"></p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<section class="section intro intro--full" id="happens">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">So, what happens at a meeting?</div>
                <h1 class="h1">The group is open to any man willing to participate.</h1>
                <p class="push-top--large">Typical timeline to expect for the meeting:</p>
                <ul class="ul description push-top ">
                    <li># agreeing to the 4 agreements</li>
                    <li># few minutes of settling in with breathe work or meditation to 'leave the world behind'</li>
                    <li># 5 min life check-in per man</li>
                    <li># 15 min open floor per willing man (for any considerations, any sharing, any subject to explore) </li>
                    <li># depending on the previous point and what feels right in the moment, some practices can be engaged </li>
                    <li># and a final round of check-in with everyone</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection