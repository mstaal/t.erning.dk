          window.addEventListener('load', function() {
          FastClick.attach(document.body);
          }, false);

        if (typeof window.DeviceMotionEvent != 'undefined') {
            // Shake sensitivity (a lower number is more)
            var sensitivity = 20;

            // Position variables
            var x1 = 0, y1 = 0, z1 = 0, x2 = 0, y2 = 0, z2 = 0;

            // Listen to motion events and update the position
            window.addEventListener('devicemotion', function (e) {
                x1 = e.accelerationIncludingGravity.x;
                y1 = e.accelerationIncludingGravity.y;
                z1 = e.accelerationIncludingGravity.z;
            }, false);

            // Periodically check the position and fire
            // if the change is greater than the sensitivity
            setInterval(function () {
                var change = Math.abs(x1-x2+y1-y2+z1-z2);

                if (change > sensitivity) {
                    document.getElementById('shake').click();
                }

                // Update new position
                x2 = x1;
                y2 = y1;
                z2 = z1;
            }, 150);
        }

        var changeAllowed = new Boolean(true);

        var viewable = new Boolean(true);

        var element = document.getElementById("shake");

        var randomDices = new Array();

        var dices = new Array(
            "et.png", "to.png", "tre.png", "fire.png", "fem.png", "seks.png"
            );

        element.addEventListener(
            "click",
            function() {
                this.style.width = "200px";
            }
        )

        function changeBool() {
            window.changeAllowed = !(window.changeAllowed);
        }

        function changeViewable() {
            window.viewable = !(window.viewable);
        }

        function locking() {
            if(window.changeAllowed) {
                document.getElementById("shake").style.backgroundColor="grey";
                document.getElementById("lock").innerHTML="Unlock";
            }
            else {
                document.getElementById("shake").style.backgroundColor="#2c6da0";
                document.getElementById("lock").innerHTML="Lock";
            }
            changeBool();
        }

        function hiding() {
            if(window.viewable) {
                document.getElementById("lockdiv").style.display="inline";
                document.getElementById("hide").innerHTML="Unhide";
                document.getElementById("terninger").style.display="none";
                document.getElementById("around").style.backgroundColor="#2c6da0";
            }
            else {
                document.getElementById("lockdiv").style.display="none";
                document.getElementById("hide").innerHTML="Hide";
                document.getElementById("terninger").style.display="inline";
                document.getElementById("around").style.backgroundColor="transparent";

                window.changeAllowed = true;
                document.getElementById("lock").innerHTML="Lock";
                document.getElementById("shake").style.backgroundColor="#2c6da0";
            }
            changeViewable();
        }

        function getJSRandom(num) {
            var numInt = new Array();
            for (var i = 0; i < num; i++) {
                numInt[i] = Math.floor(Math.random() * (5 + 1));
            };
            return numInt;
        }

        function getRandom(num) {
            if(num <= 0) {
                num = 1;
            }
            if(num > 6) {
                num = 6;
            }
            var urlPart1 = "https://www.random.org/integers/?num=";
            var urlPart2 = "&min=0&max=5&col=1&base=10&format=plain&rnd=new";
            var urlReq = urlPart1 + num + urlPart2;
            var numInt = new Array();
                $.ajax({
                  url: urlReq,
                  async: false,
                  success: function(data) {
                    numInt = data.split("\n").map(function(x){return parseInt(x)});
                    numInt.pop();
                  },
                  error: function() {
                    numInt = getJSRandom(num);
                  },
                  // error: function(data) {
                  //   var errorMes = "This page uses Random.org in order to function and it " +
                  //     "seems that something went wrong when making a request to their " +
                  //     "service. Random.org has posted the following error message:\n\n" +
                  //     data;
                  //   alert(errorMes);
                  // },
                  dataType: "html",
                });
            return numInt;
        }

        function fillDices() {
            if(window.navigator.onLine) {
                window.randomDices = window.getRandom(6);
            }
            else {
                window.randomDices = window.getJSRandom(6);
            }
        }

        function animate() {
            var tern = $("#around");
            tern.animate({top:"-=10px"}, "fast");
            tern.animate({left:"+=20px", top:"+=15px"}, "fast");
            tern.animate({left:"-=40px"}, "fast");
            tern.animate({left:"+=20px", top:"-=15px"}, "fast");
            tern.animate({top:"+=10px"}, "fast");
        }

        function imgElements(imgPrint, diceNum, theDices, dim) {
            for(var i=0; i < diceNum; i++) {
                  var stringDice = window.dices[theDices[i]];
                  imgPrint += '<img src="dice/' + stringDice +
                    '" width="' + dim + '" height="' + dim + '">';
                }
            return imgPrint;
        }

        function makeDices(dim) {
            if(changeAllowed) {
                window.changeAllowed = false;
                var selectOpt = document.getElementById("nummer");
                var diceNum = selectOpt.options[selectOpt.selectedIndex].value;
                var imgPrint = "";
                var theDices = null;
                // Husk at rette tilbage til getRandom - random.org.
                if(window.navigator.onLine) {
                    theDices = getRandom(diceNum);
                }
                else {
                    theDices = getJSRandom(diceNum);
                }
                imgPrint = imgElements(imgPrint, diceNum, theDices, dim);
                document.getElementById("terninger").innerHTML="";
                document.getElementById("terninger").innerHTML=imgPrint;
                animate();
                window.setTimeout(function() {
                    window.changeAllowed = true;
                }, 500);
            }
        }

        function makeDices2(dim) {
            if(changeAllowed) {
                window.changeAllowed = false;
                var selectOpt = document.getElementById("nummer");
                var diceNum = selectOpt.options[selectOpt.selectedIndex].value;
                var imgPrint = "";
                imgPrint = imgElements(imgPrint, diceNum, window.randomDices, dim);
                document.getElementById("terninger").innerHTML="";
                document.getElementById("terninger").innerHTML=imgPrint;
                animate();
                window.setTimeout(function() {
                    window.fillDices();
                    window.changeAllowed = true;
                }, 1100);
            }
        }


