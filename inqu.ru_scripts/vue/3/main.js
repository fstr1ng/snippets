new Vue({
    el: '#app',

    data: {
        color: 'black',
        width: 100
    },

    computed: {
        myStyle:function() {
            return {
                'background-color': this.color,
                'width': this.width + 'px',
            };
        }
    }
})
