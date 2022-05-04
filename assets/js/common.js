//UA判別
var _ua = (function(u) {
  return {
    Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1) ||
      u.indexOf("ipad") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
      u.indexOf("kindle") != -1 ||
      u.indexOf("silk") != -1 ||
      u.indexOf("playbook") != -1,
    Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
      u.indexOf("iphone") != -1 ||
      u.indexOf("ipod") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
      u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

//デバイス別 viewport 指定
if (_ua.Mobile) {
  $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1');
} else if (_ua.Tablet) {
  $("meta[name='viewport']").attr('content', 'width=1200');
} else {
  $("meta[name='viewport']").attr('content', 'width=1200');
}

//ウィンドウ幅で画像を切替える
$(document).ready(function() {
  $(function() {
    var $setElem = $('img'),
      pcName = '_pc',
      spName = '_sp',
      replaceWidth = 767;

    $setElem.each(function() {
      var $this = $(this);

      function imgSize() {
        if (window.innerWidth > replaceWidth) {
          $this.attr('src', $this.attr('src').replace(spName, pcName)).css({
            visibility: 'visible'
          });
        } else {
          $this.attr('src', $this.attr('src').replace(pcName, spName)).css({
            visibility: 'visible'
          });
        }
      }
      $(window).resize(function() {
        imgSize();
      });
      imgSize();
    });
  });
});

//UAを確認してbodyにクラス追加
$(document).ready(function() {
  var agent = navigator.userAgent;
  if (agent.search(/iPhone/) != -1) {
    $("body").addClass("iphone");
  } else if (agent.search(/Android/) != -1) {
    $("body").addClass("android");
  }
});

//iphoneバグ修正
$(document).ready(function() {
  var agent = navigator.userAgent;
  if (agent.search(/iPhone/) != -1) {
    $("span").removeClass('s-txt-nowrap');
    $("li span").removeClass('s-txt-nowrap');
  }
});

window.addEventListener("DOMContentLoaded", function () {
	const e = window.matchMedia("(max-width: 768px)");
	function n(e) {
		e.matches &&
			new ScrollHint(".ranking-blk", {
				remainingTime: 5e3,
				enableOverflowScrolling: !0,
				i18n: { scrollable: "スクロールできます" },
			});
	}
	n(e), e.addListener(n);
});

new ScrollHint(".ranking-scroll", {
	remainingTime: 5e3,
	enableOverflowScrolling: !0,
	i18n: { scrollable: "スクロールできます" },
});


//line break of label for search form
$(document).ready(function(){
  var str = $('.f4 ul li:nth-child(3) label').text();
  var line = str.replace('・', '・<br>');
  $('.f4 ul li:nth-child(3) label').html(line);
});


// border of graph
$(document).ready(function(){
  $( "<div class='graph__item__br'><span></span><span></span><span></span><span></span></div>" ).appendTo( ".graph .pb-bar-graph__item" );
});


