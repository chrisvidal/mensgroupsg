@extends('_layouts.master')

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

<section class="section header">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">Meetings</div>
            </div>
            <div class="g-item push-top--large">
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
            <div class="g-item g-item--col-2 push-top--large">
                <div class="content__column ">
                    <div class="h2">Monthly Meetings</div>
                    <div class="push-top--large">
                        <p>A monthly more casual meeting is held in a coffee shop around a specific masculine topic.</p>
                        <p>It can be relationships, feminine masculine polarity, masculine qualities, ...</p>
                        <p class="push-top"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section intro intro--full ">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                <div class="title">So, what happens at a meeting?</div>
                <h1 class="h1">The group is open to any man willing to participate.</h1>
                <p class="push-top--large">Typical timeline to expect for the evening:</p>
                <ul class="ul description push-top ">
                    <li># agreeing to the 4 agreements</li>
                    <li># few minutes of silence to 'leave the world behind'</li>
                    <li># introducing new members if relevant</li>
                    <li># embodied practices, martial art practices, breathe work, meditation</li>
                    <li># 5min life check-in</li>
                    <li># eye contact practices, sharing practices, meditation, discussion on a specific subject, open floor,…and anything that feels </li>important at the moment
                    <li># and a final round of check-in with everyone</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection