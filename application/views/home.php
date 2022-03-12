<style>
text{
        font-family:Helvetica, Arial, sans-serif;
        font-size:11px;
        pointer-events:none;
    }
    #chart{
        position:absolute;
        width:500px;
        height:500px;
        top:0;
        left:500px;
    }
    #question{
        position: absolute;
        width:400px;
        height:500px;
        top:0;
        left:1007px;
    }
    #question h1{
        font-size: 9px;
        font-weight: bold;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: absolute;
        padding: 0;
        margin: 0;
        top:52%;
        -webkit-transform:translate(0,-50%);
                transform:translate(0,-50%);
    }
</style>


<style>
.carousel {
  padding: 20px;
  perspective: 500px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.carousel > * {
  flex: 0 0 auto;
}
.carousel figure {
  cursor: -webkit-grab;
  cursor: grab;
  margin: 0;
  width: 400px;
  transform-style: preserve-3d;
  transition: transform 0.5s;
  transform-origin: 50% 50% -482.8427124746px;
}
.carousel figure img {
  width: 100%;
  box-sizing: border-box;
  padding: 0 40px;
  opacity: 0.9;
}
.carousel figure img:not(:first-of-type) {
  position: absolute;
  left: 0;
  top: 0;
  transform-origin: 50% 50% -482.8427124746px;
}
.carousel figure img:nth-child(2) {
  transform: rotateY(0.7853981634rad);
}
.carousel figure img:nth-child(3) {
  transform: rotateY(1.5707963268rad);
}
.carousel figure img:nth-child(4) {
  transform: rotateY(2.3561944902rad);
}
.carousel figure img:nth-child(5) {
  transform: rotateY(3.1415926536rad);
}
.carousel figure img:nth-child(6) {
  transform: rotateY(3.926990817rad);
}
.carousel figure img:nth-child(7) {
  transform: rotateY(4.7123889804rad);
}
.carousel figure img:nth-child(8) {
  transform: rotateY(5.4977871438rad);
}
.carousel nav {
  display: flex;
  justify-content: center;
  margin: 20px 0 0;
}
.carousel nav button {
  flex: 0 0 auto;
  margin: 0 5px;
  cursor: pointer;
  color: #333;
  background: none;
  border: 1px solid;
  letter-spacing: 1px;
  padding: 5px 10px;
}
#carouselButtons {
    margin-left: 100px;
    position: absolute;
    bottom: 0px;
}

</style>

<style>
.scene {
  width: 200px;
  height: 260px;
  border: 1px solid #CCC;
  margin: 40px 0;
  perspective: 600px;
}

.card {
  width: 100%;
  height: 100%;
  transition: transform 1s;
  transform-style: preserve-3d;
  cursor: pointer;
  position: relative;
}

.card.is-flipped {
  transform: rotateY(180deg);
}

