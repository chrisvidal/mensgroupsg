@extends('_layouts.master')

@section('body')
    <section class="section contact">
        <div class="section__content">
            <div class="g">
                <div class="g-item">
                    <h2 class="h2 tr-basic tr-basic--enter">Contact</h2>
                    <div class="push-top--large tr-basic tr-basic--enter"><p>Have a question? Contact us at:</p></div>
                    <div class="description push-top tr-basic tr-basic--enter"><a href="mailto:gentleman@incarnatedman.com">gentleman@incarnatedman.com</a></div>
                </div>
                <div class="g-item g-item--col-2">
                    <div class="tr-basic tr-basic--enter">
                        <h2 class="h2 tr-basic tr-basic--enter">Social Networks</h2>
                    </div>
                    <div class="push-top--large tr-basic tr-basic--enter">
                        <p>You can also check us out on:</p>
                    </div>
                    <ul class="ul description push-top tr-basic tr-basic--enter">
                        <li>
                            <a href="https://facebook.com/mensgroupsingapore" class="a a--subtle">Facebook</a>
                        </li> <li>
                            <a href="https://www.meetup.com/The-Singapore-Mens-Group" class="a a--subtle">Meetup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section__overlay" style="opacity: 0;"></div>
    </section>
@endsection