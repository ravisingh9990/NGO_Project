<?php include "includes/header.php"; ?>
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

<style>
  /* CSS Document */
  .gallery-block {
    padding-bottom: 60px;
    padding-top: 60px;
  }

  .gallery-block .heading {
    margin-bottom: 50px;
    text-align: center;
  }

  .gallery-block .heading h2 {
    font-weight: bold;
    font-size: 1.4rem;
    text-transform: uppercase;
  }

  .gallery-block.cards-gallery h6 {
    font-size: 17px;
    font-weight: bold;
  }

  .gallery-block.cards-gallery .card {
    transition: 0.4s easy;
  }

  .gallery-block.cards-gallery .card img {
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  }

  .gallery-block.cards-gallery .card-body {
    text-align: center;
  }

  .gallery-block.cards-gallery .card-body p {
    font-size: 15px;
  }

  .gallery-block.cards-gallery a {
    color: #212529;
  }

  .gallery-block.cards-gallery a:hover {
    text-decoration: none;
  }

  .gallery-block.cards-gallery .card {
    margin-bottom: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  }

  @media (min-width: 768px) {

    .gallery-block .transform-on-hover:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
    }
  }

  /* *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
}
nav{
  background: #355C7D;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
} */
  a.active,
  a:hover {
    /* background: #1b9bff; */
    transition: .5s;
  }

  /* .checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
} */
  #check {
    display: none;
  }

  /* @media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
} */
  /* @media (max-width: 858px){
  .checkbtn{
    display: block;
  } */
  /* ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  } */
  /* nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  } */
  a:hover,
  a.active {
    background: none;
    color: #0082e6;
  }

  #check:checked~ul {
    left: 0;
  }
  }

  section {
    /* background: url(bg1.jpg) no-repeat; */
    background-size: cover;
    height: calc(100vh - 80px);
  }

  canvas {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;

  }
</style>
<!-- Page Header Start -->
<div class="page-header-about">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- <h2>Resources</h2> -->
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<div class="section-header text-center">
  <h2>Download Our Resources</h2>
</div>

<!-- gallery start -->
<section class="gallery-block cards-gallery">
  <div class="container">
    <div class="heading">
      <h2></h2>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href=”assets/docs/Annualreport.pdf” download><img src="assets/docs/icon.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Annualreport.pdf” download>
              <h6>Download Annual Report</h6>
            </a>

            <p class="text-muted card-text">1</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="assets/docs/Annualreport.pdf" download><img src="images/L2.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/GPBroucher.pdf” download>
              <h6>Download Broucher</h6>
            </a>
            <p class="text-muted card-text">2</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL3/index.html"><img src="images/L3.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Partnerstestimonials.pdf” download>
              <h6>Download Partner's Testimonial</h6>
            </a>
            <p class="text-muted card-text">3</p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL4/index.html"><img src="images/L4.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Annualreport.pdf” download>
              <h6>Download Annual Report</h6>
            </a>
            <p class="text-muted card-text">4</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL5/index.html"><img src="images/L5.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/GPBroucher.pdf” download>
              <h6>Download Broucher</h6>
            </a>
            <p class="text-muted card-text">5</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL6/index.html"><img src="images/L6.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Partnerstestimonials.pdf” download>
              <h6>Download Partner's Testimonial</h6>
            </a>
            <p class="text-muted card-text">6</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL7/index.html"><img src="images/L7.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Annualreport.pdf” download>
              <h6>Download Annual Report</h6>
            </a>
            <p class="text-muted card-text">7</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL8/index.html"><img src="images/L8.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/GPBroucher.pdf” download>
              <h6>Download Broucher</h6>
            </a>
            <p class="text-muted card-text">8</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL9/index.html"><img src="images/L9.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Partnerstestimonials.pdf” download>
              <h6>Download Partner's Testimonial</h6>
            </a>
            <p class="text-muted card-text">9</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL10/index.html"><img src="images/L10.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Annualreport.pdf” download>
              <h6>Download Annual Report</h6>
            </a>
            <p class="text-muted card-text">10</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL11/index.html"><img src="images/L11.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/GPBroucher.pdf” download>
              <h6>Download Broucher</h6>
            </a>
            <p class="text-muted card-text">11</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL12/index.html"><img src="images/L12.png" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Partnerstestimonials.pdf” download>
              <h6>Download Partner's Testimonial</h6>
            </a>
            <p class="text-muted card-text">12</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 transform-on-hover">
          <!-- <a class="lightbox" href="quizL13/index.html"><img src="images/L13.jpg" class="card-img-top"></a> -->
          <div class="card-body">
            <a href=”assets/docs/Annualreport.pdf” download>
              <h6>Download Annual Report</h6>
            </a>
            <p class="text-muted card-text">13</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- gallery End -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

<canvas></canvas>
<script src="sketch.js"></script>
<!-- <script>
  /**
 * author: keyzeroc
 */
var canvas, canvasCtx;
var particleProducer;
/**
 * called when page is loaded.
 * setups canvas.
 * setups listeners.
 * requests animation frame for function loop().
 */
window.onload = function(){
    setupCanvasAndContext();
    window.onresize = setupCanvasDimensions;
    canvas.onmousemove = mouseTracker.mouseMove;
    canvas.onclick = mouseTracker.mouseClick;
    particleProducer = new ParticleProducer(200, new BubbleFactory());
    requestAnimationFrame(loop);
}
/**
 * main function that loops continiously.
 * update and render function calls located here.
 */
function loop(){
    requestAnimationFrame(loop); 
    canvasCtx.clearRect(0,0,canvas.width,canvas.height);
    particleProducer.updAndDrawParticles();
}
/**
 * basic factory parent
 */
class ParticleFactory{
    produce(x, y, xSpeed, ySpeed, lifeDrain, size){};
}
/**
 * responsible for creating and returning bubble particle
 */
class BubbleFactory extends ParticleFactory{
    produce(x,y,xSpeed,ySpeed,lifeDrain,size){
        return new BubbleParticle(x, y, xSpeed, ySpeed, lifeDrain, size);
    };
}
/**
 * responsible for creating and returning rectangle particle
 */
class RectangleFactory extends ParticleFactory{
    produce(x,y,xSpeed,ySpeed,lifeDrain,size){
        size*=1.6; // rectangles look smaller than bubbles so make them bigger
        return new RectangleParticle(x, y, xSpeed, ySpeed, lifeDrain, size, size);
    }
}
/**
 * responsible for storing particles array
 * and choosing particle patterns.
 */
class ParticleProducer{  
    constructor(particlesMax, factory){
        this.particlesMax = particlesMax;
        this.factory = factory;
        this.particlesArray = new Array();
    }
    /**
     * called when mouse is moved.
     * if particlesArray is not full -
     * create particle that moves in the direction that the mouse was moving.
     * @param {int} mouseX - cursor position X.
     * @param {int} mouseY - cursor position Y.
     * @param {int} xPrev  - previous cursor position X.
     * @param {int} yPrev  - previous cursor position Y.
     */
    produceParticleMove(mouseX, mouseY, xPrev, yPrev){
        if(this.particlesArray.length!=this.particlesMax){
            let xSpeed = mouseX-xPrev !=0 ? (mouseX-xPrev)*0.38 : -1;
            let ySpeed = mouseY-yPrev !=0 ? (mouseY-yPrev)*0.38 : -1;
            this.particlesArray.push(this.factory.produce(
                mouseX, 
                mouseY, 
                xSpeed, 
                ySpeed, 
                0.008, 
                getRandomInt(5,8)
            ));
        }     
    }
    /**
     * called when mouse is clicked.
     * if particlesArray is not full -
     * creates particles in special pattern,
     * depending on pattern id argument that is passed.
     * @param {int} mouseX - cursor position X.
     * @param {int} mouseY - cursor position Y.
     * @param {String} pattern - id of pattern that we want to use.
     */
    produceParticleClick(mouseX, mouseY, pattern){
        if(this.particlesArray.length!=this.particlesMax){
            let sizes = [8,5];
            let speedMult = 2.5;
            let directions;
            if(pattern==1){
                directions = [[0,-1],[1,-1],[1,0],[1,1],[0,1],[-1,1],[-1,0],[-1,-1]];
            }else if(pattern==2){
                directions = [
                    [0,-1],[0.5,-1],[1,-1],[1,-0.5],
                    [1,0],[1,0.5],[1,1],[0.5,1],
                    [0,1],[-0.5,1],[-1,1],[-1,0.5],
                    [-1,0],[-1,-0.5],[-1,-1],[-0.5,-1]
                ];  
            }else{
                directions = [[0,0]];
            }       
            for(let i=0;i<directions.length;i++){
                this.particlesArray.push(this.factory.produce(
                    mouseX,
                    mouseY,
                    directions[i][0]*speedMult,                  
                    directions[i][1]*speedMult,
                    0.02,
                    sizes[i%2]//each second particle is small(sizes[0],sizes[1],sizes[0]...) 
                ));
            }         
        }
    }
    /**
     * updates and draws each particle that is in particlesArray array.
     * deletes particle from array if particle is not visible:
     * if particle alpha equals 0,
     * or it's out of window borders.
     */
    updAndDrawParticles(){
        for(let i=0;i<this.particlesArray.length;i++){
            let particle = this.particlesArray[i];
            particle.update();
            particle.draw();
            if(particle.x>=canvas.width||particle.x<=0||particle.y>=canvas.height||particle.y<=0||particle.color.a<=0){
                this.particlesArray.splice(i,1);
            }
        }
    }
}
/**
 * object responsible for handling mouse actions,
 * and store previous action mouse X and Y coordinates.
 */
var mouseTracker = {
    xPrev : 0,
    yPrev : 0,
    /**
     * handles mouse movement.
     * updates mouse coordinates div.
     * calls ParticleProducer.produceParticleMove() when mouse is moved.
     * sets xPrev and yPrev at the end.
     * @param {MouseEvent} event - used to get cursor X and Y coordinates.
     */
    mouseMove(event){
        event = event || window.event; 

        mouseX = event.clientX + document.body.scrollLeft;
        mouseY = event.clientY + document.body.scrollTop;        

        particleProducer.produceParticleMove(mouseX, mouseY, this.xPrev, this.yPrev);

        this.xPrev = mouseX; 
        this.yPrev = mouseY;
    },
    /**
     * handles mouse clicks.
     * udates mouse coordinates div.
     * calls ParticleProducer.produceParticleClick() when mouse is clicked.
     * sets xPrev and yprev at the end.
     * @param {MouseEvent} event - used to get cursor X and Y coordinates.
     */
    mouseClick(event){
        event = event || window.event; 

        mouseX = event.clientX + document.body.scrollLeft;
        mouseY = event.clientY + document.body.scrollTop;
        document.querySelector("#mouseCoords").textContent = "x: "+mouseX+", y: "+mouseY;

        particleProducer.produceParticleClick(mouseX, mouseY,"2");//CHANGE PATTERN HERE

        this.xPrev = mouseX; 
        this.yPrev = mouseY;
    }
};
/**
 * responsible for storing and returning r g b a values.
 * @param {int} r - red value.
 * @param {int} g - green value.
 * @param {int} b - blue value.
 * @param {int} a - alpha value(opacity).
 */
class RGBA{
    constructor(r,g,b,a){
        this.r = r;
        this.g = g;
        this.b = b;
        this.a = a;
    }
    //creates and returns rgba() string.
    getRGBA(){
        return "rgba("+this.r+","+this.g+","+this.b+","+this.a+")";
    }
}
/**
 * represents basic particle.
 * @param {int} x - x position.
 * @param {int} y - y position.
 * @param {double} xSpeed - x speed,but it's more like direction.
 * @param {double} ySpeed - y speed,but it's more like direction.
 * @param {double} lifeDrain - how fast alpha(opacity) is decreased.
 */
class Particle{
    constructor(x,y,xSpeed,ySpeed,lifeDrain){
        this.x = x;
        this.y = y;
        this.xSpeed = xSpeed;
        this.ySpeed = ySpeed;
        this.lifeDrain = lifeDrain;
    }
    draw(){}
    update(){}
}
/**
 * represents bubble particle.
 * @param {int} x - x position.
 * @param {int} y - y position.
 * @param {double} xSpeed - x speed,but it's more like direction.
 * @param {double} ySpeed - y speed,but it's more like direction.
 * @param {double} lifeDrain - how fast alpha(opacity) is decreased.
 * @param {int} radius - radius of bubble
 */
class BubbleParticle extends Particle{
    constructor(x,y,xSpeed,ySpeed,lifeDrain,radius){
        super(x,y,xSpeed,ySpeed,lifeDrain);
        this.color = new RGBA(
            getRandomInt(100,255),
            getRandomInt(100,255),
            getRandomInt(100,255),
            1
        );
        this.lifeDrain = lifeDrain;
        this.radius = radius;     
    }
    /**
     * update bubble position.
     * decrease alpha(opacity).
     */
    update(){
        this.x+=this.xSpeed;
        this.y+=this.ySpeed;
        this.color.a = this.color.a-this.lifeDrain;
    }
    /**
     * draw bubble as a circle,
     * and fill it with specified color.
     */
    draw(){
        canvasCtx.fillStyle = this.color.getRGBA();
        canvasCtx.beginPath();
        canvasCtx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI);
        canvasCtx.fill();
    }
}
/**
 * represents rectangle particle.
 * @param {int} x - x position.
 * @param {int} y - y position.
 * @param {double} xSpeed - x speed,but it's more like direction.
 * @param {double} ySpeed - y speed,but it's more like direction.
 * @param {double} lifeDrain - how fast alpha(opacity) is decreased.
 * @param {int} width - width of rectangle.
 * @param {int} height - height of rectangle.
 */
class RectangleParticle extends Particle{
    constructor(x,y,xSpeed,ySpeed,lifeDrain,width,height){
        super(x,y,xSpeed,ySpeed);
        this.lifeDrain = lifeDrain;
        this.width = width;
        this.height = height;
        this.color = new RGBA(
            getRandomInt(100,255),
            getRandomInt(100,255),
            getRandomInt(100,255),
            1
        );
    }
    /**
     * update rectangle position.
     * decrease alpha(opacity).
     */
    update(){
        this.x+=this.xSpeed;
        this.y+=this.ySpeed;
        this.color.a = this.color.a-this.lifeDrain;
    }
    /**
     * draw rectangle,
     * and fill it with specified color.
     */
    draw(){
        canvasCtx.fillStyle = this.color.getRGBA();
        canvasCtx.beginPath();
        canvasCtx.rect(this.x,this.y,this.width,this.height);
        canvasCtx.fill();
    }
}
/**
 * set canvas variable to canvas element.
 * set canvasCtx to canvas context.
 * call setupCanvasDimensions().
 */
function setupCanvasAndContext(){
    canvas = document.querySelector('canvas');
    canvasCtx = canvas.getContext('2d');
    setupCanvasDimensions();
}
/**
 * set canvas width and height to window's inner width and height.
 */
function setupCanvasDimensions(){
    canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
} 
/**
 * get random number between min and max.
 * @param {int} min - minimum, included.
 * @param {int} max - maximum, included.
 */
function getRandomInt(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
}

</script> -->


















<?php include "includes/footer.php"; ?>