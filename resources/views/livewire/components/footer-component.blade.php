<footer class="footer">
    <div class="footer__left">
       <div class="footer__left__wrapper">
           <div class="font-title">Adresse</div>
           <div class="footer__left__address">
               <x-css-home/>
               {{ $settings->address }}
           </div>
           <div class="footer__left__phone">
               <x-css-phone/>
               {{ $settings->phone}}
           </div>
           <div class="footer__left__mail">
               <x-css-mail/>
               <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
           </div>
       </div>
    </div>
    <div class="footer__center">
        <div class="footer__center__wrapper">
            <div class="footer__center__about">
                <h2 class="font-title"> {{ $settings->about_title }}</h2>
                <p>{{ $settings->description }}</p>
            </div>
            <div class="footer__center__icons">
                @if($settings->social_media)
                    @foreach($settings->social_media as $social_media)
                        @if($social_media['social_icon'] === 'facebook')
                            @if($social_media['custom_social_icon'])
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-curator-glider :media="$social_media['custom_social_icon']"/>
                                </a>
                            @else
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-pictos.facebook/>
                                </a>
                            @endif
                        @elseif($social_media['social_icon'] == 'github')
                            @if($social_media['custom_social_icon'])
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-curator-glider :media="$social_media['custom_social_icon']"/>
                                </a>
                            @else
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-pictos.github/>
                                </a>
                            @endif
                        @elseif($social_media['social_icon'] == 'linkedin')
                            @if($social_media['custom_social_icon'])
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-curator-glider :media="$social_media['custom_social_icon']"/>
                                </a>
                            @else
                                <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                    <x-pictos.linkedin/>
                                </a>
                            @endif
                        @else
                            <a href="{{ $social_media['social_url'] }}" class="footer__center__icons__link">
                                <x-curator-glider :media="$social_media['custom_social_icon']"/>
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="footer__right">
        <div class="footer__right__image">
{{--            <x-curator-glider :media="$settings->img "/>--}}
        </div>
        <p class="footer__right__credits">{{ config('app.name') . ' ' .date('Y')}}</p>
    </div>
</footer>
