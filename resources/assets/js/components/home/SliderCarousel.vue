<template>
    <div class="carousel slide" id="carousel-example-captions" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="2" class="active">

            </li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img alt="900x500"
                     class="img-responsive"
                     src="http://jktgo.com/wp-content/uploads/2018/01/anantara-1514864057.jpg"
                     data-holder-rendered="true">
                <div class="carousel-caption">
                    <h3>First slide label</h3>
                    <p class="hidden-xs">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="item">
                <img alt="900x500"
                     class="img-responsive"
                     src="http://jktgo.com/wp-content/uploads/2018/01/anantara-1514864057.jpg"
                     data-holder-rendered="true">
                <div class="carousel-caption">
                    <h3>Second slide label</h3>
                    <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="item active">
                <img alt="900x500"
                 class="img-responsive"
                 src="http://jktgo.com/wp-content/uploads/2018/01/anantara-1514864057.jpg"
                 data-holder-rendered="true">
                <div class="carousel-caption">
                    <h3>Third slide label</h3>
                    <p class="hidden-xs">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</template>