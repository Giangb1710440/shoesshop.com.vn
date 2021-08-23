@extends('layout.layout')
@section('title','Cừa Hàng')
@section('content')

<style>
        @font-face {
        font-family: 'LeagueGothic';
        src: url('fonts/League_Gothic-webfont.eot');
        src: url('fonts/League_Gothic-webfont.eot?#iefix') format('embedded-opentype'),
            url('fonts/League_Gothic-webfont.woff') format('woff'),
            url('fonts/League_Gothic-webfont.ttf') format('truetype'),
            url('fonts/League_Gothic-webfont.svg#LeagueGothicRegular') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'SourceSansProLight';
        src: url('fonts/SourceSansPro-Light-webfont.eot');
        src: url('fonts/SourceSansPro-Light-webfont.eot?#iefix') format('embedded-opentype'),
            url('fonts/SourceSansPro-Light-webfont.woff') format('woff'),
            url('fonts/SourceSansPro-Light-webfont.ttf') format('truetype'),
            url('fonts/SourceSansPro-Light-webfont.svg#SourceSansProLight') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    * {
        margin: 0;
        padding: 0;
    }
    img{
        border: none;
    }

    body{
        font-family: SourceSansProLight, Verdana, Arial, sans-serif;
        font-size: 14px;
    }

    #version{
        color: white;
        font-size: 10px;
        position: relative;
        top: 12px;
        left: 122px;
    }
    /* nav{
        position: absolute;
        top: 32.8%;
        left: 12.5%;
    }
    nav li a{
        color: white;
        text-decoration: none;
        font-family: Verdana, Arial, sans-serif;
        font-size: 13px;
        margin-right: 12px;
        padding: 5px;
    }
    nav li a:hover{
        background-color: #383838;
        border-radius: 3px;
    } */
    .current{
        background-color: #383838;
        border-radius: 3px;
    }
    #adbanner{
        margin-top: 50px;
        height: 124px;
        background-color: #dbdbdb;
        border-bottom: 1px solid #c3c3c3;
    }
    #ad{
        width: 728px;
        margin: auto;
    }
    #adbanner a{
        display: inline-block;
        border: 1px solid #c3c3c3;
        height: 90px;
        width: 728px;
        margin: 16px auto;
        color: #6b6b6b;
        text-decoration: none;
        font-family: Verdana, Arial, sans-serif;
        font-size: 14px;
        background-color: #d1d1d1;
    }
    #adbanner a:hover{
        border: 1px solid #a7a7a7;
        /*text-decoration: underline;*/
        color: #3f3f3f;
        background-color: #cacaca;
    }
    #adbanner a p{
        text-align: center;
        margin-top: 35px;
    }
    section{
        width: 1000px;
        margin: auto;
    }
    #secwrapper{
        /*background: url('images/bg.gif') fixed;
        background-color: #f47771;*/
        padding-top: 20px;
    }
    article{
        width: 280px;
        margin-right: 40px;
        display: inline-block;
        vertical-align: top;
        border: 1px solid #c8c8c8;
        margin-bottom: 20px;
        padding: 7px;
        border-radius: 3px;
        box-shadow: 0 2px 3px #ccc;
        background-color: white;
        *display:inline;
        zoom:1;
    }
    #sponsors, .rightcl{
        margin-right: 0px;
    }
    .readmore{
        background-color: black;
        padding: 5px 10px;
        color: white;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
    }
    .readmore:hover{
        background-color: #383838;
    }
    article p{
        margin-bottom: 7px;
    }
    #photobox img{
        margin: 5px 4px 6px 6.5px;
        border: 1px solid black;
    }
    #sponsors a{
        color: #6b6b6b;
        text-decoration: none;
        font-family: Verdana, Arial, sans-serif;
        font-size: 14px;
        background-color: #d1d1d1;
        width: 125px;
        height: 125px;
        display: inline-block;
        margin: 5px 4px 6px 7px;
        border: 1px solid #c3c3c3;
    }
    #sponsors a p{
        margin: 50px auto;
        width: 125px;
        text-align: center;
    }
    #sponsors a:hover{
        border: 1px solid #a7a7a7;
        /*text-decoration: underline;*/
        color: #3f3f3f;
        background-color: #cacaca;
    }
    #featured{
        position: relative;
    }
    #featuredico{
        position: absolute;
        top: 0;
        left: 0;
    }

    footer{
        background-color: black;
        height: 28px;
        color: white;
        padding: 7px;
    }
    footer p{
        margin: 5px 0 0 12%;
    }

    .old_ie #adbanner a, .old_ie article, .old_ie .readmore, .old_ie #sponsors a {
        display: inline;
        zoom: 1;
    }


</style>
<div class="collection_text">News</div>

<div id="secwrapper">
			<section>
				<article id="featured">
					<a href="#"><img src="{{asset('resources/images/1.jpg')}}" alt=""/></a>
					<img src="../../images/featured.png" alt="" id="featuredico"/>
					<h1>Varius Gravida Mi Volutpat</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis.</p>
					<a href="#" class="readmore">Read more</a>
				</article>
				<article>
					<a href="#"><img src="{{asset('resources/images/2.jpg')}}" alt=""/></a>
					<h1>Tortor at Vulputate Blandit</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis.</p>
					<a href="#" class="readmore">Read more</a>
				</article>
				<article class="rightcl">
					<a href="#"><img src="{{asset('resources/images/3.jpg')}}" alt=""/></a>
					<h1>Curabitur ut Eros a Justo Fermentum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis.</p>
					<a href="#" class="readmore">Read more</a>
				</article>
				<article id="photobox">
					<h1>Photos Box</h1>
					<img src="{{asset('resources/images/pbs1.jpg')}}" alt="" /><img src="{{asset('resources/images/pbs2.jpg')}}" alt="" /><img src="{{asset('resources/images/pbs3.jpg')}}" alt="" />
					<img src="{{asset('resources/images/pbs4.jpg')}}" alt="" /><img src="{{asset('resources/images/pbs5.jpg')}}" alt="" /><img src="{{asset('resources/images/pbs6.jpg')}}" alt="" />
					<img src="{{asset('resources/images/pbs7.jpg')}}" alt="" />
				</article>
				<article>
					<a href="#"><img src="{{asset('resources/images/4.jpg')}}" alt=""/></a>
					<h1>Fermentum Vulputate Ac Sit Amet Metus</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis.</p>
					<a href="#" class="readmore">Read more</a>
				</article>
				<article id="sponsors">
					<h1>Sponsors</h1>
					<a href="#"><p>Advertise here</p></a><a href="#"><p>Advertise here</p></a><a href="#"><p>Advertise here</p></a><a href="#"><p>Advertise here</p></a>
				</article>
				<article>
					<a href="#"><img src="{{asset('resources/images/5.jpg')}}" alt=""/></a>
					<h1>Aenean Quis Dignissim Diam</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis.</p>
					<a href="#" class="readmore">Read more</a>
				</article>
			</section>
		</div>
@endsection
