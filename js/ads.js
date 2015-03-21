var adds = [];
adds[0] = '<a id="ads"  href="http://www.catb.org/~esr/faqs/hacker-howto.html" target="_blank" rel="nofollow"><img class="img-responsive" src="images/00.png" alt="FIRST SPONSOR NAME" ></a>'
adds[1] = '<a id="ads"  href="http://www.chathour.com/" target="_blank" rel="nofollow"><img class="img-responsive" src="images/01.png" alt="SECOND SPONSOR NAME" ></a>'
adds[2] = '<a id="ads"  href="https://gnu.org/" target="_blank" rel="nofollow"><img class="img-responsive" src="images/02.png" alt="THIRD SPONSOR NAME" ></a>'
adds[3] = '<a id="ads"  href="http://internet.org/" target="_blank" rel="nofollow"><img class="img-responsive" src="images/03.png" alt="FOURTH SPONSOR NAME"></a>'
adds[4] = '<a id="ads"  href="http://atlus.com/" target="_blank" rel="nofollow"><img class="img-responsive" src="images/04.png" alt="FIFTH SPONSOR NAME"></a>'


var y = 0;

function rotate_00(adds) {
while (y < adds.length) {
   var sort = Math.floor(Math.random() * adds.length);
   if (adds[sort] != 0) {
   document.getElementById('adspace_00').innerHTML = (adds[sort]);
    adds[sort] = 0;
    y++;
        }
    }
}

var ads = [];
ads[0] = '<a id="ads" href="https://www.allmusic.com" target="_blank" rel="nofollow"><img class="img-responsive" src="images/05.png" alt="FIRST SPONSOR NAME" ></a>'
ads[1] = '<a id="ads" href="https://torproject.org" target="_blank" rel="nofollow"><img class="img-responsive" src="images/06.png" alt="SECOND SPONSOR NAME" ></a>'
ads[2] = '<a id="ads" href="https://www.programming-motherfucker.org" target="_blank" rel="nofollow"><img class="img-responsive" src="images/07.png" alt="THIRD SPONSOR NAME" ></a>'
ads[3] = '<a id="ads" href="http://shop.lenovo.com/us/en/laptops/thinkpad" target="_blank" rel="nofollow"><img class="img-responsive" src="images/08.png" alt="FOURTH SPONSOR NAME"></a>'
ads[4] = '<a id="ads" href="https://www.github.com/" target="_blank" rel="nofollow"><img class="img-responsive" src="images/09.png" alt="FIFTH SPONSOR NAME"></a>'


var x = 0;

function rotate_01(ads) {
while (x < ads.length) {
   var sortt = Math.floor(Math.random() * ads.length);
   if (ads[sortt] != 0) {
   document.getElementById('adspace_01').innerHTML = (ads[sortt]);
    ads[sortt] = 0;
    x++;
        }
    }
}
