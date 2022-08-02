<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-style.css">
</head>

<body>

    <h1 class="title-top text-center">Shipment History</h1>

    <!-- <div>
        <div class="d-flex flex-row justify-content-center">
            <div class="row p-2 timeline-left justify-content-end">
                <div class="col-md-6">May 14th</div>
                <div class="col-md-6">2:15pm</div>
            </div>
            <div class="row p-2 timeline-right">
                <div class="col-md-6">
                    <p>Delivered</p>
                    <p>Signed for</p>
                </div>
                <div class="col-md-6">Ohama,NE</div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2">Flex item 1</div>
            <div class="p-2">Flex item 3</div>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2">Flex item 1</div>
            <div class="p-2">Flex item 3</div>
        </div>
    </div> -->

    <section class="timeline">

        <div class="timeline__block">
            <div class="timeline__midpoint timeline__midpoint--highlight no-top-margin timeline-step-icon">
                <h3 class="timeline__year"><i class="ic-check ic-clr-primary"></i>check</h3>
            </div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Delivered</p>
                        <p class="timeline-right-status-info">Signed for</p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left">
                    <div class="col-md-6 timeline-left-col">
                        <p class="timeline-left-date">May 4th</p>
                    </div>
                    <div class="col-md-6 timeline-left-col">
                        <p class="timeline-left-time">2:15pm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline-step-default"></div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Arrived At Your Place</p>
                        <p class="timeline-right-status-info"></p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col"></div>
                    <div class="col-md-6 timeline-left-col">1:55pm</div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline-step-default"></div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Next Stop, Currently In:</p>
                        <p class="timeline-right-status-info"></p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col"></div>
                    <div class="col-md-6 timeline-left-col">1:35pm</div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline-step-default"></div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Out For Delivery</p>
                        <p class="timeline-right-status-info"></p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col"></div>
                    <div class="col-md-6 timeline-left-col">10:27am</div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline-step-default"></div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Service Scheduled</p>
                        <p class="timeline-right-status-info">Customer Request - Rescheduled for May 4th</p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col">May 3rd</div>
                    <div class="col-md-6 timeline-left-col">7:32am</div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline-step-default"></div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Received at Local Facillity</p>
                        <p class="timeline-right-status-info">Signed for</p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col">May 14th</div>
                    <div class="col-md-6 timeline-left-col">2:15pm</div>
                </div>
            </div>
        </div>

        <div class="timeline__block">
            <div class="timeline__midpoint timeline__midpoint--highlight no-top-margin timeline-step-icon">
                <h3 class="timeline__year"><i class="ic-check ic-clr-primary"></i>check</h3>
            </div>
            <div class="timeline__content timeline__content--left">
                <div class="row timeline__year">
                    <div class="col-md-6 ">
                        <p class="timeline-right-status">Delivered</p>
                        <p class="timeline-right-status-info">Signed for</p>
                    </div>
                    <div class="col-md-6 timeline-right-col">
                        <p class="timeline-right-country">Ohama, NE</p>
                    </div>
                </div>
                <div class="row timeline__text--right timeline-left timeline-col-two">
                    <div class="col-md-6 timeline-left-col">
                        <p class="timeline-left-date">May 14th</p>
                    </div>
                    <div class="col-md-6 timeline-left-col">
                        <p class="timeline-left-time">2:15pm</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--right">
                <h3 class="timeline__year">1991</h3>
                <div class="row timeline__text--right">
                    <div class="col-md-6">Earliest memory of running to the door to welcome Daddy home.</div>
                    <div class="col-md-6">Earliest memory of running to the door to welcome Daddy home.</div>
                </div>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--left">
                <h3 class="timeline__year">1993</h3>
                <p class="timeline__text--left">
                    Celebrated my birthday with my playmates in school. What a wonderful surprise to have the same birthday as my teacher!
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint timeline__midpoint--highlight no-top-margin">
                <h3 class="timeline__year">1999</h3>
            </div>
            <div class="timeline__content timeline__content--right">
                <h3 class="timeline__year timeline__year--mobile">1999</h3>
                <p class="timeline__text--right">
                    Naughty kid get to school early in order to play catching around school compound.
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--left">
                <h3 class="timeline__year">2003</h3>
                <p class="timeline__text--left">
                    Our cross country team won the fifth place - just one point away from the fourth and getting that tiny momento trophy and life-long glory. &#9785;
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--right">
                <h3 class="timeline__year">2008</h3>
                <p class="timeline__text--right">
                    Bumpkin intern arrived in Disneyland.
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint timeline__midpoint--highlight no-top-margin">
                <h3 class="timeline__year">2009</h3>
            </div>
            <div class="timeline__content timeline__content--left">
                <h3 class="timeline__year timeline__year--mobile">2009</h3>
                <img class="timeline__img" src="" alt="">
                <p class="timeline__text--left">
                    Thinking about the future.
                </p>
            </div>
        </div> -->



        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--left">
                <h3 class="timeline__year">2012</h3>
                <p class="timeline__text--left">
                    Proudly present - the graduand.
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint timeline__midpoint--highlight no-top-margin">
                <h3 class="timeline__year">2014</h3>
            </div>
            <div class="timeline__content timeline__content--right">
                <h3 class="timeline__year timeline__year--mobile">2014</h3>
                <p class="timeline__text--right">
                    New direction.
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--left">
                <h3 class="timeline__year">2015</h3>
                <img class="timeline__img" src="" alt="">
                <p class="timeline__text--left">
                    Grateful to the everyone and the universe.
                </p>
            </div>
        </div> -->

        <!-- <div class="timeline__block">
            <div class="timeline__midpoint"></div>
            <div class="timeline__content timeline__content--right">
                <h3 class="timeline__year">Going forward</h3>
                <p class="timeline__text--right">
                    Creating...
                </p>
            </div>
        </div> -->

    </section>

    <!-- <div class="history-tl-container">
  <ul class="tl">
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        3rd March 2015<br> 7:00 PM
      </div>
      <div class="item-title">Start from Shire</div>
      <div class="item-detail">Don't forget the ring</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        19th March 2015<br> 3:00 PM
      </div>
      <div class="item-title">Kill some Orcs</div>
      <div class="item-detail">Don't enter the caves!!</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        1st June 2015<br> 7:00 PM
      </div>
      <div class="item-title">Throw that goddamn ring in the lava</div>
      <div class="item-detail">Also, throw that Gollum too</div>
    </li>

  </ul>

</div> -->
    <!-- <div class="layout-container"> -->
    <!-- <ul class="text-center">
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li>hbvergf</li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul> -->
    <!-- </div> -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
</body>

</html>