.card__face {
  position: absolute;
  width: 100%;
  height: 100%;
  line-height: 260px;
  color: white;
  text-align: center;
  font-weight: bold;
  font-size: 40px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.card__face--front {
  background: red;
}

.card__face--back {
  background: blue;
  transform: rotateY(180deg);
}
</style>
  



<section class="hero-arsea centerd-item">
         <div class="banner-item" style="background-image:url(../assets/images/hero_area/banner2.jpg)">
				<div class="carousel" id="wrapper">
  <figure>
    <img src="https://source.unsplash.com/7mUXaBBrhoA/800x533" alt="">
    <img src="https://source.unsplash.com/bjhrzvzZeq4/800x533" alt="">
    <img src="https://source.unsplash.com/EbuaKnSm8Zw/800x533" alt="">
    <img src="https://source.unsplash.com/kG38b7CFzTY/800x533" alt="">
    <img src="https://source.unsplash.com/nvzvOPQW0gc/800x533" alt="">
    <img src="https://source.unsplash.com/mCg0ZgD7BgU/800x533" alt="">
    <img src="https://source.unsplash.com/1FWICvPQdkY/800x533" alt="">
    <img src="https://source.unsplash.com/VkwRmha1_tI/800x533" alt="">
  </figure>
  
</div>
<div id="carouselButtons">
    <button id="playButton" type="button"  class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-play"></span>
     </button>
    <button id="pauseButton" type="button" class="btn btn-default btn-xs">
        <span class="glyphicon glyphicon-pause"></span>
    </button>
</div>
         </div>

      </section>
      <!-- banner end-->

      <!-- ts intro start -->
    
       <section class="ts-intro-item section-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                  <div class="intro-left-content">
                     <h2 class="column-title">
                        
                        Participant List
                     </h2>
                     <p>
                             1.Veera<br>
							 2.Manikandan<br>
							 3.Rizwan<br>
                     </p>
				
                  </div>
               </div><!-- col end-->
               <div class="col-lg-8">
       
				  		 <div class="row">
					 <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class="single-intro-text mb-30">
                           <h4 class="ts-title">Host Points</h4>
                           <p>
                            
                           </p>
                           <!--<span class="count-number">01</span>-->
                        </div><!-- single intro text end-->
                     </div>
					  <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class="single-intro-text mb-30">
                           <h4 class="ts-title">Participant Points</h4>
                           <p>
                            
                           </p>
                           <!--<span class="count-number">01</span>-->
                        </div><!-- single intro text end-->
                     </div>
					</div>
					
					 <div class="row">
                     <div class="col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
					   <!--<div class="card__face card__face--front"></div>-->
                        <div class="single-intro-text single-contact-feature">
						
						  <?php foreach($cards as $card) : 
						  $card_name = $card->file_name; ?>  
						  <br>
						  <img  style="width: 100%; max-height: 100%;" src="<?php echo base_url().'public/cards/'.$card_name ?>" class="img-responsive"><br>
							
                           <!--<img style="width: 100%; max-height: 70px;" alt="image" src="<?php echo base_url();?>public/cards/B15.png" alt="">-->
						   <?php endforeach; ?>
                           <p>
                            
                           </p>
                           <!--<span class="count-number">01</span>-->
                        </div><!-- single intro text end-->
                     </div><!-- col end-->
                  </div>
               </div><!-- col end-->

            </div><!-- row end-->
			</div>
         </div><!-- container end-->
      </section>
     
       <section class="ts-intro-item section-bg">
         <div class="container">
            <div class="row">
               <div id="chart"></div>
                 <div id="question"><h1></h1></div>

            </div><!-- row end-->
			
         </div><!-- container end-->
      </section>
	  <br><br><br><br><br><br><br><br><br><br><br><br>
<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>

<script>
var carousel = document.querySelector(".carousel"),
  figure = carousel.querySelector("figure"),
  nav = carousel.querySelector("nav"),
  numImages = figure.childElementCount,
  theta = (2 * Math.PI) / numImages,
  currImage = 0;
// add touch detect:
function ontouch(el, callback) {
  // Modified from http://www.javascriptkit.com/javatutors/touchevents3.shtml
  var touchsurface = el,
    dir,
    swipeType,
    startX,
    startY,
    distX,
    distY,
    threshold = 150, //required min distance traveled to be considered swipe
    restraint = 100, // maximum distance allowed at the same time in perpendicular direction
    allowedTime = 500, // maximum time allowed to travel that distance
    elapsedTime,
    startTime,
    handletouch =
      callback || function (evt, dir, phase, swipetype, distance) {};

  touchsurface.addEventListener(
    "touchstart",
    function (e) {
      var touchobj = e.changedTouches[0];
      dir = "none";
      swipeType = "none";
      dist = 0;
      startX = touchobj.pageX;
      startY = touchobj.pageY;
      startTime = new Date().getTime(); // record time when finger first makes contact with surface
      handletouch(e, "none", "start", swipeType, 0); // fire callback function with params dir="none", phase="start", swipetype="none" etc
      e.preventDefault();
    },
    false
  );

  touchsurface.addEventListener(
    "touchmove",
    function (e) {
      var touchobj = e.changedTouches[0];
      distX = touchobj.pageX - startX; // get horizontal dist traveled by finger while in contact with surface
      distY = touchobj.pageY - startY; // get vertical dist traveled by finger while in contact with surface
      if (Math.abs(distX) > Math.abs(distY)) {
        // if distance traveled horizontally is greater than vertically, consider this a horizontal movement
        dir = distX < 0 ? "left" : "right";
        handletouch(e, dir, "move", swipeType, distX); // fire callback function with params dir="left|right", phase="move", swipetype="none" etc
      } else {
        // else consider this a vertical movement
        dir = distY < 0 ? "up" : "down";
        handletouch(e, dir, "move", swipeType, distY); // fire callback function with params dir="up|down", phase="move", swipetype="none" etc
      }
      e.preventDefault(); // prevent scrolling when inside DIV
    },
    false
  );

  touchsurface.addEventListener(
    "touchend",
    function (e) {
      var touchobj = e.changedTouches[0];
      elapsedTime = new Date().getTime() - startTime; // get time elapsed
      if (elapsedTime <= allowedTime) {
        // first condition for awipe met
        if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) {
          // 2nd condition for horizontal swipe met
          swipeType = dir; // set swipeType to either "left" or "right"
        } else if (
          Math.abs(distY) >= threshold &&
          Math.abs(distX) <= restraint
        ) {
          // 2nd condition for vertical swipe met
          swipeType = dir; // set swipeType to either "top" or "down"
        }
      }
      // Fire callback function with params dir="left|right|up|down", phase="end", swipetype=dir etc:
      handletouch(
        e,
        dir,
        "end",
        swipeType,
        dir == "left" || dir == "right" ? distX : distY
      );
      e.preventDefault();
    },
    false
  );
}
function DoSomething(dir, distance) {
  //modifiy this function for wheel rotation (prev/next) images
  var momentum = 100; // modify this value for how much momentum expected to switch to next/prev images
  switch (dir) {
    case "left":
    case "right":
      currImage += Math.round(distance / momentum);
      break;
  }
  figure.style.transform = `rotateY(${currImage * -theta}rad)`;
}
document.getElementById("wrapper").ondragstart = function () {
  return false;
}; // prevent image dragged on mouse drag
window.addEventListener(
  "load",
  function () {
    var dir,
      phase,
      el = document.getElementById("wrapper"),
      position = {
        X: 0,
        Y: 0
      };

    el.onmousedown = function (down) {
      position.X = down.clientX;
      position.Y = down.clientY;
    };

    el.onmouseup = function (up) {
      distX = up.clientX - position.X; // get horizontal dist traveled by finger while in contact with surface
      distY = position.Y - up.clientY; // get vertical dist traveled by finger while in contact with surface
      if (Math.abs(distX) > Math.abs(distY)) {
        // if distance traveled horizontally is greater than vertically, consider this a horizontal movement
        dir = distX < 0 ? "left" : "right";
        distance = distX;
      } else {
        // else consider this a vertical movement
        dir = distY < 0 ? "down" : "up";
        distance = distY;
      }
      dir = distance == 0 ? "none" : dir;
      DoSomething(dir, distance); // simulate touch from mouse control
    };
    ontouch(el, function (evt, dir, phase, swipetype, distance) {
      // evt: contains original Event object
      // dir: contains "none", "left", "right", "top", or "down"
      // phase: contains "start", "move", or "end"
      // swipetype: contains "none", "left", "right", "top", or "down"
      // distance: distance traveled either horizontally or vertically, depending on dir value

      if (phase == "end" && (dir == "left" || dir == "right"))
        // on succesful swipe
        DoSomething(dir, distance);
    });
  },
  false
);

