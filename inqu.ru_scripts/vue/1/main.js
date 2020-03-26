new Vue({
    el: '#app',

    data: {
        title: 'Hello Vue!',
        link: 'https://inqu.ru',
        finishedLink: '<a href="https://google.com">Google</a>',
        counter: 0,
        increment: 1,
        x: 0,
        y: 0,
        userType: '',
    },

    computed: {
        output: function() {
            return this.counter > 5 ? 'greater than 5' : 'smaller than 5'
        }
    },

    methods: {
        sayHello: function() {
            this.title = 'Hello!!!'
            return this.title;
        },

        change: function(step) {
            this.counter += step;
        },

        updateCoordinates: function(event) {
            this.x = event.clientX;
            this.y = event.clientY;
        },

        alertMe: function() {
            alert("Your input: " + this.userType);
        },
    }
})
