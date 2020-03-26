var game = new Phaser.Game('100', '100', Phaser.AUTO, '',
{ preload: preload, create: create, update: update, render: render });

function preload() {
}

    var resolution = 500;
    var radius = 3;
    var everyNthDot = 5;
    var amplify = 0;
    var mouseRadius = 1;

    var dots = [];
    var dotsRads = [];
    var lines = [];
function create() {

    //  Create dots
    for (var i = 0; i < resolution; i++) {
        var dot = new Phaser.Circle(game.world.width*Math.random(),
                                   game.world.height*Math.random(), radius);
        dots.push(dot);
    }

    // Store dotsRads
    dots.forEach(function(dot) {
        dotsRads.push(dot.radius);
    });

    //  Vary dot radius
    dots.filter(function(dot, i){ return i % everyNthDot === 0 }).forEach(function(dot) {
        dot.diameter += amplify * Math.random();
    });

     //  Create lines
    dots.forEach(function(dot1){
        dots.forEach(function(dot2){
            let distance = Math.sqrt((dot1.x - dot2.x)**2 + (dot1.y - dot2.y)**2);
            if (distance < 100) {
                var line = new Phaser.Line(dot1.x, dot1.y, dot2.x, dot2.y);
                lines.push(line);
            };
        });
    });
}

function update() {

    lines.forEach(function(line){
        game.debug.geom(line, '#908b8b')
    });

    dots.forEach(function(dot, i) {
        let distance = Math.sqrt((game.input.x - dot.x)**2 + (game.input.y - dot.y)**2);
        initRadius = dot.radius;
        if (distance < 70) {
            dot.radius = dotsRads[i] + mouseRadius;
            game.debug.geom(dot,'#ffffff');

        }
        else if (distance < 150) {
            dot.radius = dotsRads[i] + mouseRadius/2;
            game.debug.geom(dot,'#6e6e6e');
        }
        else if (distance < 200) {
            dot.radius = dotsRads[i] + mouseRadius/3;
            game.debug.geom(dot,'#2b2b2b');
        }
        else  {
            dot.radius = dotsRads[i];
        };


    });

}

function render () {
}
