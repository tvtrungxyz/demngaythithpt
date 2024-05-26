<!DOCTYPE html>
<html>
  <head>
    </script>

<!-- click tha tim -->

    <script type='text/javascript'> ! function (e, t, a) { function n() { c( ".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}" ), o(), r() } function r() { for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999"); requestAnimationFrame(r) } function o() { var t = "function" == typeof e.onclick && e.onclick; e.onclick = function (e) { t && t(), i(e) } } function i(e) { var a = t.createElement("div"); a.className = "heart", d.push({ el: a, x: e.clientX - 5, y: e.clientY - 5, scale: 1, alpha: 1, color: s() }), t.body.appendChild(a) } function c(e) { var a = t.createElement("style"); a.type = "text/css"; try { a.appendChild(t.createTextNode(e)) } catch (t) { a.styleSheet.cssText = e } t.getElementsByTagName("head")[0].appendChild(a) } function s() { return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")" } var d = []; e.requestAnimationFrame = function () { return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) { setTimeout(e, 1e3 / 60) } }(), n() }(window, document); </script>

<!--
    <script>
      // day la nhac nen 
      var audio = new Audio('https://files.catbox.moe/jev9vr.mp3');
      audio.oncanplaythrough = function() {
        audio.play();
      }
      audio.loop = true;
      audio.onended = function() {
        audio.play();
      }
    </script>
-->
<script type='text/javascript'>
      //<![CDATA[
        // loading
        $(".siben").delay(5000).fadeOut("fast");
        // open link
        function openlink(url) {
          window.open(url, "_blank").focus();
        }
        </script>
  </body>
</html>
<script>              
    function VietKhanhStart() {
                       audio.play();
                             }
                                   const VietKhanh_List = [
                                    "//files.catbox.moe/ne4s0f.m4a", // thôi thì em hãy về

                                    "//files.catbox.moe/y235dc.mp3", // nào cưới

                                    "//files.catbox.moe/etp0i9.mp3", // và chỉ mong trong con tym

                                    "//files.catbox.moe/qkuazk.mp3", //gió

                                    "//files.catbox.moe/etp0i9.mp3", // fly away
                                         ];
                                         //Random music
                                         let index = Math.floor(Math.random() * VietKhanh_List.length);
                                         const audio = new Audio(VietKhanh_List[index]);
                                         function VietKhanhAudio() {
                                           audio.play();
                                           }
                                           document.addEventListener("click", VietKhanhAudio);
                                           audio.addEventListener("ended", function() {
                                             index = (index + 1) % VietKhanh_List.length;
                                               audio.src = VietKhanh_List[index];
                                                 audio.play();
                                                 });
</script>
          </body>
                <script>//<![CDATA[
                      const disabledKeys = ["c", "C", "x", "J", "u", "I"];
                      const showAlert = e => {
                        e.preventDefault();
                        return alert("F12 CÁI CON CẶC !");
                      }
                      document.addEventListener("contextmenu", e => {
                        showAlert(e);
                      });
                      document.addEventListener("keydown", e => {
                        // calling showAlert() function, if the pressed key matched to disabled keys
                        if((e.ctrlKey && disabledKeys.includes(e.key)) || e.key === "F12") {
                          showAlert(e);
                        }
                      });
                      window.addEventListener("load",function(){
                        try {
                          !function t(n) {
                            1 === ("" + n / n).length && 0 !== n || function() {}.constructor("debugger")(), t(++n)
                          }(0)
                        } catch (n) {
                          setTimeout(t, 100)
                        }
                      });
                //]]></script>