</script>
<script>
$('#playButton').click(function () {
    $('#homeCarousel').carousel('cycle');
});
$('#pauseButton').click(function () {
    $('#homeCarousel').carousel('pause');
});
$('#homeCarousel').carousel({
    interval:2000,
    pause: "false"
});
</script>

<script>
var padding = {top:20, right:40, bottom:0, left:0},
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
            //randomNumbers = getRandomNumbers();
        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results
        var data = [
                    {"label":"PREPARE",  "value":1,  "question":"A1"}, // padding
                    {"label":"IMAC PRO",  "value":2,  "question":"A2"}, //font-family
                    {"label":"CLOSE",  "value":3,  "question":"A3"}, //color
                    {"label":"HONDA",  "value":4,  "question":"A4"}, //font-weight
                    {"label":"ENGAGE",  "value":5,  "question":"A5"}, //font-size
                    {"label":"APARTMENT",  "value":6,  "question":"A6"}, //background-color
                    {"label":"IPAD PRO",  "value":7,  "question":"A7"}, //nesting
                    {"label":"LAND",  "value":8,  "question":"A8"}, //bottom
                    {"label":"MOTOROLLA",  "value":9,  "question":"A9"}, //sans-serif
                    {"label":"BMW", "value":10, "question":"A10"},
                    {"label":"BMW", "value":11, "question":"A11"}
        ];
        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width",  w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);
        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");
        var vis = container
            .append("g");
            
        var pie = d3.layout.pie().sort(null).value(function(d){return 1;});
        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);
        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");
            
        arcs.append("path")
            .attr("fill", function(d, i){ return color(i); })
            .attr("d", function (d) { return arc(d); });
        // add the text
        arcs.append("text").attr("transform", function(d){
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle)/2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
            })
            .attr("text-anchor", "end")
            .text( function(d, i) {
                return data[i].label;
            });
        container.on("click", spin);
        function spin(d){
            
            container.on("click", null);
            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if(oldpick.length == data.length){
                console.log("done");
                container.on("click", null);
                return;
            }
            var  ps       = 360/data.length,
                 pieslice = Math.round(1440/data.length),
                 rng      = Math.floor((Math.random() * 1440) + 360);
                
            rotation = (Math.round(rng / ps) * ps);
            
            picked = Math.round(data.length - (rotation % 360)/ps);
            picked = picked >= data.length ? (picked % data.length) : picked;
            if(oldpick.indexOf(picked) !== -1){
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }
            rotation += 90 - Math.round(ps/2);
            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function(){
                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");
                    //populate question
                    d3.select("#question h1")
                        .text(data[picked].question);
                    oldrotation = rotation;
              
                    /* Get the result value from object "data" */
                    console.log(data[picked].value)
              
                    /* Comment the below line for restrict spin to sngle time */
                    container.on("click", spin);
                });
        }
        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
            .style({"fill":"black"});
        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({"fill":"white","cursor":"pointer"});
        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({"font-weight":"bold", "font-size":"30px"});
        
        
        function rotTween(to) {
          var i = d3.interpolate(oldrotation % 360, rotation);
          return function(t) {
            return "rotate(" + i(t) + ")";
          };
        }
        
        
        function getRandomNumbers(){
            var array = new Uint16Array(1000);
            var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
            if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
                window.crypto.getRandomValues(array);
                console.log("works");
            } else {
                //no support for crypto, get crappy random numbers
                for(var i=0; i < 1000; i++){
                    array[i] = Math.floor(Math.random() * 100000) + 1;
                }
            }
            return array;
        }
</script>

<script>
var card = document.querySelector('.card');
card.addEventListener( 'click', function() {
  card.classList.toggle('is-flipped');
});
</script>
     
    