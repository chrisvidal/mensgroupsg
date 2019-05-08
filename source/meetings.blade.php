@extends('_layouts.master')

@section('body')
<section class="section intro section--full ">
    <div class="section__content">
        <div class="g">
            <div class="g-item g-item--lg">
                {{-- <div class="title">Meetings</div> --}}
                <h1 class="h1">The group is open to any man willing to participate.</h1>
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
                        <p>A monthly more casual meeting is held in a coffee shop.</p>
                        <p>Usu</p>
                        <p class="push-top"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection