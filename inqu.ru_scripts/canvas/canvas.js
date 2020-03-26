console.log('START')

var canvas = document.querySelector('canvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext('2d');


//CANVAS PAINT

// Rect
//c.fillStyle = "red";
//c.fillRect(100, 100, 100, 100);

//Line
//c.beginPath();
//c.moveTo(50, 300);
//c.lineTo(300, 100);
//c.lineTo(400, 300);
//c.strokeStyle = "blue";
//c.stroke();

// Arc
// for (var i = 0; i < 1000; i++) {
//     var x = Math.random() * window.innerWidth;
//     var y = Math.random() * window.innerHeight;
//
//     c.beginPath();
//     c.arc(x, y, 50, 0, Math.PI * 2, false);
//     c.strokeStyle = 'black';
//     c.stroke();
// }

// CIRCLE CLASS
function Circle(x, y, dx, dy, radius) {
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;

    // DRAW A CIRCLE ON SCREEN
    this.draw = function(){
        c.beginPath();
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        c.strokeStyle = 'black';
        c.stroke();

    }

    // UPDATE CIRCLE POSITION
    this.update = function(){

        if (this.x + this.radius > innerWidth ||
            this.x - this.radius < 0) {
            this.dx = -this.dx;
        };

        if (this.y + this.radius > innerHeight ||
            this.y - this.radius < 0) {
            this.dy = -this.dy;
        };

        this.x += this.dx;
        this.y += this.dy;

    }
}

// CREATING CICLES
var circleArray = []
var circleAmount = 500
for (var i = 0; i < circleAmount; i++) {

    var radius = 30;
    var x = Math.random() * (innerWidth - radius * 2)
    + radius;
    var y = Math.random() * (innerHeight - radius * 2)
    + radius;
    var dx = (Math.random() - 0.5) * 2;
    var dy = (Math.random() - 0.5) * 2;

    circleArray.push(new Circle(x, y, dx, dy, radius));
}

// PLAYBACK

function animate() {
    requestAnimationFrame(animate);
    c.clearRect(0, 0, innerWidth, innerHeight);

    for (var i = 0; i < circleArray.length; i++) {
        circleArray[i].draw();
        circleArray[i].update();
    }

};

// -------------------**------------------- //

animate();
